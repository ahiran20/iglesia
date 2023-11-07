<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class encuentros extends Model
{
    use HasFactory;
    public function lideres()
    {
        return $this->hasMany(lideres::class,'id');
    }

}
