<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableChatConversations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('chat_conversations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sender_id');//người gửi
            $table->bigInteger('receiver_id'); //người nhận
            $table->bigInteger('last_sender_id');//ai gửi tn cuối cùng
            $table->string('last_content');
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
        Schema::dropIfExists('chat_conversations');
    }
}