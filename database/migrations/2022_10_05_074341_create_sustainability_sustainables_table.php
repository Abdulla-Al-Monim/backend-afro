<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSustainabilitySustainablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sustainability_sustainables', function (Blueprint $table) {
            $table->id();
            $table->integer('sustainability')->default(1);
            $table->string('title_heading')->nullable();
            $table->string('title_one')->nullable();
            $table->text('description_one')->nullable();
            $table->string('title_two')->nullable();
            $table->text('description_two')->nullable();
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
        Schema::dropIfExists('sustainability_sustainables');
    }
}
