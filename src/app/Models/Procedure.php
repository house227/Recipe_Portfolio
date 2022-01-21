<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class procedure extends Model
{
    use HasFactory;

    //1つのレシピとのリレーション
    public function recipe()
    {
        return $this->belongsTo('App\Models\Recipe');
    }
}
