<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('user_want', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('want_id')->unsigned()->index();
            $table->timestamps();

            // 外部キー設定
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('want_id')->references('id')->on('users')->onDelete('cascade');

            // user_idとwant_idの組み合わせの重複を許さない
            $table->unique(['user_id', 'want_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_want');
    }
    
}
