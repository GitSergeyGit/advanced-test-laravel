<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->float('price');
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('product2order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
//            $table->foreignIdFor(\App\Models\Order::class);
//            $table->foreignIdFor(\App\Models\Product::class);
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product2order');
        Schema::dropIfExists('products');
    }
}
