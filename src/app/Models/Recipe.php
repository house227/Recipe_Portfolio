<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
    use HasFactory;

    //ユーザーのレシピを取得
    //１対 多 の１側なので単数形
    public function appuser()
    {
        return $this->belongsTo('App\Models\Appuser');
    }

    //利用食材中間テーブルのリレーションの定義
    public function ingredients()
    {
        return $this->belongsToMany('App\Models\Ingredient');
    }

    //手順のリレーション
    //１対多の多を引っ張ってくる
    public function procedures()
    {
        return $this->hasMany('App\Models\Procedure')
    }
}
