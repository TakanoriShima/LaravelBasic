<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // Schemaファサードで accounts テーブルの作成
      Schema::create('accounts', function (Blueprint $table) {
    
      // カラムを作成していく
      $table->increments('id');
      $table->string('name');
      $table->string('email')->unique();
      $table->string('password');
      $table->rememberToken();
      $table->timestamps();
      });
    }
    public function down()
    {
      // テーブル削除（ロールバック）
      Schema::drop('accounts');
    }

}
