<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lideres extends Model
{
    use HasFactory;
    public function encuentro()
    {
        return $this->belongsTo(encuentros::class,'id_encuentro');
    }
}
