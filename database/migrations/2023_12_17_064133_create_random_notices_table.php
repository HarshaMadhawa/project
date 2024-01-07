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
        Schema::create('random_notices', function (Blueprint $table) {
            $table->id();
            $table->string('UserID')->nullable();
            $table->string('Role')->nullable();
            $table->string('Name');
            $table->string('Designation');
            $table->string('Topic');
            $table->string('Content');
            $table->string('Date');
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
        Schema::dropIfExists('random_notices');
    }
};
