<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Versiculo extends Model
{
    use HasFactory;
    protected $table = 'versiculos';
    protected $guarded = ['versiculo_id','capitulo_id','num_versiculo','texto'];

    // Relacion N:1
    public function capitulo(){
        return $this->belongsTo(Capitulo::class);
    }

    //Relacion de N:N
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
