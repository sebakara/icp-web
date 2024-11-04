<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToBestProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('winners_or_special_certificate', function (Blueprint $table) {
            $table->date('date')->after('description');
            $table->string('file_path')->after('date');
            $table->string('qr_code_path')->after('file_path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('winners_or_special_certificate', function (Blueprint $table) {
            $table->dropColumn(['date', 'file_path', 'qr_code_path']);
        });
    }
}
