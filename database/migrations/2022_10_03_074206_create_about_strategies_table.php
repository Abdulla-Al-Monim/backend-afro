<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutStrategiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_strategies', function (Blueprint $table) {
            $table->id();
            $table->integer('about')->default(1);
            $table->string('title_one')->nullable();
            $table->text('description_one')->nullable();
            $table->text('image_one')->nullable();
            $table->string('title_two')->nullable();
            $table->text('description_two')->nullable();
            $table->text('image_two')->nullable();
            $table->string('title')->nullable();
            $table->string('button_one_text')->nullable();
            $table->string('button_link_one')->nullable();
            $table->string('button_two_text')->nullable();
            $table->string('button_link_two')->nullable();
            $table->text('footer')->nullable();
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
        Schema::dropIfExists('about_strategies');
    }
}
