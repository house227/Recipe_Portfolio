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
        return $this->hasOne('App\Models\allergy');
    }

    public function recipes()
    {
        return $this->hasOne('App\Models\recipe');
    }
}
