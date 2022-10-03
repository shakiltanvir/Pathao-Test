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
        Schema::create('customars', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('password');
            $table->string('phone')->unique();
            $table->unsignedBigInteger('customar_tag');
            $table->foreign('customar_tag')->references('customar_tag')->on('tags');
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
        Schema::dropIfExists('customars');
    }
};
