<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Round;

class RoundController extends Controller
{
    /**
     * すべての試験実施回を取得
     *
     * @return json
     */
    public function getAll()
    {
        /*
         * オブジェクトをreturnするとLaravelがJSONにしてくれる
         */
        return Round::all();
    }
}
