<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProperties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->uuid('unic_id')->unique();
            $table->string('author');
            $table->text('name');
            $table->string('article_type');
            $table->string('category');
            $table->float('price');
            $table->float('area_usable');
            $table->text('location');
            $table->text('description');
            $table->text('image_1')->nullable();
            $table->text('image_2')->nullable();
            $table->text('image_3')->nullable();
            $table->text('image_4')->nullable();
            $table->text('image_5')->nullable();
            $table->text('image_6')->nullable();
            $table->text('image_7')->nullable();
            $table->text('image_8')->nullable();
            $table->text('image_9')->nullable();
            $table->text('image_10')->nullable();
            $table->text('image_11')->nullable();
            $table->text('image_12')->nullable();
            $table->text('image_13')->nullable();
            $table->text('image_14')->nullable();
            $table->text('image_15')->nullable();
            $table->integer('bedrooms');
            $table->string('partitioning');
            $table->string('comfort');
            $table->string('floor');
            $table->float('area_land');
            $table->integer('build_year');
            $table->string('land_type');
            $table->string('land_classification');
            $table->float('street_front');
            $table->string('commercial_type');
            $table->string('commercial_specific');
            $table->string('availability');
            $table->timestamp('available_date', $precision = 0);
            $table->string('property_type');
            $table->string('aproved_by');
            $table->dateTime('aproved_at', $precision = 0);
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
