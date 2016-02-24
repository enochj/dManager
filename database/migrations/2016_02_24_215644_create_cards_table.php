<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function(Blueprint $table) {
          $table->increments('id');
          $table->string("last-modified");
          $table->string('code');
          $table->string('title');
          $table->string('type');
          $table->string('type_code');
          $table->string('subtype');
          $table->string('subtype_code');
          $table->string('text');
          $table->string('faction');
          $table->string('faction_code');
          $table->string('faction_letter');
          $table->string('flavor');
          $table->string('illustrator');
          $table->string('minimumdecksize');
          $table->string('number');
          $table->string('quantity');
          $table->string('setname');
          $table->string('set_code');
          $table->string('side');
          $table->string('side_code');
          $table->string('uniqueness');
          $table->string('limited');
          $table->string('cycle_code');
          $table->string('cyclenumber');
          $table->string('ancurLink');
          $table->string('url');
          $table->string('imagesrc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cards');
    }
}
