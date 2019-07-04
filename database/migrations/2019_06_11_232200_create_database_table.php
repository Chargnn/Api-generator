<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('database', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->unsignedInteger('api_id');
            $table->foreign('api_id')->references('id')->on('api')->onDelete('cascade');
            $table->string('host');
            $table->string('username');
            $table->string('password');
            $table->string('database');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('database');
    }
}
