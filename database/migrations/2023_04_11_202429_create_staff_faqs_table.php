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
        Schema::create('staff_faqs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->optinal();
            $table->integer("author")->optinal();
            $table->string('question')->optinal();
            $table->text('answer')->optinal();
            $table->timestamps();
    
            $table->foreign('category_id')->references('id')->on('staff_faq_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_faqs');
    }
};
