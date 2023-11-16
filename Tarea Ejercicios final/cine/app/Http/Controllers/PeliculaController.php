<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $peliculas = Pelicula::all();
        return view('pelicula.index', ['peliculas' => $peliculas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelicula.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $input = $request->all();
        Pelicula::create($input);
        return redirect()->route('pelicula.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelicula $pelicula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelicula $pelicula)
    {
        return view ('pelicula.edit',
        [
            'pelicula' => $pelicula,
        ]) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        $input = $request->all();
        $pelicula->update($input);
        return redirect()->route('pelicula.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelicula $pelicula)
    {
        //
    }
}
