<a href="{{ route('pokemon.uno',['pokemon' => $poke->id]) }}">
  <article class="poke {{ $tipo->name }}">
  <img src="{{ asset('poke-img/images/poke-'.$poke->id.'.jpg') }}" alt="Icono de {{ $poke->name }}">
    <h3>{{ $poke->name }}</h3>
    <h4>{{ $poke->weight }}</h4>
    <h4>{{ $poke->height }}</h4>
    <h4>{{ $poke->evolves }}</h4>
  </article>
</a>

<article>  
    <h3>Tipo:</h3>
    <h4 style="color:{{ $tipo->color }}">{{ $tipo->name }}</h4>   
  </article>      
  <!-- </article>
</a> -->

<!-- Editar Poke -->
<a href="/pokemon/{{ $poke->id }}/editar">Editar</a>

<!-- Eliminar Poke -->
<form action="/pokemon/{{$poke->id}}" method="post">
  @csrf
  @method('delete')
  <button type="submit">Eliminar</button>
</form>

<a href="/pokemon/">Ir atras</a>

<a href="/">Inicio</a>