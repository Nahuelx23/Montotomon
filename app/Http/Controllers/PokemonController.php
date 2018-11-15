<?php

namespace App\Http\Controllers;

use App\Pokemon;
use App\Type;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function todos() //Ver la lista de Pokémon
    {
        $todosPokemons = Pokemon::all();
        return view("Pokemon.index")->with('Pokemons', $todosPokemons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nuevo()// Agregar un nuevo Pokémon
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)// Agregar un nuevo Pokémon
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function uno(Pokemon $pokemon) //Ver el detalle de un Pokémon
    {
        $tipo = Type::find($pokemon->type_id);

        // Ejemplo 1
        $data = [
            'poke'=>$pokemon,
            'tipo'=>$tipo,
        ];
        return view('Pokemon.pokecard', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function editar(Pokemon $pokemon)// Modificar un Pokémon
    {
        return view('Pokemon.editar')->with('poke', $pokemon);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, Pokemon $pokemon)// Modificar un Pokémon
    {
        $pokemon->name = $request->input('name');
        $pokemon->weight = $request->input('weight');
        $pokemon->height = $request->input('height');
        $pokemon->evolves = $request->input('evolves');
    
        $pokemon->save();
       
        return redirect('/pokemon/'.$pokemon->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function borrar(Pokemon $pokemon)//Eliminar un Pokémon
    {
        $pokemon->delete();
        return redirect('/pokemon/');
    }
}
