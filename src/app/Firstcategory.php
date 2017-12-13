<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Firstcategory extends Model
{
    /*
     * belongsTo設定
     * 中項目を参照
     */
    public function secondcategory()
    {
        return $this->belongsTo('App\Secondcategory');
    }
}
