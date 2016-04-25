<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePositions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
      {
          Schema::create('positions', function (Blueprint $table) {
              $table->increments('id');
              $table->string('pos_name');
              $table->double('pos_other');
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
          Schema::dropIfExists('positions');
      }
}
