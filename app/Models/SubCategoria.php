<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    use HasFactory;

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function publicacion(){
        return $this->hasMany(Publicacion::class);
    }

    public function reciente_publicacion(){
        return $this->hasOne(Publicacion::class)->latestOfMany();
    }
}
