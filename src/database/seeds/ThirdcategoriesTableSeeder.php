<?php

use Illuminate\Database\Seeder;

/*
 * Eloquentを利用するのでRoundモデルを使う
 */
use App\Thirdcategory;

class ThirdcategoriesTableSeeder extends Seeder
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
        $thirdcategories[1]['topcategory_id'] = 1;
        $thirdcategories[1]['name']           = '基礎理論';
        $thirdcategories[2]['topcategory_id'] = 1;
        $thirdcategories[2]['name']           = 'コンピュータシステム';
        $thirdcategories[3]['topcategory_id'] = 1;
        $thirdcategories[3]['name']           = '技術要素';
        $thirdcategories[4]['topcategory_id'] = 1;
        $thirdcategories[4]['name']           = '開発技術';
        $thirdcategories[5]['topcategory_id'] = 2;
        $thirdcategories[5]['name']           = 'プロジェクトマネジメント';
        $thirdcategories[6]['topcategory_id'] = 2;
        $thirdcategories[6]['name']           = 'サービスマネジメント';
        $thirdcategories[7]['topcategory_id'] = 3;
        $thirdcategories[7]['name']           = 'システム戦略';
        $thirdcategories[8]['topcategory_id'] = 3;
        $thirdcategories[8]['name']           = '経営戦略';
        $thirdcategories[9]['topcategory_id'] = 3;
        $thirdcategories[9]['name']           = '企業と法務';

        /*
         * ループしてデータを作成
         */
        foreach($thirdcategories as $thirdcategory)
        {
            Thirdcategory::create([
                'topcategory_id' => $thirdcategory['topcategory_id'],
                'name'           => $thirdcategory['name'],
            ]);
        }
    }
}
