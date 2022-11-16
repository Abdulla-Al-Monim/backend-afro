<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexAcademiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('index_academies', function (Blueprint $table) {
            $table->id();
            $table->integer('home')->default(1);
            $table->string('title')->nullable();
            $table->string('icon_one')->nullable();
            $table->string('text_one')->nullable();
            $table->string('icon_two')->nullable();
            $table->string('text_two')->nullable();
            $table->string('icon_three')->nullable();
            $table->string('text_three')->nullable();
            $table->string('icon_four')->nullable();
            $table->string('text_four')->nullable();
            $table->string('link')->nullable();
            $table->text('embedded')->nullable();
            $table->text('image')->nullable();
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
        Schema::dropIfExists('index_academies');
    }
}
