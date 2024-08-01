<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['ciudades'] = Ciudad::paginate(5);
        return view("ciudad.index")->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->ciudad != ""){
            $ciudad = new Ciudad();
            $ciudad->nombre = $request->ciudad;
            $ciudad->save();
            $mensaje = "Se ha agregado $ciudad->nombre a la lista";
        }
        return redirect("/ciudad?m=" . $mensaje);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ciudad = Ciudad::findOrFail($id);
        date_default_timezone_set('America/Asuncion');
        $fecha = date("j - m - y,g:i a");
        $pdf = Pdf::loadView('ciudad.reportciudad', compact('ciudad', 'fecha'));
        return $pdf->stream('ciudad' . $ciudad->id . '.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ciudad = Ciudad::findOrFail($id);
        return view('ciudad.edit', compact('ciudad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Ciudad::where('id', '=', $id)->update(['nombre' =>$request->ciudad]);
        $mensaje = "Registro actualizado correctamente";
        return redirect('/ciudad?m=' . $mensaje);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ciudad = new Ciudad();
        $ciudad::destroy($id);
        $mensaje = "Se ha eliminado $ciudad->nombre de la lista";

        return redirect("/ciudad?m=" . $mensaje);
    }
}
