<?php

use Illuminate\Database\Seeder;

/*
 * Eloquentを利用するのでRoundモデルを使う
 */
use App\Topcategory;

class TopcategoriesTableSeeder extends Seeder
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
        $topcategory_names[] = 'テクノロジ';
        $topcategory_names[] = 'マネジメント';
        $topcategory_names[] = 'ストラテジ';

        /*
         * ループしてデータを作成
         */
        foreach($topcategory_names as $topcategory_name)
        {
            Topcategory::create([
                'name' => $topcategory_name,
            ]);
        }
    }
}
