<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thirdcategory extends Model
{
    /*
     * belongsTo設定
     * トップカテゴリを参照
     */
    public function topcategory()
    {
        return $this->belongsTo('App\Topcategory');
    }
}
