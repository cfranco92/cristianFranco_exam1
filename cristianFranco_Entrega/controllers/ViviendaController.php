<?php

namespace App\Http\Controllers;

use App\Vivienda;
// use Illuminate\Http\Request;
use App\Http\Requests\ViviendaRequest;

class ViviendaController extends Controller
{
    public function index()
    {
        $viviendas = Vivienda::all();

        return view('vivienda.index', [
            'viviendas' => $viviendas
        ]);
    }

    public function show() {
        $viviendas = Vivienda::all();
        $casas = 0;
        $apartamentos = 0;

        foreach ($viviendas as $vivienda) {
            if ($vivienda->getTipo() == 'casa') {
                $casas++;
            }
            if ($vivienda->getTipo() == 'apartamento') {
                $apartamentos++;
            }
        }
        

        return view('vivienda.show', [
            'viviendas' => $viviendas,
            'casas' => $casas,
            'apartamentos' => $apartamentos
        ]);
    }

    public function create() {
        return view('vivienda.create');
    }


    public function store(ViviendaRequest $request) {
        // $request->validate([
        //     'direccion'      => ['required'],
        //     'tipo'      => ['required'],
        //     'valor_comercial'      => "required|numeric|gt:0",
        // ]);

        Vivienda::create([
            'direccion' => $request->direccion,
            'tipo' => $request->tipo,
            'valor_comercial' => $request->valor_comercial,
        ]);

        return back()->with('success','Item created successfully!');
    }

    public function destroy(Vivienda $vivienda) {
        $vivienda->delete();

        return redirect()->route('vivienda.index');
    }
}
