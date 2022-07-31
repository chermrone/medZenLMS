<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableCourseOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_orders', function (Blueprint $table) {
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('order_id');
            $table->foreign('course_id')
                ->references('id')
                ->on('courses')
                ->onDelete('cascade');
            $table->foreign('order_id')
                ->references('id')
                ->on('orders');
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
        Schema::dropIfExists('pivot_table_order_user');
    }
}
