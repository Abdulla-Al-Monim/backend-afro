<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaCenterBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_center_banners', function (Blueprint $table) {
            $table->id();
            $table->integer('media_center')->default(1);
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
        Schema::dropIfExists('media_center_banners');
    }
}
