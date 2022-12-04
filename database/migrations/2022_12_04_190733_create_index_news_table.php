<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('index_news', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('news_title')->comment('最新消息標題');
            $table->string('news_content')->comment('最新消息內文');
            $table->string('news_img_path')->comment('最新消息圖片路徑');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('index_news');
    }
};
