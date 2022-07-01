<?php

namespace App\Http\Controllers;

use App\Models\Unidad;
use Illuminate\Http\Request;

class unidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

          // Extraer las personas dela base de datos
          $unidade= Unidad::paginate(20);
          //Devolver la vista y pasar las personas
          return view('unidades.index', compact('unidade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          //Mostrar el formulario para crear una nueva persona

          return view('unidades.create');
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
         $unidades= new unidad();
         $unidades->placa= $request->placa;
         $unidades->tipo_vehiculo = $request->tipo_vehiculo;
         $unidades->tarjeta_id = $request->tarjeta_id;
         $unidades->save();
         return redirect('/unidades');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function show(Unidad $unidade)
    {

            //mostrar la persona en detalle
            return view('unidades.show', compact('unidade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Unidad $unidade)
    {

            //Mostrar lavista de una tarjeta
            return view('unidades.edit', compact('unidade'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unidad $unidade)
    {
        //Guardar los cambios en la base de datos
        $unidade->update($request->all());
        //Redireccionar al index de personas
        return redirect()->route('unidades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unidad $unidade)
    {
        //Eliminar la persona de la base de datos
        $unidade->delete();
        //Redireccionar al index de personas
        return redirect()->route('unidades.index');
  }
    }
