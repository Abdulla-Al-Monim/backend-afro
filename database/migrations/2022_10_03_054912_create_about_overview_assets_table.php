<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutOverviewAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_overview_assets', function (Blueprint $table) {
            $table->id();
            $table->integer('about')->default(1);
            
            $table->string('title')->nullable();
            $table->string('text')->nullable();
            $table->string('site_one')->nullable();
            $table->string('site_percentage_one')->nullable();
            $table->string('site_two')->nullable();
            $table->string('site_percentage_two')->nullable();
            $table->string('site_three')->nullable();
            $table->string('site_percentage_three')->nullable();
            $table->string('button_text')->nullable();
            $table->string('button_link')->nullable();
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
        Schema::dropIfExists('about_overview_assets');
    }
}
