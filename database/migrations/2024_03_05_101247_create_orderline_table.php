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
        Schema::create('orderline', function (Blueprint $table) {
            
            $table->unsignedBigInteger('Product_ID');
            $table->foreign('Product_ID')->references('Product_ID')->on('products');
           
            $table->unsignedBigInteger('Order_ID');
            $table->foreign('Order_ID')->references('Order_ID')->on('order');

          
            $table->integer('Quantity');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderline');
    }
};
