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
        Schema::create('productes', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
           $table->string('name');
           $table->string('slug');
           $table->string('small_description');
           $table->string('description');
           $table->string('original_price');
           $table->string('selling_price');
           $table->string('qantity');
           $table->string('image');
           $table->tinyInteger('status');
           $table->tinyInteger('trending');
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
        Schema::dropIfExists('products');
    }
};
