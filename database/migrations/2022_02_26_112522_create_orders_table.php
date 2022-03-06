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
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('payment_method_id')->nullable();
            $table->foreign('payment_method_id')->references('id')->on('payment_methods');

            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('updated_by')->references('id')->on('users');
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->foreign('deleted_by')->references('id')->on('users');
        });

        Schema::create('order_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedSmallInteger('amount')->default(1);
            $table->timestamps();
        });

        // Schema::create('order_product_has_specs', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('order_products_id');
        //     $table->foreign('order_products_id')->references('id')->on('products');
        //     $table->unsignedBigInteger('specs_id');
        //     $table->foreign('specs_id')->references('id')->on('specs');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('order_product_has_specs');
        Schema::dropIfExists('order_product');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('payment_methods');
    }
}
