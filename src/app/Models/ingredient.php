<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingredient extends Model
{
    use HasFactory;

    //利用食材中間テーブルのリレーションの定義
    public function recipes()
    {
        return $this->belongsToMany('App\Models\recipe')
    }
}
