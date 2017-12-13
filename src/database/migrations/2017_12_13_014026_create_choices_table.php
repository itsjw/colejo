<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChoicesTable extends Migration
{
    /**
     * マイグレーション実行
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choices', function (Blueprint $table) {
            $table
                ->increments('id')
                ->comment('ID');

            $table
                ->integer('question_id')
                ->unsigned()
                ->comment('問題文ID 外部参照 questions.id');

            $table
                ->integer('number')
                ->unsigned()
                ->comment('選択肢番号');

            $table
                ->text('body')
                ->comment('選択肢本文');

            $table
                ->integer('correct')
                ->unsigned()
                ->comment('正解');

            $table
                ->timestamp('created_at')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('登録日');

            $table
                ->timestamp('updated_at')
                ->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))
                ->comment('更新日');

            /*
             * 外部参照制約 問題文
             */
            $table
                ->foreign('question_id')
                ->references('id')
                ->on('questions')
                ->onDelete('RESTRICT')
                ->onUpdate('RESTRICT');
        });
    }

    /**
     * ロールバック時に実行
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('choices');
    }
}
