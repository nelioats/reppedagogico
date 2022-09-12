<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursosController extends Controller
{
   
    public function index()
    {
        $cursos = Cursos::all();

        return view('cursos.index_curso',compact('cursos'));
    }

    public function store(Request $request)
    {
        $curso = new Cursos;
 
        $curso->curso = strtoupper($request->curso);
 
        $curso->save();

        return back();
    }

    public function destroy($id)
    {
        
        $deletarCursos = Cursos::find($id); 
        $deletarCursos->delete();
        return redirect()->back();
    }
}
