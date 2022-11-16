<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhereWorkBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('where_work_banners', function (Blueprint $table) {
            $table->id();
            $table->integer('where_we_work')->default(1);
            $table->integer('default')->default(0)->comment('0 means image one means video ');
            $table->string('title')->nullable();
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
        Schema::dropIfExists('where_work_banners');
    }
}
