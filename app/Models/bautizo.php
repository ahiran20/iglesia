<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bautizo extends Model
{
    use HasFactory;
    //aqui seria categoria segun el video
    public function miembros(){
        return $this->hasMany(miembro::class);
    }
}
