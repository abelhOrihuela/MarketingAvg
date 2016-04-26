<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCompany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
      {
          Schema::create('companies', function (Blueprint $table) {
              $table->increments('id');
              $table->string('comp_name');
              $table->string('comp_other');
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
          Schema::dropIfExists('companies');
      }
}
