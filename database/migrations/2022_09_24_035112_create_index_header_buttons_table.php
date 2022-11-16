<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexHeaderButtonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('index_header_buttons', function (Blueprint $table) {
            $table->id();
            $table->integer('home')->default(1);
            $table->string('text_one')->nullable();
            $table->text('link_one')->nullable();
            $table->string('text_two')->nullable();
            $table->text('link_two')->nullable();
            $table->string('text_three')->nullable();
            $table->text('link_three')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('index_header_buttons');
    }
}
