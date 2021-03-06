<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sets', function(Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('code');
          $table->string('number');
          $table->string('cyclenumber');
          $table->string('available');
          $table->string('known');
          $table->string('total');
          $table->string('url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sets');
    }
}
