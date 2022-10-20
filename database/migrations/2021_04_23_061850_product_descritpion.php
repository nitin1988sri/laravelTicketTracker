<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductDescritpion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_descritpions', function (Blueprint $table) {
            $table->id();
            $table->integer('p_id')->unique();
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('price');
            $table->text('quantity');
            $table->text('details');
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
        Schema::dropIfExists('product_descritpions');
    }
}
