@extends('layouts.app')

@section('content')
<div class="container "  >
    <div class="row justify-content-center my-0 py-0 m-3 ">
        <div class="col-6 " >
            <h2>Salmos de {{$intencion}}</h2>
              <div id="list-example" class="list-group lectura-capitulo" >
           <ol class="list-group" id="selec_cap">
                @foreach ($listas as $capitulo)
                <li id="{{$capitulo->id}}" class="list-group-item d-flex justify-content-between align-items-start" >
                  <div class="ms-2 me-auto">
                    <div class="fw-bold" >Capitulo {{$capitulo->id}}</div>
                    {{ $capitulo->titulo}}
                  </div>
                </li>
                @endforeach
              </ol>


              </div>
        </div>
        <div class="col-6  pt-2"  >
            @if(!empty($versiculos))
                <h4 id="list-item-1">Capitulo {{$versiculos[0]->capitulo_id}}</h4>
                <div class="scroll-versiculos" id="lectura-versiculo" >
                @foreach ($versiculos as $versiculo)
                    <div class="ms-2 me-auto">
                        <span class="fs-5">{{$versiculo->num_versiculo}}</span>{{$versiculo->texto}}
                    </div>
                @endforeach
                </div>
            @endif

        </div>
    </div>
</div>
@endsection




