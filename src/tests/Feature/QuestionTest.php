<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Round;

class QuestionTest extends TestCase
{
    /**
     * 問題一覧を取得
     *
     * コントローラ
     *   question
     * メソッド
     *   getList
     * 引数
     *   なし
     *
     * テストケース
     * 前提
     * 試験区分×試験実施回すべての組み合わせ
     *
     * 1. ステータスコード200が返ること
     * 2. 想定される問題数であること（試験区分により異なる）
     *
     * 問題数
     * ITパスポート試験（$examination->id === 1）は100
     * 基本情報技術者試験（$examination->id === 2）は80
     * 応用情報技術者試験（$examination->id === 3）は80
     * 情報セキュリティマネジメント試験（$examination->id === 4）は50
     *
     * @dataProvider additionProvider 一気にテストすると429エラーとなるためexamination_idだけを引数とする
     *
     * @return void
     */
    public function testQuestionGetList($examination_id)
    {
        /*
         * すべての試験実施回を取得
         */
        foreach (\App\Round::all() as $round)
        {
            /*
             * 問題数
             * ITパスポート試験（$examination->id === 1）は100
             * 基本情報技術者試験（$examination->id === 2）は80
             * 応用情報技術者試験（$examination->id === 3）は80
             * 情報セキュリティマネジメント試験（$examination->id === 4）は50
             */
            $max_question_number = 80;
            if ($examination_id === 1) {
                $max_question_number = 100;
            } elseif ($examination_id === 4) {
                $max_question_number = 50;
            }

            /*
             * レスポンスを取得
             */
            $response = $this->json('GET', '/api/getQuesionList/' . $examination_id . '/' . $round->id);

            /*
             * テストケース
             * 1. ステータスコード200が返ること
             */
            $response->assertStatus(200);

            /*
             * テストケース
             * 2. 取得するJOSNを配列にすると1件以上存在すること（0件はありえない）
             */
            $this->assertSame($max_question_number, count(json_decode($response->getContent())));
        }
    }
    public function additionProvider()
    {
        /*
         * ここからDBアクセスはできない？
         */
        return [
            '1'  => [1],
            '2'  => [2],
            '3'  => [3],
            '4'  => [4]
        ];
    }
}
