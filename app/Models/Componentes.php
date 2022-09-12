<?php

namespace App\Models;

use App\Models\Cursos;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Componentes extends Model
{
    use HasFactory;
    protected $fillable = [
        'curso',
        'componente',
        'base',
        'serie',

    ];


    public function getNomeCurso($id){
        $nomeCurso = Cursos::where('id',$id)->first();

        return $nomeCurso->curso;
    
    }



}
