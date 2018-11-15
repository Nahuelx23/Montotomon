@extends("Template.basic")

@section('content')
<ul>
@foreach($Pokemons as $poke)
    <li> 
        <a href="/pokemon/{{$poke->id}}">  
            <img src="{{ asset('poke-img/images/poke-'.$poke->id.'.jpg') }}" alt="Icono de {{ $poke->name }}">
            {{$poke->name}} 
        </a>
    </li>
@endforeach
</ul>
@endsection
