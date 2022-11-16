<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSustainabilityBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sustainability_banners', function (Blueprint $table) {
            $table->id();
            $table->integer('sustainability')->default(1);
            $table->string('title')->nullable();
            $table->integer('default')->default(0)->comment('0 means image one means video 2 for youtube');
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
        Schema::dropIfExists('sustainability_banners');
    }
}
