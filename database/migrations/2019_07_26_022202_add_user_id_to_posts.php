<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {

         Schema::table('posts', function (Blueprint $table) {
           $table->unsignedBigInteger('user_id');
         });
         Schema::table('posts', function($table) {
           $table->foreign('user_id')->references('id')->on('users');
  });

     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::table('posts', function (Blueprint $table) {
           $table->dropForeign('user_id');
           $table->dropColumn('user_id');
         });
     }
 }
