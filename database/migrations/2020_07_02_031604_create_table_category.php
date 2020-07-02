<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');//tạo cột id tự tăng có kiểu big int
            $table->string('name')->nullable();//tạo cột varchar cho phép null
            $table->bigInteger('parent_id')->default(0);//big int mặc định 0 có danh mục cha
            $table->tinyInteger('status')->default(1);//1 là active
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
        Schema::dropIfExists('categories');
    }
}