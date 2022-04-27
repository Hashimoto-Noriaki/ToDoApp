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
        //
        Schema::create('tasks', function (Blueprint $table){
            $table->bigIncrements('id',20)->unsigned();
            $table->foreignId('folder_id');
            // $table->integer('folder_id'); //integrは数字の設定ができない
            $table->string('title',255);
            $table->date('due_date')->default(now());//defaultで１指定はできない　(
            $table->integer('Status')->default(1);
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
    }
};
