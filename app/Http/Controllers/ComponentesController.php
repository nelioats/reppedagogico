<?php

namespace App\Http\Controllers;

use App\Models\Componentes;
use App\Models\Cursos;
use Illuminate\Http\Request;

class ComponentesController extends Controller
{
  
    public function index()
    {
        $cursos = Cursos::all();
        $componentes = Componentes::all();
    
        return view('componente.index_componente',compact('cursos','componentes'));
    }


    public function store(Request $request)
    {

        $componente = new Componentes();
 
        $componente->curso = $request->curso;
        $componente->componente = strtoupper($request->componente);
        $componente->base = $request->base;
        $componente->serie = $request->serie;
 
        $componente->save();

        return back();

    }


    public function destroy($id)
    {
        $deletarComponente = Componentes::find($id); 
        $deletarComponente->delete();
        return redirect()->back();
    }
}
