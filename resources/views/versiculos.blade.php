{{-- {{$versiculos}} --}}

<div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
    @foreach ($versiculos as $versiculo)
        {{$versiculo->num_versiculo}}
          <div class="ms-2 me-auto">
             {{$versiculo->texto}}
          </div>
        {{-- <span class="badge bg-primary rounded-pill">14</span> --}}
    @endforeach
  </div>
