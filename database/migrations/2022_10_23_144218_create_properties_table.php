<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->enum('for', ['sale', 'rent']);
            $table->enum('status', ['publish', 'draft', 'archive']);
            $table->enum('property_type', ['house', 'apartment', 'vila', 'comercial']);
            $table->string('location');
            $table->decimal('price', 8, 2);
            $table->string('video')->nullable();
            $table->string('cover_image');
            $table->integer('bed');
            $table->integer('bath');
            $table->integer('garage');
            $table->string('floor_plans_image')->nullable();
            $table->string('area');
            $table->string('slider_image')->nullable();
            $table->enum('in_slider', ['yes', 'no']);
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

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
};
