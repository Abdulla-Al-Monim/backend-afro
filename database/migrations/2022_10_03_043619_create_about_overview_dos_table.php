<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutOverviewDosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_overview_dos', function (Blueprint $table) {
            $table->id();
            $table->integer('about')->default(1);
            $table->string('heading')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('tenancy_title_one')->nullable();
            $table->string('tenancy_percentage_one')->nullable();
            $table->string('tenancy_title_two')->nullable();
            $table->string('tenancy_percentage_two')->nullable();
            $table->string('tenancy_title_three')->nullable();
            $table->string('tenancy_percentage_three')->nullable();
            $table->string('button_text')->nullable();
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
        Schema::dropIfExists('about_overview_dos');
    }
}
