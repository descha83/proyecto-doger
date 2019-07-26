<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('likes', function (Blueprint $table) {
                 $table->bigIncrements('id');
                 $table->bigInteger('id_user_like');
                 $table->bigInteger('id_posteo');
                 $table->timestamps();
             });

        // Schema::create('likes', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->timestamps();
        //     $table->unsignedInteger('user_id');
        //     $table->foreign('user_id')->references('id')->on('users');
        //     $table->unsignedInteger('post_id');
        //     $table->foreign('post_id')->references('id')->on('posts');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
}
