<?php

use Illuminate\Database\Seeder;

/*
 * Eloquentを利用するのでRoundモデルを使う
 */
use App\Round;

class RoundsTableSeeder extends Seeder
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
        $round_names[] = '平成21年度春';
        $round_names[] = '平成21年度秋';
        $round_names[] = '平成22年度春';
        $round_names[] = '平成22年度秋';
        $round_names[] = '平成23年度特別';
        $round_names[] = '平成23年度秋';
        $round_names[] = '平成24年度春';
        $round_names[] = '平成24年度秋';
        $round_names[] = '平成25年度春';
        $round_names[] = '平成25年度秋';
        $round_names[] = '平成26年度春';
        $round_names[] = '平成26年度秋';
        $round_names[] = '平成27年度春';
        $round_names[] = '平成27年度秋';
        $round_names[] = '平成28年度春';
        $round_names[] = '平成28年度秋';
        $round_names[] = '平成29年度春';
        $round_names[] = '平成29年度秋';

        /*
         * ループしてデータを作成
         */
        foreach($round_names as $round_name)
        {
            Round::create([
                'name' => $round_name,
            ]);
        }
    }
}
