<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('products_images', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('image');//đường dẫn ảnh
            $table->tinyInteger('is_preview')->default(0);//1 là ảnh đại diện, 0 ko phải
            $table->bigInteger('product_id');
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
        Schema::dropIfExists('products_images');
    }
}