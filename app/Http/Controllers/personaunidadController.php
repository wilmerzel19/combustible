<?php

namespace App\Http\Controllers;

use App\Models\PersonaUnidad;
use Illuminate\Http\Request;

class personaunidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // Extraer las personas dela base de datos
         $personasunidades=PersonaUnidad::all();
         //Devolver la vista y pasar las personas
         return view('personaunidad.index', compact('personasunidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonaUnidad  $personaUnidad
     * @return \Illuminate\Http\Response
     */
    public function show(PersonaUnidad $personaUnidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonaUnidad  $personaUnidad
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonaUnidad $personaUnidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonaUnidad  $personaUnidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonaUnidad $personaUnidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonaUnidad  $personaUnidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonaUnidad $personaUnidad)
    {
        //
    }
}
