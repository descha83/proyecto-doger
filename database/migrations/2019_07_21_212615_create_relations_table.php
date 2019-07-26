<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('contactos', function (Blueprint $table) {
                 $table->bigIncrements('id');
                 $table->bigInteger('id_user1');
                 $table->bigInteger('id_user2');
                 $table->timestamps();
             });


        // Schema::create('relations', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->timestamps();
        //     $table->unsignedInteger('user_id');
        //     $table->foreign('user_id')->references('id')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relations');
    }
}
