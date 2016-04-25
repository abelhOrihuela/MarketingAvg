<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
      {
          Schema::create('profiles', function (Blueprint $table) {
              $table->increments('prof_id');
              $table->string('prof_name');
              $table->double('prof_salary');
              $table->float('prof_progresion')->default(0.01);
              $table->float('prof_min')->default(0.01);
              $table->float('prof_max')->default(0.01);;
              $table->integer('prof_grade');
              $table->integer('comp_id');
              $table->integer('pos_id');
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
          Schema::dropIfExists('profiles');
      }
}
