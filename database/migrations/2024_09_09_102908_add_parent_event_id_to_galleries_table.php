<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddParentEventIdToGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('galleries', function (Blueprint $table) {
            $table->unsignedBigInteger('parent_event_id')->nullable()->after('Image'); // Nullable to allow main events
            $table->foreign('parent_event_id')->references('id')->on('galleries')->onDelete('cascade'); // Setting up the foreign key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('galleries', function (Blueprint $table) {
            $table->dropForeign(['parent_event_id']);
            $table->dropColumn('parent_event_id');
        });
    }
}
