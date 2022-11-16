<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('home')->nullable();
            $table->integer('company_id')->nullable();
            $table->integer('region_id')->nullable();
            $table->string('location')->nullable();
            $table->string('title')->nullable();
            $table->string('client_name')->nullable();
            $table->string('starting_date')->nullable();
            $table->string('end_date')->nullable();
            $table->text('description')->nullable();
            $table->text('key_achievement')->nullable();
            $table->text('icon')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
