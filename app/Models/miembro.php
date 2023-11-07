<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class miembro extends Model
{
    use HasFactory;
    
    // En el modelo Miembro (app/Models/Miembro.php)
    public function bautizo()
    {
        return $this->hasMany(bautizo::class,'id');
    }
    public function celula()
    {
        return $this->belongsTo(celulas::class,'id_celu');
    }

}