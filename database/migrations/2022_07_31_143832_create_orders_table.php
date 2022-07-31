<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('credit_card_id');
            $table->unsignedBigInteger('user_id');
            $table->dateTime('payment_date')->nullable();
            $table->dateTime('expiration_date')->nullable();
            $table->boolean('free')->default(false);
            $table->boolean('payed')->default(false);
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->foreign('credit_card_id')
                ->references('id')
                ->on('credit_cards');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
