<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capitulo extends Model
{
    use HasFactory;
    protected $table = 'capitulos';
    protected $guarded = ['capitulo_id','libro_id','numero_capitulo','qnt_versiculos'];

    // Relacion N:1
    public function libro(){
        return $this->belongsTo(Libro::class);
    }

    // Relacion 1:N
    public function versiculos() {
        return $this->hasMany(Versiculo::class);
    }


}
