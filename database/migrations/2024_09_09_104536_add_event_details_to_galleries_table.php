<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEventDetailsToGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('galleries', function (Blueprint $table) {
            $table->string('event_title')->nullable()->after('parent_event_id'); // Title of the event
            $table->text('event_description')->nullable()->after('event_title'); // Description of the event
            $table->year('event_year')->nullable()->after('event_description'); // Year of the event
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
            $table->dropColumn(['event_title', 'event_description', 'event_year']);
        });
    }
}
