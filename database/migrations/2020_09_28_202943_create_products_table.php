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
            $table->string("code");
            $table->string("name",15);
            $table->string("description",250)->nullable();
            $table->string("short_description",50)->nullable();
            $table->foreignId("product_type_id")->constrained('product_types');
            $table->string("status",15);
            $table->double("regular_price",7,2);
            $table->double("sale_price",7,2);
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
        Schema::dropIfExists('products');
    }
}
