<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appuser extends Model
{
    use HasFactory;

    //「1対多」の「多」側→メソッド名は複数形
    public function allergys()
    {
        return $this->hasMany('App\Models\Allergy');
    }

    //「1対多」の「多」側→メソッド名は複数形
    public function recipes()
    {
        return $this->hasMany('App\Models\Recipe');
    }
}
