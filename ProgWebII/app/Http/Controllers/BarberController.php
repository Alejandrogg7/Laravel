<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importar el modelo
use App\Barber;

class BarberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd("hola desde controlador tickets");
        //$query = Ticket::all();
        //$query = Ticket::find(1);

        //dd("test prog web 2");
        //algoritmo
        //operaciones en la base de datos

        //Read/Consultar
        //consultar todos los elementos
        $barbers = Barber::all();
        // //la siguiente línea es equivalente a select * from tickets where id = '3'
        // $query2 = Ticket::find(7);
        // $query3 = Ticket::where('responsable', 'Pedro')->get();
        // $query4 = Ticket::where('created_at', '2020-06-19 01:02:45')->get();
 
        // a través de compact se envían datos a la vista
        return view('Barbers', compact('Barbers'));
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
       $barberObject = new Barber;
       $barberObject->descripcion_corte = "tarea xyz";
       $barberObject->barbero = "Alejandro G";
       $barberObject->fecha_turno = "2020/06/18";
       $barberObject->save();

       $barbers = Barber::all();
       return view('Barbers', compact('Barbers'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //update/actualizar
         $objectToUpdate = Barber::find(12);
         $objectToUpdate->descripcion_corte = "tarea 12 actualizada desde laravel";
         $objectToUpdate->save();
         dd($objectToUpdate);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete/eliminar
        //borrar por id, puedo pasar uno o varios ids
        $objectToDelete = Barber::destroy(6,7,8,9);
        $objectToDelete2 = Barber::where('created_at','<','2020-06-19 01:05:00')->delete();
        return view('/');
    }
}