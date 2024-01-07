<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
            //$table->id();
            

            $table->string('id', 45)->nullable()->primary();
            $table->string('possition', 45)->nullable();
            $table->string('Address', 45)->nullable();
            $table->string('Work_Place_Address', 100)->nullable();
            $table->string('Date_of_Birth', 45)->nullable();
            $table->string('Current_Living_Distric', 45)->nullable();
            $table->string('Staff_ID', 45)->nullable();
            $table->string('Specialised_Subjects', 45)->nullable();
            $table->string('Internship', 45)->nullable();
            $table->string('Job1', 45)->nullable();
            $table->string('Job2', 45)->nullable();
            $table->string('Achievement1', 45)->nullable();
            $table->string('Achievement2', 45)->nullable();
            $table->string('Degree1', 45)->nullable();
            $table->string('Degree2', 45)->nullable();
            $table->string('Degree3', 45)->nullable();
            $table->string('Profile_picture', 45)->nullable();
            $table->string("user_id", 255);
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
        Schema::dropIfExists('lectures');
    }
};
