<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class allergy extends Model
{
    use HasFactory;

    //ユーザーのアレルギーを取得
    //1対多の1側なので単数形
    public function appuser()
    {
        return $this->belongsTo('App\Models\Appuser');
    }
}
