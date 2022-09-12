<?php

namespace App\Http\Livewire;

use App\Models\Cursos;
use Livewire\Component;
use App\Models\Componentes;
use App\Models\Contribuicoes;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class DadosContribuicao extends Component
{
    use WithFileUploads;

    public $selectBase = null, $selectCursos = null, $selectComponentesBT = null, $selectComponentesBNCC = null, $selectSeries = null;
    public $base = null;
    public $apresentaCurso = null, $componentesBT = null;
    public $apresentaComponentesBNCC = null, $componentesBNCC = null;
    public $series = null;
    public $apresentaInputs = null;

    public $autores = null, $orientadores = null, $titulo = null, $assunto = null, $contribuicaoFile;


    // public $bases = ['Base Nacional Comum', 'Base Técnica'];

    // public $selectBase = null;

    // public $apresesntaCursos = null; //null para nao ser apresentado
    // public $selectCursos = null;
    // public $apresentaDisciplinasBT = null; //null para nao ser apresentado
    // public $selectDisciplinasBT = null;
    // public $disciplinasBT = null;
    //
    //    $selectDisciplinasBT = null,
    //    $selectDisciplinasBNCC = null,
    //    $selectSeriesBT = null,
    //    $selectSeriesBNCC = null;

    //  public  $disciplinasBT = null,
    //        $disciplinasBNCC = null,
    //        $seriesBT = null,
    //        $seriesBNCC = null,
    //        $apresentaInputs = null;

    //===========================================================
    //submit
    //===========================================================
    // public $baseSelecionada = null,
    //        $disciplinasBNCCSelecionada = null,
    //        $serieBNCCSelecionada = null,
    //        $cursoSelecionado = null,
    //        $disciplinasBTSelecionada = null,
    //        $serieBTSelecionada = null;

    // public $autores = null, $orientadores = null, $titulo = null, $assunto = null, $contribuicaoFile;

    //TESTANDO========================================
    // public $cursos;
    //  public $cursoId = null;
    // public $componentes;

    // public function mount(){
    //     $this->cursos = DB::table('cursos')

    //     ->get();

    //     // dd($this->cursos);

    // }

    // public function updatedcursoId($id){
    //     dd($id);
    // }

    //===========================================================
    //SELECIONANDO BASE
    //===========================================================
    // public function updatedselectBase($base){
    //     if($base == 'Base Técnica'){

    //         $this->apresesntaCursos = 0; //para select de cursos ser apresentado

    //         // $CursosDB = DB::table('cursos')->get();
    //         // $this->cursos = $CursosDB;

    //         // $this->baseSelecionada = $base;
    //         // //$this->cursos = ['Administração','Eletrotécnica'];

    //         // $this->disciplinasBNCC = null;
    //         // $this->seriesBNCC = null;
    //         // $this->apresentaInputs = null;

    //     }else{

    //         // $listaComponentesBNCC = DB::table('componentes')
    //         //                         ->select('componente')
    //         //                         ->where('base', '=', 'Base Nacional Comum')
    //         //                         ->get();

    //         // $this->baseSelecionada = $base;
    //         // // $this->disciplinasBNCC = ['Geografia','História'];
    //         // $this->disciplinasBNCC = $listaComponentesBNCC;
    //         // $this->cursos = null;
    //         // $this->disciplinasBT = null;
    //         // $this->seriesBT = null;
    //     }
    // }

    //===========================================================
    //BASE TÉCNICA
    //===========================================================
    // public function updatedselectCursos($id){

    //     $listaComponentesBT = DB::table('componentes')
    //                                 ->where('curso', '=', $id)
    //                                 ->get();

    //     $this->disciplinasBT =  $listaComponentesBT;

    //     $this->apresentaDisciplinasBT = 0;

    //     // $this->seriesBT = null;
    //     // $this->apresentaInputs = null;

    //     // $this->cursoSelecionado = $curso;
    //     // if($curso == 'Administração'){
    //     //     $this->disciplinasBT = ['Empreendedorismo','Teoria da Administração'];
    //     //     $this->seriesBT = null;
    //     //     $this->apresentaInputs = null;
    //     // }else{
    //     //     $this->disciplinasBT = ['Eletricidade Básica','Eletricidade Predial'];
    //     //     $this->seriesBT = null;
    //     //     $this->apresentaInputs = null;
    //     // }
    // }
    // public function updatedselectDisciplinasBT($disciplinaBT){
    //     $this->disciplinasBTSelecionada = $disciplinaBT;
    //     if($disciplinaBT){
    //         $this->seriesBT = ['1ª','2ª', '3ª'];
    //     }
    // }
    // public function updatedselectSeriesBT($serieBT){
    //     $this->serieBTSelecionada = $serieBT;
    //     if($serieBT){
    //         $this->apresentaInputs = "ok";
    //     }
    // }

    //===========================================================
    //BASE NACIONAL COMUM
    //===========================================================

    // public function updatedselectDisciplinasBNCC($disciplinaBNCC){
    //     $this->disciplinasBNCCSelecionada = $disciplinaBNCC;
    //     if($disciplinaBNCC){
    //         $this->seriesBNCC = ['1ª','2ª', '3ª'];
    //     }
    // }
    // public function updatedselectSeriesBNCC($serieBNCC){
    //     $this->serieBNCCSelecionada = $serieBNCC;
    //     if($serieBNCC){
    //         $this->apresentaInputs = "ok";
    //     }
    // }

    // public function updatedcontribuicaoFile()
    // {
    //     $this->validate([
    //         'contribuicaoFile' => 'file|max:12288',
    //     ]);
    // }

    //===========================================================
    //SUBMIT
    //===========================================================

    // public function submit(){
    //     if($this->baseSelecionada == 'Base Nacional Comum'){
    //         Contribuicoes::create([
    //             'user' => Auth::user()->id,
    //             'base' => $this->baseSelecionada,
    //             'disciplinaBNCC' => $this->disciplinasBNCCSelecionada,
    //             'serie' => $this->serieBNCCSelecionada,
    //             'autores' =>  $this->autores,
    //             'orientadores' => $this->orientadores,
    //             'titulo' => $this->titulo,
    //             'assunto' => $this->assunto,
    //             'path_contribuicao' => 'contribuicoes/' . Auth::user()->id.'/'.$this->titulo.'.'.$this->contribuicaoFile->extension(),
    //             'ip' => Auth::user()->ip

    //         ]);
    //         $this->contribuicaoFile->storeAs('public/contribuicoes/'.Auth::user()->id, $this->titulo.'.'.$this->contribuicaoFile->extension());
    //     }
    //     if($this->baseSelecionada == 'Base Técnica'){

    //         Contribuicoes::create([
    //             'user' => Auth::user()->id,
    //             'base' => $this->baseSelecionada,
    //             'curso' => $this->cursoSelecionado,
    //             'disciplinaBT' => $this->disciplinasBTSelecionada,
    //             'serie' => $this->serieBTSelecionada,
    //             'autores' =>  $this->autores,
    //             'orientadores' => $this->orientadores,
    //             'titulo' => $this->titulo,
    //             'assunto' => $this->assunto,
    //             'path_contribuicao' => 'contribuicoes/' . Auth::user()->id.'/'.$this->titulo.'.'.$this->contribuicaoFile->extension(),
    //             'ip' => Auth::user()->ip
    //         ]);
    //         $this->contribuicaoFile->storeAs('public/contribuicoes/'.Auth::user()->id, $this->titulo.'.'.$this->contribuicaoFile->extension());

    //     }

    //     return redirect()->to('/user_painel');

    // }

    public function render()
    {
        // return view('livewire.dados-contribuicao',
        // ['bases' => ['Base Nacional Comun', 'Base Técnica']]
        // );

        $cursos = Cursos::all();

        //   $CursosDB = DB::table('cursos')->get();

        return view('livewire.dados-contribuicao',
            ['cursos' => Cursos::select("*")->whereNotIn('curso',['ENSINO MÉDIO'])->get()
        
            ],
            ['bases' => ['BASE NACIONAL COMUM', 'BASE TÉCNICA']]
        );
    }

    public function updatedselectBase($base_selecionada)
    {
            $this->base = $base_selecionada;

        if ($base_selecionada == "BASE TÉCNICA") {
            $this->apresentaCurso = 1;
           
            
            $this->apresentaComponentesBNCC = null;
            $this->series = null;
            $this->apresentaInputs = null;

            $this->selectComponentesBNCC = null;
            $this->selectSeries = null;

        } else {
            $this->apresentaComponentesBNCC = 1;
            $this->componentesBNCC = Componentes::where('base', $base_selecionada)->get();

            $this->apresentaCurso = null;
            $this->componentesBT = null;
            $this->series = null;
            $this->apresentaInputs = null;

            $this->selectCursos = null;
            $this->selectComponentesBT = null;
            $this->selectSeries = null;

      
        }

    }

    public function updatedselectCursos($curso_nome)
    {
       
        $curso_id = Cursos::where('curso', $curso_nome)->first();
        $this->componentesBT = Componentes::where('curso', $curso_id->id)->get();
    }

    public function updatedselectComponentesBT()
    {
        $this->series = ['1ª', '2ª', '3ª'];
    }

    public function updatedselectComponentesBNCC()
    {
        $this->series = ['1ª', '2ª', '3ª'];

    }

    public function updatedselectSeries()
    {
        $this->apresentaInputs = 1; //apresentar campos sobre o trabalho
    }



    //===========================================================
    //SUBMIT
    //===========================================================

    public function submit(){

        $this->validate([
            'contribuicaoFile' => 'file|max:5024|mimes:pdf', // 5MB Max            
        ]);

        // session()->flash('message', 'Post successfully updated.');

        $path_doc = 'contribuicoes/' . Auth::user()->id.'/'.$this->titulo.'.'.$this->contribuicaoFile->getClientOriginalExtension();
      
        if($this->base == 'BASE NACIONAL COMUM'){
            Contribuicoes::create([
                'user' => Auth::user()->id,
                'base' => $this->base,
                'disciplinaBNCC' => $this->selectComponentesBNCC,
                'serie' => $this->selectSeries,
                'autores' =>  $this->autores,
                'orientadores' => $this->orientadores,
                'titulo' => $this->titulo,
                'assunto' => $this->assunto,
                'path_contribuicao' => $path_doc,
                'ip' => Auth::user()->ip
            ]);
            $this->contribuicaoFile->storeAs('public/contribuicoes/'.Auth::user()->id, $this->titulo.'.'.$this->contribuicaoFile->extension());
        }
        else{

            Contribuicoes::create([
                'user' => Auth::user()->id,
                'base' => $this->base,
                'curso' => $this->selectCursos,
                'disciplinaBT' => $this->selectComponentesBT,
                'serie' => $this->selectSeries,
                'autores' =>  $this->autores,
                'orientadores' => $this->orientadores,
                'titulo' => $this->titulo,
                'assunto' => $this->assunto,
                'path_contribuicao' => $path_doc,
                'ip' => Auth::user()->ip
            ]);
            $this->contribuicaoFile->storeAs('public/contribuicoes/'.Auth::user()->id, $this->titulo.'.'.$this->contribuicaoFile->extension());

        }

        return redirect()->to('/user_painel');

    }




}
