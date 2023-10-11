<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class miembro extends Model
{
    use HasFactory;

    // En el modelo Miembro (app/Models/Miembro.php)
    public function bautizos()
    {
        return $this->belongsTo(bautizo::class);
    }
}