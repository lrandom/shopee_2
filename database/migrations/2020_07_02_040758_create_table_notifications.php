<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNotifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('notifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('content');
            $table->string('link');
            $table->integer('user_id');
            $table->tinyInteger('is_read')->default(0);//0 là chưa đọc, 1 là đã đọc
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
        Schema::dropIfExists('notifications');
    }
}