        <div class="col-6   " >
            <h2>Salmo de:</h2>
            <div id="list-example" class="list-group">
                @foreach ($lecturas as $capitulo)
                <a class="list-group-item list-group-item-action" href="#list-item-1">{{$capitulo->titulo}}</a>
                @endforeach
              </div>
        </div>

