<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStatements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('statements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_seller');
            $table->double('amout');
            $table->bigInteger('id_user_order')->default(0);//khoá ngoại sang bảng user_order
            $table->tinyInteger('is_plus')->default(1);//1 tiền vào, 0 là tiền ra
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
        Schema::dropIfExists('statements');
    }
}