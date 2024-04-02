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
        Schema::create('accounttransaction', function (Blueprint $table) {
            $table->id('Transaction_ID');
            $table->string('Student_ID', 10);
            $table->integer('Amount');
            $table->unsignedBigInteger('Payment_Method_ID');
            $table->foreign('Payment_Method_ID')->references('Payment_Method_ID')->on('paymentmethod');
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
        Schema::dropIfExists('accounttransaction');
    }
};
