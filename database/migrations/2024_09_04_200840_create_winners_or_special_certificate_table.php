<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWinnersOrSpecialCertificateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('winners_or_special_certificate', function (Blueprint $table) {
            $table->id();
            $table->string('student_full_name'); // Name of the student
            $table->string('project_name_or_special_award'); // Name of the project
            $table->text('description'); // Description of the project
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('winners_or_special_certificate');
    }
}
