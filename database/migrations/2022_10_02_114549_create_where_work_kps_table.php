<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhereWorkKpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('where_work_kps', function (Blueprint $table) {
            $table->id();
            $table->integer('where_we_work')->default(1);
            $table->string('name')->nullable();
            $table->string('country')->nullable();
            $table->string('tenancy_ratio')->nullable();
            $table->string('sites')->nullable();
            $table->string('tenants')->nullable();
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
        Schema::dropIfExists('where_work_kps');
    }
}
