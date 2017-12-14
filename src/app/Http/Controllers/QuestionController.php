<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;
use App\Examination;
use App\Round;

class QuestionController extends Controller
{
    /**
     * すべての問題一覧を取得
     *
     * @return json
     */
    public function getList($examination_id, $round_id)
    {
        /*
         * オブジェクトをreturnするとLaravelがJSONにしてくれる
         */
        return
           Question
                ::where('examination_id', $examination_id)
                ->where('round_id'      , $round_id)
                ->get();
    }
}
