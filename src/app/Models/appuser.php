<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appuser extends Model
{
    use HasFactory;

    //allergysTableのリレーション
    public function allergys()
    {
        return $this->hasMany('App\Models\allergy');
    }

    //recipesTableのリレーション
    public function recipes()
    {
        return $this->hasMany('App\Models\recipe');
    }
}
