<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirstcategoriesTable extends Migration
{
    /**
     * マイグレーション実行
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firstcategories', function (Blueprint $table) {
            $table
                ->increments('id')
                ->comment('ID');

            $table
                ->string('name')
                ->comment('小項目名');

            $table
                ->integer('secondcategory_id')
                ->unsigned()
                ->comment('中項目ID 外部参照 secondcategories.id');

            $table
                ->timestamp('created_at')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('登録日');

            $table
                ->timestamp('updated_at')
                ->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))
                ->comment('更新日');

            /*
             * 外部参照制約 中項目
             */
            $table
                ->foreign('secondcategory_id')
                ->references('id')
                ->on('secondcategories')
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
        Schema::dropIfExists('firstcategories');
    }
}
