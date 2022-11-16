<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutManagementTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_management_teams', function (Blueprint $table) {
            $table->id();
            $table->integer('about')->default(1);
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->string('join_date')->nullable();
            $table->string('committe')->nullable();
            $table->text('skill_xperience')->nullable();
            $table->text('other')->nullable();
            $table->text('appointment')->nullable();
            $table->string('email')->nullable();
            $table->text('image')->nullable();
            $table->text('qr')->nullable();
            $table->string('fb')->nullable();
            $table->string('linkenin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instra')->nullable();
            $table->string('youtube')->nullable();
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
        Schema::dropIfExists('about_management_teams');
    }
}
