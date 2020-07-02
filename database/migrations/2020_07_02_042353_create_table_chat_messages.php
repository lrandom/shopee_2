<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableChatMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('chat_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sender_id');//người gửi
            $table->text('content'); //người nhận
            $table->string('image');//ai gửi tn cuối cùng
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
        Schema::dropIfExists('chat_messages');
    }
}