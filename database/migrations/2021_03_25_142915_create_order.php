<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('user_email');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->double('ship');
            $table->string('coupon');
            $table->double('coupon_money');
            $table->double('total');
            $table->string('status');
            $table->foreign('id')->references('order_id')->on('order_product');
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
        Schema::dropIfExists('order');
    }
}
