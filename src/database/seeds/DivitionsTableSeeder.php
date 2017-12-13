<?php

use Illuminate\Database\Seeder;

/*
 * Eloquentを利用するのでExaminationモデルを使う
 */
use App\Divition;

class DivitionsTableSeeder extends Seeder
{
    /**
     * シーダーを実行
     *
     * @return void
     */
    public function run()
    {
        /*
         * 必要な情報を配列化
         */
        $divition_names[] = 'キーワード';
        $divition_names[] = '読解';
        $divition_names[] = '計算・図・表';

        /*
         * ループしてデータを作成
         */
        foreach($divition_names as $divition_name)
        {
            Divition::create([
                'name' => $divition_name
            ]);
        }
    }
}
