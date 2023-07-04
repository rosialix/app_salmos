<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $table = 'libros';
    protected $guarded = ['nombre','abreviacion','testamento','qnt_capitulos','qnt_versiculos'];

    // En el modelo Libros utilizaremos el método hasMany que define la relación uno a muchos.
    public function capitulos() {
        return $this->hasMany(Capitulo::class);
    }
}
