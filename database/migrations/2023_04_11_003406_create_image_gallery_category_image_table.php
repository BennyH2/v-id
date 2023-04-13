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
        Schema::create('image_gallery_category_image', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('image_gallery_category_id');
            $table->unsignedBigInteger('image_gallery_id');
            $table->timestamps();
    
            $table->foreign('image_gallery_category_id')->references('id')->on('image_gallery_categories')->onDelete('cascade');
            $table->foreign('image_gallery_id')->references('id')->on('image_galleries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_gallery_category_image');
    }
};
