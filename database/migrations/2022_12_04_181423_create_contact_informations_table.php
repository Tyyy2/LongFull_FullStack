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
        Schema::create('contact_informations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('contact_name')->comment('姓名');
            $table->string('contact_phone')->comment('電話');
            $table->string('contact_mail')->comment('信箱');
            $table->string('contact_content')->comment('內文');
            $table->string('contact_requirement')->comment('需求勾選');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_informations');
    }
};
