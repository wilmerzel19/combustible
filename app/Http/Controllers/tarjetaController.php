<?php

namespace App\Http\Controllers;

use App\Models\Tarjeta;
use Illuminate\Http\Request;

class tarjetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          // Extraer las personas dela base de datos
          $tarjetas = Tarjeta::paginate(20);
          //Devolver la vista y pasar las personas
          return view('tarjetas.index', compact('tarjetas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Mostrar el formulario para crear una nueva persona

        return view('tarjetas.create');
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
           $tarjeta = new tarjeta();
           $tarjeta->codigo = $request->codigo;
           $tarjeta->tipo_combustible = $request->tipo_combustible;
           $tarjeta->save();
           return redirect('/tarjetas');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarjeta  $tarjeta
     * @return \Illuminate\Http\Response
     */
    public function show(Tarjeta $tarjeta)
    {
            //mostrar la persona en detalle
            return view('tarjetas.show', compact('tarjeta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarjeta  $tarjeta
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarjeta $tarjeta)
    {
            //Mostrar lavista de una tarjeta
            return view('tarjetas.edit', compact('tarjeta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarjeta  $tarjeta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarjeta $tarjeta)
    {
         //Guardar los cambios en la base de datos
         $tarjeta->update($request->all());
         //Redireccionar al index de personas
         return redirect()->route('tarjetas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarjeta  $tarjeta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarjeta $tarjeta)
    {
            //Eliminar la persona de la base de datos
            $tarjeta->delete();
            //Redireccionar al index de personas
            return redirect()->route('tarjetas.index');
      }
    }
