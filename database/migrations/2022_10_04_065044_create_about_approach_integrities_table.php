<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutApproachIntegritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_approach_integrities', function (Blueprint $table) {
            $table->id();
            $table->integer('about')->default(1);
            $table->string('title')->nullable();
            $table->string('heading')->nullable();
            $table->string('button_text')->nullable();
            $table->text('button_link')->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
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
        Schema::dropIfExists('about_approach_integrities');
    }
}
