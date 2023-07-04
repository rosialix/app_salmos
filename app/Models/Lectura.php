<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lectura extends Model
{
    use HasFactory;
    protected $fillable = ['id','name'];

    // //Relacion de 1:N
    // public function capitulos() {
    //     return $this->hasMany(Capitulo::class,'lectura_capitulo','capitulo_id','lectura_id');
    // }

    //Relacion de 1:N
    public function capitulos() {
         return $this->hasManyThrough(Capitulo::class,LecturaCapitulo::class,'lectura_id','id','id','capitulo_id');
    }


}
