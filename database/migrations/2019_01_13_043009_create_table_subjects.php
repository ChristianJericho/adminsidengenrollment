<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSubjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject_code')->unique();
            $table->string('subject_name');
            $table->string('subject_desc');
            $table->string('section_id');   
            $table->string('grade_level');
            $table->string('room');
            $table->string('day');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('prereq')->nullable();
            $table->string('coreq')->nullable();  
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
        Schema::dropIfExists('subjects');
    }
}
    