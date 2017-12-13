<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoundsTable extends Migration
{
    /**
     * マイグレーション実行
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rounds', function (Blueprint $table) {
            $table
                ->increments('id')
                ->comment('ID');

            $table
                ->string('name')
                ->comment('試験実施回名');

            $table
                ->timestamp('created_at')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('登録日');

            $table
                ->timestamp('updated_at')
                ->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))
                ->comment('更新日');
        });
    }

    /**
     * ロールバック時に実行
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rounds');
    }
}
