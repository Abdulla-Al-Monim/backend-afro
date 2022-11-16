<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('index_headers', function (Blueprint $table) {
            $table->id();
            $table->integer('home')->default(1);
            $table->string('title')->nullable();
            $table->string('heading')->nullable();
            $table->integer('default')->default(0)->comment('0 means image one means video');
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->text('video')->nullable();
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
        Schema::dropIfExists('index_headers');
    }
}
