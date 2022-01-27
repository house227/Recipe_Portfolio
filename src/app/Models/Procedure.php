<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class procedure extends Model
{
    use HasFactory;
    //ホワイトリスト方式：保存したいカラム名を設定
    protected $fillable = ['procedure'];

    //1つのレシピとのリレーション
    public function recipe()
    {
        return $this->belongsTo('App\Models\Recipe');
    }
}
