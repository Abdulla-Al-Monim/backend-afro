<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_sliders', function (Blueprint $table) {
            $table->id();
            $table->integer('home')->default(1);
            $table->string('title')->nullable();
            $table->string('site')->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->text('d_image')->nullable();
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
        Schema::dropIfExists('service_sliders');
    }
}
