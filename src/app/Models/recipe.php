<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
    use HasFactory;

    public function ingredients()
    {
        return $this->hasOne('App\Models\ingredient');
    }
}