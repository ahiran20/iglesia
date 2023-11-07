<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class celulas extends Model
{
    use HasFactory;
    
    public function miembros()
    {
        return $this->hasMany(miembro::class,'id');
    }
}
