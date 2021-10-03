<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->String('name');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->double('price', 8, 2);
            $table->boolean('active')->default(1);
            $table->double('current_quantity', 8, 2);
            $table->bigInteger('category_id')->unsigned();
            $table->timestamps();

            $table->softDeletes();

            $table->foreign('category_id')->references('id')->on('product_categories');
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
}
