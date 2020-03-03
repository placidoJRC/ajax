<?php

namespace App\Http\Controllers;

use App\Personaje;
use Illuminate\Http\Request;

class PersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    
    public function index(Request $request)
    {
        if ($request->ajax()) {

      $personajes = Personaje::all();
          return response()->json(
              $personajes->toArray()
              );
        }
         return view('personaje.ver');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personaje.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if($request->ajax()){

            Personaje::create($request->all());

            return response()->json([

                "mensaje" => "creado"

            ]);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function show(Personaje $personaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personaje = Personaje::find($id);

        return response()->json($personaje);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $personaje = Personaje::find($id);

        $personaje->fill($request->all());

        $personaje->save();

        return response()->json(["mensaje" => "listo"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personaje = Personaje::find( $id );
        $personaje->delete();

        return response()->json(["mensaje"=>"borrado"]);
    }
}
