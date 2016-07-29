<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function(Blueprint $table){
          $table->increments('id');
          $table->string('judul', 255);
          $table->integer('author_id');
          $table->integer('kategori_id');
          $table->string('slug');
          $table->text('konten');
          $table->string('image', 255);
          $table->string('thumb', 255);
          $table->boolean('publish')->default(0);
          $table->string('tags');
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
        //
    }
}
