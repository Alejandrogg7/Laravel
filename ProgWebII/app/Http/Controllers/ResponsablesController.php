<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Responsable;
class ResponsablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        $responsables = Responsable::all();

        return view('responsables.index', compact('responsables'));
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
         //Create/crear
        $responObject = new Responsable;
        $responObject->descripcion = $request->description_text;
        $responObject->responsable = $request->responsable_text;
        $responObject->fecha_solicitud = $request->fecha_date;
        $responObject->save();

        $responsables = Responsable::all();
        return view('responsables.index', compact('responsables'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objectToUpdate = Responsable::find($id);
        return view('responsables.edit', compact('objectToUpdate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         //update/actualizar
         $objectToUpdate = Responsable::find($request->id_responsable_hidden);
         $objectToUpdate->descripcion = $request->description_text;
         $objectToUpdate->responsable = $request->responsable_text;
         $objectToUpdate->fecha_solicitud = $request->fecha_date;
         $objectToUpdate->save();

         $responsables = Responsable::all();
         return view('responsables.index', compact('responsables'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_responsables)
    {
        //Delete/eliminar
        //borrar por id, puedo pasar uno o varios ids
        $objectToDelete = Responsable::destroy($id_responsables);
        //$objectToDelete2 = Responsable::where('created_at','<','2020-06-19 01:05:00')->delete();
        $responsables = Responsable::all();
        
        return view('responsables.index', compact('responsables'));
    }
}


