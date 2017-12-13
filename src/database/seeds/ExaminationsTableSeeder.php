<?php

use Illuminate\Database\Seeder;

/*
 * Eloquentを利用するのでExaminationモデルを使う
 */
use App\Examination;

class ExaminationsTableSeeder extends Seeder
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
        $examination_names[] = 'ITパスポート試験';
        $examination_names[] = '基本情報技術者試験';
        $examination_names[] = '応用情報技術者試験';
        $examination_names[] = '情報セキュリティマネジメント試験';

        /*
         * ループしてデータを作成
         */
        foreach($examination_names as $examination_name)
        {
            Examination::create([
                'name' => $examination_name
            ]);
        }
    }
}
