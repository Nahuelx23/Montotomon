@extends('Template.basic')

@section('content') 

<form action="/pokemon/{{ $poke->id }}" method="post">

    @csrf
    @method('put')
    <input type="text" name="name" value="{{ $poke->name }}">
    <input type="number" name="weight" value="{{ $poke->weight }}">
    <input type="number" name="height" value="{{ $poke->height }}">
    <input type="number" name="evolves" value="{{ $poke->evolves }}">
    

    <button type="submit">Editar</button>

</form>


@endsection

