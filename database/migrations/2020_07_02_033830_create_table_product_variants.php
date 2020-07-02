<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductVariants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('product_variants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); // tên biến thể (phân loại)
            $table->bigInteger('id_product');//id sản phẩm
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
        Schema::dropIfExists('product_variants');
    }
}