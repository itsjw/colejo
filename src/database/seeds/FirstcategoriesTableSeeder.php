<?php

use Illuminate\Database\Seeder;

/*
 * Eloquentを利用するのでRoundモデルを使う
 */
use App\Firstcategory;

class FirstcategoriesTableSeeder extends Seeder
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
        $firstcategories[1]['secondcategory_id']  = 1;
        $firstcategories[1]['name']               = '離散数学';

        $firstcategories[2]['secondcategory_id'] = 1;$firstcategories[2]['name'] = '応用数学';
        $firstcategories[3]['secondcategory_id'] = 1;$firstcategories[3]['name'] = '情報に関する理論';
        $firstcategories[4]['secondcategory_id'] = 1;$firstcategories[4]['name'] = '通信に関する理論';
        $firstcategories[5]['secondcategory_id'] = 1;$firstcategories[5]['name'] = '計測・制御に関する理論';
        $firstcategories[6]['secondcategory_id'] = 2;$firstcategories[6]['name'] = 'データ構造';
        $firstcategories[7]['secondcategory_id'] = 2;$firstcategories[7]['name'] = 'アルゴリズム';
        $firstcategories[8]['secondcategory_id'] = 2;$firstcategories[8]['name'] = 'プログラミング';
        $firstcategories[9]['secondcategory_id'] = 2;$firstcategories[9]['name'] = 'プログラム言語';
        $firstcategories[10]['secondcategory_id'] = 2;$firstcategories[10]['name'] = 'その他の言語';
        $firstcategories[11]['secondcategory_id'] = 3;$firstcategories[11]['name'] = 'プロセッサ';
        $firstcategories[12]['secondcategory_id'] = 3;$firstcategories[12]['name'] = 'メモリ';
        $firstcategories[13]['secondcategory_id'] = 3;$firstcategories[13]['name'] = 'バス';
        $firstcategories[14]['secondcategory_id'] = 3;$firstcategories[14]['name'] = '入出力デバイス';
        $firstcategories[15]['secondcategory_id'] = 3;$firstcategories[15]['name'] = '入出力装置';
        $firstcategories[16]['secondcategory_id'] = 4;$firstcategories[16]['name'] = 'システムの構成';
        $firstcategories[17]['secondcategory_id'] = 4;$firstcategories[17]['name'] = 'システムの評価指標';
        $firstcategories[18]['secondcategory_id'] = 5;$firstcategories[18]['name'] = 'オペレーティングシステム';
        $firstcategories[19]['secondcategory_id'] = 5;$firstcategories[19]['name'] = 'ミドルウェア';
        $firstcategories[20]['secondcategory_id'] = 5;$firstcategories[20]['name'] = 'ファイルシステム';
        $firstcategories[21]['secondcategory_id'] = 5;$firstcategories[21]['name'] = '開発ツール';
        $firstcategories[22]['secondcategory_id'] = 5;$firstcategories[22]['name'] = 'オープンソースソフトウェア';
        $firstcategories[23]['secondcategory_id'] = 6;$firstcategories[23]['name'] = 'ハードウェア';
        $firstcategories[24]['secondcategory_id'] = 7;$firstcategories[24]['name'] = 'ヒューマンインタフェース技術';
        $firstcategories[25]['secondcategory_id'] = 7;$firstcategories[25]['name'] = 'インタフェース設計';
        $firstcategories[26]['secondcategory_id'] = 8;$firstcategories[26]['name'] = 'マルチメディア技術';
        $firstcategories[27]['secondcategory_id'] = 8;$firstcategories[27]['name'] = 'マルチメディア応用';
        $firstcategories[28]['secondcategory_id'] = 9;$firstcategories[28]['name'] = 'データベース方式';
        $firstcategories[29]['secondcategory_id'] = 9;$firstcategories[29]['name'] = 'データベース設計';
        $firstcategories[30]['secondcategory_id'] = 9;$firstcategories[30]['name'] = 'データ操作';
        $firstcategories[31]['secondcategory_id'] = 9;$firstcategories[31]['name'] = 'トランザクション処理';
        $firstcategories[32]['secondcategory_id'] = 9;$firstcategories[32]['name'] = 'データベース応用';
        $firstcategories[33]['secondcategory_id'] = 10;$firstcategories[33]['name'] = 'ネットワーク方式';
        $firstcategories[34]['secondcategory_id'] = 10;$firstcategories[34]['name'] = 'データ通信と制御';
        $firstcategories[35]['secondcategory_id'] = 10;$firstcategories[35]['name'] = '通信プロトコル';
        $firstcategories[36]['secondcategory_id'] = 10;$firstcategories[36]['name'] = 'ネットワーク管理';
        $firstcategories[37]['secondcategory_id'] = 10;$firstcategories[37]['name'] = 'ネットワーク応用';
        $firstcategories[38]['secondcategory_id'] = 11;$firstcategories[38]['name'] = '情報セキュリティ';
        $firstcategories[39]['secondcategory_id'] = 11;$firstcategories[39]['name'] = '情報セキュリティ管理';
        $firstcategories[40]['secondcategory_id'] = 11;$firstcategories[40]['name'] = 'セキュリティ技術評価';
        $firstcategories[41]['secondcategory_id'] = 11;$firstcategories[41]['name'] = '情報セキュリティ対策';
        $firstcategories[42]['secondcategory_id'] = 11;$firstcategories[42]['name'] = 'セキュリティ実装技術';
        $firstcategories[43]['secondcategory_id'] = 12;$firstcategories[43]['name'] = 'システム要件定義';
        $firstcategories[44]['secondcategory_id'] = 12;$firstcategories[44]['name'] = 'システム方式設計';
        $firstcategories[45]['secondcategory_id'] = 12;$firstcategories[45]['name'] = 'ソフトウェア要件定義';
        $firstcategories[46]['secondcategory_id'] = 12;$firstcategories[46]['name'] = 'ソフトウェア方式設計・ソフトウェア詳細設計';
        $firstcategories[47]['secondcategory_id'] = 12;$firstcategories[47]['name'] = 'ソフトウェア構築';
        $firstcategories[48]['secondcategory_id'] = 12;$firstcategories[48]['name'] = 'ソフトウェア結合・ソフトウェア適格性確認テスト';
        $firstcategories[49]['secondcategory_id'] = 12;$firstcategories[49]['name'] = 'システム結合・システム適格性確認テスト';
        $firstcategories[50]['secondcategory_id'] = 12;$firstcategories[50]['name'] = '導入';
        $firstcategories[51]['secondcategory_id'] = 12;$firstcategories[51]['name'] = '受入れ支援';
        $firstcategories[52]['secondcategory_id'] = 12;$firstcategories[52]['name'] = '保守・廃棄';
        $firstcategories[53]['secondcategory_id'] = 13;$firstcategories[53]['name'] = '開発プロセス・手法';
        $firstcategories[54]['secondcategory_id'] = 13;$firstcategories[54]['name'] = '知的財産適用管理';
        $firstcategories[55]['secondcategory_id'] = 13;$firstcategories[55]['name'] = '開発環境管理';
        $firstcategories[56]['secondcategory_id'] = 13;$firstcategories[56]['name'] = '構成管理・変更管理';
        $firstcategories[57]['secondcategory_id'] = 14;$firstcategories[57]['name'] = 'プロジェクトマネジメント';
        $firstcategories[58]['secondcategory_id'] = 14;$firstcategories[58]['name'] = 'プロジェクト統合マネジメント';
        $firstcategories[59]['secondcategory_id'] = 14;$firstcategories[59]['name'] = 'プロジェクトステークホルダマネジメント';
        $firstcategories[60]['secondcategory_id'] = 14;$firstcategories[60]['name'] = 'プロジェクトスコープマネジメント';
        $firstcategories[61]['secondcategory_id'] = 14;$firstcategories[61]['name'] = 'プロジェクト資源マネジメント';
        $firstcategories[62]['secondcategory_id'] = 14;$firstcategories[62]['name'] = 'プロジェクトタイムマネジメント';
        $firstcategories[63]['secondcategory_id'] = 14;$firstcategories[63]['name'] = 'プロジェクトコストマネジメント';
        $firstcategories[64]['secondcategory_id'] = 14;$firstcategories[64]['name'] = 'プロジェクトリスクマネジメント';
        $firstcategories[65]['secondcategory_id'] = 14;$firstcategories[65]['name'] = 'プロジェクト品質マネジメント';
        $firstcategories[66]['secondcategory_id'] = 14;$firstcategories[66]['name'] = 'プロジェクト調達マネジメント';
        $firstcategories[67]['secondcategory_id'] = 14;$firstcategories[67]['name'] = 'プロジェクトコミュニケーションマネジメント';
        $firstcategories[68]['secondcategory_id'] = 15;$firstcategories[68]['name'] = 'サービスマネジメント';
        $firstcategories[69]['secondcategory_id'] = 15;$firstcategories[69]['name'] = 'サービスの設計・移行';
        $firstcategories[70]['secondcategory_id'] = 15;$firstcategories[70]['name'] = 'サービスマネジメントプロセス';
        $firstcategories[71]['secondcategory_id'] = 15;$firstcategories[71]['name'] = 'サービスの運用';
        $firstcategories[72]['secondcategory_id'] = 15;$firstcategories[72]['name'] = 'ファシリティマネジメント';
        $firstcategories[73]['secondcategory_id'] = 16;$firstcategories[73]['name'] = 'システム監査';
        $firstcategories[74]['secondcategory_id'] = 16;$firstcategories[74]['name'] = '内部統制';
        $firstcategories[75]['secondcategory_id'] = 17;$firstcategories[75]['name'] = '情報システム戦略';
        $firstcategories[76]['secondcategory_id'] = 17;$firstcategories[76]['name'] = '業務プロセス';
        $firstcategories[77]['secondcategory_id'] = 17;$firstcategories[77]['name'] = 'ソリューションビジネス';
        $firstcategories[78]['secondcategory_id'] = 17;$firstcategories[78]['name'] = 'システム活用促進・評価';
        $firstcategories[79]['secondcategory_id'] = 18;$firstcategories[79]['name'] = 'システム化計画';
        $firstcategories[80]['secondcategory_id'] = 18;$firstcategories[80]['name'] = '要件定義';
        $firstcategories[81]['secondcategory_id'] = 18;$firstcategories[81]['name'] = '調達計画・実施';
        $firstcategories[82]['secondcategory_id'] = 19;$firstcategories[82]['name'] = '経営戦略手法';
        $firstcategories[83]['secondcategory_id'] = 19;$firstcategories[83]['name'] = 'マーケティング';
        $firstcategories[84]['secondcategory_id'] = 19;$firstcategories[84]['name'] = 'ビジネス戦略と目標・評価';
        $firstcategories[85]['secondcategory_id'] = 19;$firstcategories[85]['name'] = '経営管理システム';
        $firstcategories[86]['secondcategory_id'] = 20;$firstcategories[86]['name'] = '技術開発戦略の立案';
        $firstcategories[87]['secondcategory_id'] = 20;$firstcategories[87]['name'] = '技術開発計画';
        $firstcategories[88]['secondcategory_id'] = 21;$firstcategories[88]['name'] = 'ビジネスシステム';
        $firstcategories[89]['secondcategory_id'] = 21;$firstcategories[89]['name'] = 'エンジニアリングシステム';
        $firstcategories[90]['secondcategory_id'] = 21;$firstcategories[90]['name'] = 'e-ビジネス';
        $firstcategories[91]['secondcategory_id'] = 21;$firstcategories[91]['name'] = '民生機器';
        $firstcategories[92]['secondcategory_id'] = 21;$firstcategories[92]['name'] = '産業機器';
        $firstcategories[93]['secondcategory_id'] = 22;$firstcategories[93]['name'] = '経営・組織論';
        $firstcategories[94]['secondcategory_id'] = 22;$firstcategories[94]['name'] = 'OR・IE';
        $firstcategories[95]['secondcategory_id'] = 22;$firstcategories[95]['name'] = '会計・財務';
        $firstcategories[96]['secondcategory_id'] = 23;$firstcategories[96]['name'] = '知的財産権';
        $firstcategories[97]['secondcategory_id'] = 23;$firstcategories[97]['name'] = 'セキュリティ関連法規';
        $firstcategories[98]['secondcategory_id'] = 23;$firstcategories[98]['name'] = '労働関連・取引関連法規';
        $firstcategories[99]['secondcategory_id'] = 23;$firstcategories[99]['name'] = 'その他の法律・ガイドライン・技術者倫理';
        $firstcategories[100]['secondcategory_id'] = 23;$firstcategories[100]['name'] = '標準化関連';

        /*
         * ループしてデータを作成
         */
        foreach($firstcategories as $firstcategory)
        {
            Firstcategory::create([
                'secondcategory_id' => $firstcategory['secondcategory_id'],
                'name'              => $firstcategory['name'],
            ]);
        }
    }
}
