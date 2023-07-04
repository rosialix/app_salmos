@extends('layouts.app')

@section('content')
<div class="container " >
    <div class="row justify-content-center my-0 py-0 m-3">
        <div class="col-6   " >
            <h2>Salmo de:</h2>
            <ol class="list-group list-group-numbered py-0 px-4 align-items-baseline">
                @foreach ($intenciones as $intencion)
                <a href="capitulos/{{$intencion->id}}" class="list-group-item list-group-item-action border-0 fs-5" >
                    {{ $intencion->id }}
                  </a>
                  <p>{{$intencion->id}}
                @endforeach
              </ol>
        </div>
        <div class="col-6 ms-auto" >
            <section>
                <h2 >Salmos</h2>
                <p class="fs-6">La palabra “Salmo" proviene del griego que significa “tocar un instrumento de cuerdas", y en su origen se usó para designar los cantos acompañados por ese instrumento. </p>
                <h3 data-aid="124949312" id="title2" style="--height:76.7813px;">Escritores</h3>
                <p data-aid="124949315" id="p1" style="--height:316.766px;">Estos libros fueron escritos por varios siervos de Dios, sin embargo, es a David a quien se le atribuyen 73 libros, -se debe destacar que David además de ser el Rey más importante del Antiguo Testamento, era poeta y músico-. Otro de los autores es Asaf escritor de los Salmos 50, 73 y 83, Hemán (Salmo 88), Etán, Edutún y los hijos de Coré (11 Salmos), Moisés con un salmo, pero hay 49 salmos cuya autoría se desconoce.</p>
            </section>
        </div>
    </div>
</div>
@endsection
