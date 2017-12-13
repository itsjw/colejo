<?php

use Illuminate\Database\Seeder;

/*
 * Eloquentを利用するのでRoundモデルを使う
 */
use App\Secondcategory;

class SecondcategoriesTableSeeder extends Seeder
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
        $secondcategories[1]['thirdcategory_id']  = 1;
        $secondcategories[1]['name']              = '基礎理論';
        $secondcategories[2]['thirdcategory_id']  = 1;
        $secondcategories[2]['name']              = 'アルゴリズムとプログラミング';
        $secondcategories[3]['thirdcategory_id']  = 2;
        $secondcategories[3]['name']              = 'コンピュータ構成要素';
        $secondcategories[4]['thirdcategory_id']  = 2;
        $secondcategories[4]['name']              = 'システム構成要素';
        $secondcategories[5]['thirdcategory_id']  = 2;
        $secondcategories[5]['name']              = 'ソフトウェア';
        $secondcategories[6]['thirdcategory_id']  = 2;
        $secondcategories[6]['name']              = 'ハードウェア';
        $secondcategories[7]['thirdcategory_id']  = 3;
        $secondcategories[7]['name']              = 'ヒューマンインタフェース';
        $secondcategories[8]['thirdcategory_id']  = 3;
        $secondcategories[8]['name']              = 'マルチメディア';
        $secondcategories[9]['thirdcategory_id']  = 3;
        $secondcategories[9]['name']              = 'データベース';
        $secondcategories[10]['thirdcategory_id'] = 3;
        $secondcategories[10]['name']             = 'ネットワーク';
        $secondcategories[11]['thirdcategory_id'] = 3;
        $secondcategories[11]['name']             = 'セキュリティ';
        $secondcategories[12]['thirdcategory_id'] = 4;
        $secondcategories[12]['name']             = 'システム開発技術';
        $secondcategories[13]['thirdcategory_id'] = 4;
        $secondcategories[13]['name']             = 'ソフトウェア開発管理技術';
        $secondcategories[14]['thirdcategory_id'] = 5;
        $secondcategories[14]['name']             = 'プロジェクトマネジメント';
        $secondcategories[15]['thirdcategory_id'] = 6;
        $secondcategories[15]['name']             = 'サービスマネジメント';
        $secondcategories[16]['thirdcategory_id'] = 6;
        $secondcategories[16]['name']             = 'システム監査';
        $secondcategories[17]['thirdcategory_id'] = 7;
        $secondcategories[17]['name']             = 'システム戦略';
        $secondcategories[18]['thirdcategory_id'] = 7;
        $secondcategories[18]['name']             = 'システム企画';
        $secondcategories[19]['thirdcategory_id'] = 8;
        $secondcategories[19]['name']             = '経営戦略マネジメント';
        $secondcategories[20]['thirdcategory_id'] = 8;
        $secondcategories[20]['name']             = '技術戦略マネジメント';
        $secondcategories[21]['thirdcategory_id'] = 8;
        $secondcategories[21]['name']             = 'ビジネスインダストリ';
        $secondcategories[22]['thirdcategory_id'] = 9;
        $secondcategories[22]['name']             = '企業活動';
        $secondcategories[23]['thirdcategory_id'] = 9;
        $secondcategories[23]['name']             = '法務';

        /*
         * ループしてデータを作成
         */
        foreach($secondcategories as $secondcategory)
        {
            Secondcategory::create([
                'thirdcategory_id' => $secondcategory['thirdcategory_id'],
                'name'             => $secondcategory['name'],
            ]);
        }
    }
}
