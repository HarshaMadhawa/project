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
        Schema::create('temp_users', function (Blueprint $table) {
            $table->id();
            $table->string('UserId');
            $table->string('FullName');
            $table->string('Initial');
            $table->string('gender');
            $table->string('role');
            $table->string('email')->unique();
            $table->string('StudentLectureId');
            $table->string('NIC');
            $table->string('Contact');
            $table->string('password');

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
        Schema::dropIfExists('temp_users');
    }
};
