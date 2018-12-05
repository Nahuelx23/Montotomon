@extends('Template.basic')

@section('content') 
<main class="FondoEdit">
<form action="/pokemon/{{ $poke->id }}" method="post">

    @csrf
    @method('put')
    <label for="">Nombre</label>
    <input type="text" name="name" value="{{ $poke->name }}">

    <label for="">weight</label>
    <input type="number" name="weight" value="{{ $poke->weight }}">

    <label for="">height</label>
    <input type="number" name="height" value="{{ $poke->height }}">

    <label for="">evolves</label>
    <input type="number" name="evolves" value="{{ $poke->evolves }}">

    <label for="">Tipo</label>
    <input type="number" name="type_id" value="{{ $poke->type_id }}">

    <button type="submit">Editar</button>

</form>

</main>
@endsection

