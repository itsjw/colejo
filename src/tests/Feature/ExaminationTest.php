<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExaminationTest extends TestCase
{
    /**
     * 試験区分をすべて取得
     *
     * コントローラ
     *   examination
     * メソッド
     *   getAll
     * 引数
     *   なし
     *
     * テストケース
     * 1. ステータスコード200が返ること
     * 2. 取得するJOSNを配列にすると1件以上存在すること（0件はありえない）
     *
     * @return void
     */
    public function testExaminationGetAll()
    {
        /*
         * レスポンスを取得
         */
        $response = $this->json('GET', '/api/getAllExamination');

        /*
         * テストケース
         * 1. ステータスコード200が返ること
         */
        $response->assertStatus(200);

        /*
         * テストケース
         * 2. 取得するJOSNを配列にすると1件以上存在すること（0件はありえない）
         */
        $this->assertGreaterThanOrEqual(1, count(json_decode($response->getContent())));
    }
}
