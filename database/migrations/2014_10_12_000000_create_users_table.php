<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('offer_id')->unsigned()->nullable();
            $table->integer('demande_id')->unsigned()->nullable();
            $table->integer('comment_id')->unsigned()->nullable();
            $table->string('role')->default('USER');
            $table->string('avatar')->default('default.jpg');
            $table->string('city')->nullable();
            $table->string('level');
            $table->string('description');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('offer_id')->references('id')->on('offers')->onDelete('cascade');

            $table->foreign('demande_id')->references('id')->on('demandes')->onDelete('cascade');

            $table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');
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
}
