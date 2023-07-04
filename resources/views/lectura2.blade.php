@extends('layouts.app')

@section('content')
<div class="container "  >
    <div class="row justify-content-center my-0 py-0 m-3 ">
        <div class="col-6  " >
            <h2>Salmos de {{$intencion}}</h2>
              <div id="list-example" class="list-group lectura-capitulo" >
                @foreach ($listas as $capitulo)
                    {{-- <a href="/lectura/{{$id}}/{{$capitulo->id}}/{{$intencion}}"  class="list-group-item list-group-item-action border-0 fs-5"  > --}}
                    <a href="#"  data-content="{{$id}}/{{$capitulo->id}}/{{$intencion}}"  class="list-group-item list-group-item-action border-0 fs-5"  >
                        <p class="fs-5 py-0 m-0">Capitulo {{$capitulo->id}} </p>
                        {{ $capitulo->titulo}}
                    </a>
                @endforeach
              </div>
        </div>
        <div class="col-6" id="versiculos">
        </div>
    </div>
</div>
@endsection


