@extends('Template.basic')

@section('content') 
<form action="" method="post">

    @csrf
    
    <label for="">Nombre</label>
    <input type="text" name="name" value="">

    <label for="">weight</label>
    <input type="number" name="weight" value="">

    <label for="">height</label>
    <input type="number" name="height" value="">
    
    <label for="">evolves</label>
    <input type="number" name="evolves" value="">
    
    <label for="">Tipo</label>
    <input type="number" name="type_id" value="">

    <button type="submit">Crear</button>

</form>

@endsection
