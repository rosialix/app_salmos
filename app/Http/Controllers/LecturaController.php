<?php

namespace App\Http\Controllers;

use App\Models\Lectura;
use App\Models\Versiculo;
use App\Models\LecturaCapitulo;

class LecturaController extends Controller
{
    public function index()
    {
        $intenciones= Lectura::all();

        foreach ($intenciones as $data) {
        $lista =  LecturaCapitulo::select('capitulo_id')
        ->where('lectura_id', intval($data->id))->get()->toArray();
        $texto='';
        foreach ($lista as $valor) {
            $texto.=$valor['capitulo_id'].", ";
        }
        $capitulos[$data->id]=substr($texto, 0, -2);;
        }


        return view('intencion', compact('intenciones','capitulos'));
    }

    public function capitulo($id,$intencion)
    {
        $listas = Lectura::find($id)->capitulos;
        $versiculos=  Versiculo::where('capitulo_id', $listas[0]->id)->get();
        return view('lectura', compact('listas','versiculos','id','intencion'));
    }

    public function capVersiculo($capitulo_id)
    {
        // $versiculos=  Versiculo::where('capitulo_id', $listas[0]->id)->get();
        return Versiculo::where('capitulo_id', $capitulo_id)->get();
        // dd(Level::where('project_id', $id)->get())

    }

    public function versiculo($id,$capitulo_id,$intencion)
    {
        $listas = Lectura::find($id)->capitulos;
        $versiculos=  Versiculo::where('capitulo_id', $capitulo_id)->get();
        return view('lectura', compact('listas','versiculos','id','intencion'));
    }
}
