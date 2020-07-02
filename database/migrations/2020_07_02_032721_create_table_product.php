<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->bigInteger('category_id');
            $table->text('description');
            $table->integer('quantity');
            $table->bigInteger('user_id');//ai đăng 
            $table->double('price');
            //0- còn hàng, 1- hết hàng, 2- chờ duyệt, 3- bị khoá , 4- ẩn
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('products');
    }
}