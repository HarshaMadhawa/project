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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('UserId');
            $table->string('FullName')->nullable();
            $table->string('Initial')->nullable();
            $table->string('gender')->nullable();
            $table->string('role')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('StudentLectureId')->nullable();
            $table->string('NIC')->nullable();
            $table->string('Contact')->nullable();
            $table->string('password')->nullable();
            
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
        Schema::dropIfExists('users');
    }
};
