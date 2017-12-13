<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secondcategory extends Model
{
    /*
     * belongsTo設定
     * 大項目を参照
     */
    public function thirdcategory()
    {
        return $this->belongsTo('App\Thirdcategory');
    }
}
