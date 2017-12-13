<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * マイグレーション実行
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table
                ->increments('id')
                ->comment('ID');

            $table
                ->integer('number')
                ->unsigned()
                ->comment('問題番号');

            $table
                ->text('body')
                ->comment('問題文');

            $table
                ->text('commentary')
                ->comment('解説');

            $table
                ->integer('firstcategory_id')
                ->unsigned()
                ->comment('小項目ID 外部参照 firstcategories.id');

            $table
                ->integer('divition_id')
                ->unsigned()
                ->comment('問題種別ID 外部参照 divitions.id');

            $table
                ->integer('round_id')
                ->unsigned()
                ->comment('試験実施回ID 外部参照 rounds.id');

            $table
                ->integer('examination_id')
                ->unsigned()
                ->comment('試験区分ID 外部参照 examinations.id');

            $table
                ->timestamp('created_at')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('登録日');

            $table
                ->timestamp('updated_at')
                ->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))
                ->comment('更新日');

            /*
             * 外部参照制約 小項目
             */
            $table
                ->foreign('firstcategory_id')
                ->references('id')
                ->on('firstcategories')
                ->onDelete('RESTRICT')
                ->onUpdate('RESTRICT');

            /*
             * 外部参照制約 問題種別
             */
            $table
                ->foreign('divition_id')
                ->references('id')
                ->on('divitions')
                ->onDelete('RESTRICT')
                ->onUpdate('RESTRICT');

            /*
             * 外部参照制約 試験実施回
             */
            $table
                ->foreign('round_id')
                ->references('id')
                ->on('rounds')
                ->onDelete('RESTRICT')
                ->onUpdate('RESTRICT');

            /*
             * 外部参照制約 試験区分
             */
            $table
                ->foreign('examination_id')
                ->references('id')
                ->on('examinations')
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
        Schema::dropIfExists('questions');
    }
}
