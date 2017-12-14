<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//-- 試験区分をすべて取得
Route::get('getAllExamination', 'ExaminationController@getAll');
//-- 試験実施回をすべて取得
Route::get('getAllRound', 'RoundController@getAll');
//-- 問題一覧を取得
Route::get('getQuesionList/{examination_id}/{round_id}', 'QuestionController@getList');
