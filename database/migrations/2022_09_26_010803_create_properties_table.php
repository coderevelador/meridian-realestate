<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('location');
            $table->string('image');
            $table->string('gallery')->nullable();
            $table->string('description')->nullable();
            $table->integer('price')->nullable();
            $table->integer('type_id')->nullable();
            $table->integer('status_id')->nullable();
            $table->integer('area')->nullable();
            $table->string('bedroom')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('amenities_id')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
