<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class LecturaCapitulo extends Pivot
// {
//     //
// }

class LecturaCapitulo extends Model

{
    use HasFactory;
    protected $fillable = [
    	'lectura_id', 'capitulo_id'
    ];


}
