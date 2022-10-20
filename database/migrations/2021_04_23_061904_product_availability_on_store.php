<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductAvailabilityOnStore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_availability_on_stores', function (Blueprint $table) {
            $table->id();
            $table->integer('p_id')->unique();
            $table->text('s_state');
            $table->text('s_city');
            $table->text('s_address');
            $table->text('price_at_store');
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
        //
    }
}
