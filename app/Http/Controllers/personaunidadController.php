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
         $personaunidades=PersonaUnidad::paginate(20);
         //Devolver la vista y pasar las personas
         return view('personaunidad.index', compact('personaunidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //extraer la lista de personas
        $personas = \App\Models\Persona::query()
        ->select('id', 'nombre')
        ->get()
        ->pluck('nombre', 'id');

        $unidades= \App\Models\Unidad::query()
        ->select('id', 'placa')
        ->get()
        ->pluck('placa', 'id');
         //Mostrar el formulario para crear una nueva persona

         return view('personaunidad.create', compact('personas','unidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           //insertar una nueva persona en la base de datos
           $personaunidades= new personaunidad();
           $personaunidades->fecha= $request->fecha;
           $personaunidades->km = $request->km;
           $personaunidades->recorrido= $request->recorrido;
           $personaunidades->litros= $request->litros;
           $personaunidades->persona_id= $request->persona_id;
           $personaunidades->unidad_id= $request->unidad_id;

           $personaunidades->save();
           return redirect('/personaunidad');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonaUnidad  $personaUnidad
     * @return \Illuminate\Http\Response
     */
    public function show(PersonaUnidad $personaunidad)
    {
            //mostrar la persona en detalle
            return view('personaunidad.show', compact('personaunidad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonaUnidad  $personaUnidad
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonaUnidad $personaunidad)
    {
         //extraer la lista de personas
         $personas = \App\Models\Persona::query()
         ->select('id', 'nombre')
         ->get()
         ->pluck('nombre', 'id');

         $unidades = \App\Models\Unidad::query()
         ->select('id', 'placa')
         ->get()
         ->pluck('placa', 'id');
             //Mostrar lavista de una tarjeta
             return view('personaunidad.edit', compact('personaunidad','personas','unidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonaUnidad  $personaUnidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonaUnidad $personaunidad)
    {
             //Eliminar la persona de la base de datos
             $personaunidad->delete();
             //Redireccionar al index de personas
             return redirect()->route('personaunidad.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonaUnidad  $personaUnidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonaUnidad $personaunidad)
    {
           //Eliminar la persona de la base de datos
           $personaunidad->delete();
           //Redireccionar al index de personas
           return redirect()->route('personaunidad.index');
    }
}
