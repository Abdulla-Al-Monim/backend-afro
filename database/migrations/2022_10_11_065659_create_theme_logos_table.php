<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThemeLogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theme_logos', function (Blueprint $table) {
            $table->id();
            $table->integer('theme')->default(1);
            $table->text('header_logo')->nullable();
            $table->text('footer_logo')->nullable();
            $table->text('admin_logo')->nullable();
            $table->text('fav_icon')->nullable();
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
        Schema::dropIfExists('theme_logos');
    }
}
