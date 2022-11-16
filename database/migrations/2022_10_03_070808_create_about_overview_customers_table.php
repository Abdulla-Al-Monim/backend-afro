<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutOverviewCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_overview_customers', function (Blueprint $table) {
            $table->id();
            $table->integer('about')->default(1);
            $table->string('heading')->nullable();
            $table->string('text')->nullable();
            $table->string('title')->nullable();
            $table->string('multinational_one')->nullable();
            $table->string('multinational_percentage_one')->nullable();
            $table->string('multinational_two')->nullable();
            $table->string('multinational_percentage_two')->nullable();
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
        Schema::dropIfExists('about_overview_customers');
    }
}
