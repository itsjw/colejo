<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecondcategoriesTable extends Migration
{
    /**
     * マイグレーション実行
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secondcategories', function (Blueprint $table) {
            $table
                ->increments('id')
                ->comment('ID');

            $table
                ->string('name')
                ->comment('中項目名');

            $table
                ->integer('thirdcategory_id')
                ->unsigned()
                ->comment('大項目ID 外部参照 thirdcategories.id');

            $table
                ->timestamp('created_at')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('登録日');

            $table
                ->timestamp('updated_at')
                ->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))
                ->comment('更新日');

            /*
             * 外部参照制約 大項目
             */
            $table
                ->foreign('thirdcategory_id')
                ->references('id')
                ->on('thirdcategories')
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
        Schema::dropIfExists('secondcategories');
    }
}
