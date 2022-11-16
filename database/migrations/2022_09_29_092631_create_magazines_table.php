<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagazinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magazines', function (Blueprint $table) {
            $table->id();
            $table->integer('home')->default(1);
            $table->string('heading')->nullable();
            $table->string('title')->nullable();
            $table->string('sort_description')->nullable();
            $table->text('description')->nullable();
            $table->string('button_link')->nullable();
            $table->text('image')->nullable();
            $table->text('image_banner')->nullable();
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
        Schema::dropIfExists('magazines');
    }
}
