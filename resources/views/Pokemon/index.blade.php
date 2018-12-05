@extends("Template.basic")

@section('content')
<section class="ListPoke">

@foreach($Pokemons as $poke)
<article class="TarjetPoke">
    <div class="FondoImgPoke">
        <img src="{{ asset('poke-img/images/poke-'.$poke->id.'.jpg') }}" alt="Icono de {{ $poke->name }}">
    </div>

    <div class="InfoPoke">
        <!-- <p class="idP">{{$poke->id}}</p> -->
        <ul>
            <li>{{$poke->name}}</li>
        </ul>

        <a href="/pokemon/{{$poke->id}}">Info</a>
    </div>
</article>
@endforeach

</section>

<hr>
<div class=""><a href="/pokemon/nuevo">Crear Pokemon</a></div>
@endsection
