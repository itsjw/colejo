<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Examination;

class ExaminationController extends Controller
{
    /**
     * すべての試験区分を取得
     *
     *
     * @return json
     */
    public function getAll()
    {
        /*
         * オブジェクトをreturnするとLaravelがJSONにしてくれる
         */
        return Examination::all();
    }
}
