<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tareas;

class tareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = Tareas::all();
        return view('welcome', compact('tareas'));
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
    public function store(Request $solicitud)
    {

        if($solicitud->hasFile('imagen')){
            $archivo = $solicitud->file('imagen'); //ALMACENA EL VALOR DEL CAMPO IMAGEN
            $nombrearchivo = time().$archivo->getClientOriginalName(); //ALMACENA EL NOMBRE ORIGINAL DEL ARCHIVO FOTO SUBIDO

            $archivo->move(public_path().'/imagen/' , $nombrearchivo); //MUEVE LA RUTA DE LA IMAGEN AL ARCHIVO PUBLIC
            //return $nombrearchivo;
        }
        $tarea = new Tareas(); //CREAMOS UNA INSTANCIA DE LA CLASE EMPLEADO
        $tarea->name = $solicitud->input('nombreTarea'); //ACCEDEMOS A LOS CAMPOS DE LA TABLA Y LE ASIGNAMOS EL VALOR DEL INPUT DEL FORMULARIO
        $tarea->descripcion = $solicitud->input('descripcion');
        $tarea->imagen = $nombrearchivo; //GUARDA LA RUTA DE LA IMAGEN EN LA BD
        $tarea->dia = $solicitud->input('dia');


        $tarea->save(); //VA GUARDAR LOS DATOS
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tareas = Tareas::find($id);
        return view('show', compact('tareas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tareas = Tareas::find($id);
        return view('edit', compact('tareas'));
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
        $tareas = Tareas::find($id);
        $tareas->fill($request->except("imagen"));
        if($request->hasFile('imagen')){
            $archivo = $request->file('imagen');
            $nombrearchivo = time().$archivo->getClientOriginalName();
            $tareas->imagen= $nombrearchivo;
            $archivo->move(public_path().'/imagen/' , $nombrearchivo);
        }
        $tareas->save();
        return "actualizado";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //
    }
}
