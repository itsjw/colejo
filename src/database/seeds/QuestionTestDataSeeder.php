<?php

use Illuminate\Database\Seeder;

use App\Examination;
use App\Round;
use App\Question;

class QuestionTestDataSeeder extends Seeder
{
    /**
     * シーダーを実行
     *
     * @return void
     */
    public function run()
    {
        foreach(Examination::all() AS $examination)
        {
            foreach(Round::all() AS $round)
            {
                /*
                 * ITパスポート試験（$examination->id === 1）は100
                 * 基本情報技術者試験（$examination->id === 2）は80
                 * 応用情報技術者試験（$examination->id === 3）は80
                 * 情報セキュリティマネジメント試験（$examination->id === 4）は50
                 */
                $max_question_number = 80;
                if($examination->id === 1)
                {
                    $max_question_number = 100;
                }
                elseif($examination->id === 4)
                {
                    $max_question_number = 50;
                }

                for($question_number = 1; $question_number <= $max_question_number; $question_number++)
                {
                    Question::create([
                          'number'           => $question_number
                        , 'body'             => 'テスト'
                        , 'commentary'       => 'テスト'
                        , 'firstcategory_id' => 1
                        , 'divition_id'      => 1
                        , 'round_id'         => $round->id
                        , 'examination_id'   => $examination->id
                    ]);
                }
            }
        }
    }
}
