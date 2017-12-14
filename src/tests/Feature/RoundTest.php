<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RoundTest extends TestCase
{
    /**
     * 試験実施回をすべて取得
     *
     * コントローラ
     *   round
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
    public function testRoundGetAll()
    {
        /*
         * レスポンスを取得
         */
        $response = $this->json('GET', '/api/getAllRound');

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
