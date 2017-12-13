<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /*
     * belongsTo設定
     * 小項目を参照
     */
    public function firstcategory()
    {
        return $this->belongsTo('App\Firstcategory');
    }

    /*
     * belongsTo設定
     * 問題種別を参照
     */
    public function divition()
    {
        return $this->belongsTo('App\Divition');
    }

    /*
     * belongsTo設定
     * 試験実施回を参照
     */
    public function round()
    {
        return $this->belongsTo('App\Round');
    }

    /*
     * belongsTo設定
     * 試験区分を参照
     */
    public function examination()
    {
        return $this->belongsTo('App\Examination');
    }
}
