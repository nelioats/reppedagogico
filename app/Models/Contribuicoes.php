<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribuicoes extends Model
{
    // use HasFactory;
    protected $fillable = [
        'user',
        'base',
        'disciplinaBNCC',
        'curso',
        'disciplinaBT',
        'serie',
        'autores',
        'orientadores',
        'titulo',
        'assunto',
        'path_contribuicao',
        'ip',
        
    ];

}
