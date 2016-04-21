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
              $table->float('prof_min');
              $table->float('prof_max');
              $table->integer('prof_grade');
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
