<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutGovernmanceBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_governmance_banners', function (Blueprint $table) {
            $table->id();
            $table->integer('about')->default(1);
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('button_text_one')->nullable();
            $table->string('button_link_one')->nullable();
            $table->string('button_text_two')->nullable();
            $table->string('button_link_two')->nullable();
            $table->string('button_text_three')->nullable();
            $table->string('button_link_three')->nullable();
            $table->string('button_text_four')->nullable();
            $table->string('button_link_four')->nullable();
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
        Schema::dropIfExists('about_governmance_banners');
    }
}
