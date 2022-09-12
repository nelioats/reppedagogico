<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cursos;
use App\Models\Componentes;
use Illuminate\Http\Request;
use App\Models\Contribuicoes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
  


    public function store(Request $request)
    {
        // dd($request);

        $messages = [
            'name.min' => 'O campo nome aceita no mínimo 10 caracteres!',
            'password.min' => 'O campo senha aceita no minímo 5 caracteres!',
            'password.required' => 'O campo senha é obrigatório!',
            'password_conf.min' => 'O campo confirmação de senha aceita no minímo 5 caracteres!',
            'password_conf.required' => 'O campo confirmação de senha é obrigatório!',
            'password_conf.same' => 'A senha e a confirmação da senha devem corresponder!',
        ];
    
        //verificação dos inputs
        $this->validate($request,[
            'name' => 'required|min:10|max:191',
            'password' => 'required|min:5',
            'password_conf' => 'required|min:5|same:password',
        ], $messages);


        //verificando se já existe usuário=======================
        $usuario_existente = User::where('email','=',$request->email)
                                   ->orwhere('cpf', '=', $request->cpf )
                                   ->first(); 
        //se existir
        if($usuario_existente != null){
            return redirect()->route('web.inscricao')
            ->with(['cadastro_existente' => 'Usuário já cadastrado!']);
        }
                              
        // return 'criado com sucesso';

        $userCreate = User::create($request->all());


        return redirect()->route('login')
        ->with('success','Cadastro realizado com sucesso, agora faça o login e contribua com nosso Respositório Pedagógico!');
        

    }

    public function verificaLogin(Request $request){
     
        //verificando se os campos foram preenchidos
        if (($request->email == '') || ($request->password == '')) {  
           return back()->with('error', 'Ops, informe todos os dados solicitados!');
       }

         //verificando se existe usuário=======================
         $usuario_existente = User::where('email','=',$request->email)
            ->first(); 
        if($usuario_existente == null){
            return back()->with('error', 'Ops, usuário não encontrado!');
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

           //LOGADO
           return redirect()->route('user_painel');
               
        }else {
            return back()->with('error', 'Ops, usuário e senha não correspondem!');
          
       }
   }

   public function logout()
   {
       Auth::logout();
       return redirect()->route('index');
   }

   public function editar_user(){
        return view('editar_user');
   }

   public function update_user(Request $request){
        
     

        $user = User::find(Auth::user()->id);

        $messages = [
            'name.min' => 'O campo nome aceita no mínimo 10 caracteres!',
            'password.min' => 'O campo senha aceita no minímo 5 caracteres!',
            'password.required' => 'O campo senha é obrigatório!',
            'password_conf.min' => 'O campo confirmação de senha aceita no minímo 5 caracteres!',
            'password_conf.required' => 'O campo confirmação de senha é obrigatório!',
            'password_conf.same' => 'A senha e a confirmação da senha devem corresponder!',
        ];

        if($request->password != null || $request->password_conf != null){
            $this->validate($request,[
                'name' => 'required|min:10|max:191',
                'password' => 'required|min:5',
                'password_conf' => 'required|min:5|same:password',
            ], $messages);

            $user->password = $request->password;
        }
       
        $user->name = $request->name;
        $user->email = $request->email;
        $user->cpf = $request->cpf;
        $user->telefone = $request->telefone;
        $user->ip = $request->ip;


        $user->save();
      

        return redirect()->back()->with(['message' => 'Dados atualizados com sucesso!']);

      

   }



   public function user_painel(){

        
    return view('user_painel',['minhasContribuicoes' => Contribuicoes::where('user', Auth::user()->id)->get()]);
   }

   public function user_contribuicao(){
    return view('user_contribuicao');
   }

   public function deletaContribuicao($id){


        $deletarContribuicao = Contribuicoes::find($id);

      

        Storage::delete('public/'.$deletarContribuicao->path_contribuicao);
        
        $deletarContribuicao->delete();


    return redirect()->back();
   }

   public function user_painel_all(){

    $cursos = DB::table('cursos')
                        ->whereNotIn('curso',['ENSINO MÉDIO'])
                        ->orderBy('curso','asc')
                        ->get();

    $componentes = DB::table('componentes')
                            ->orderBy('base','asc')
                            ->orderBy('curso','asc')
                            ->orderBy('componente','asc')
                            ->get();

    $componentesBNCC = $componentes->where('base','BASE NACIONAL COMUM');
    $componentesBT = $componentes->where('base','BASE TÉCNICA');



    return view('user_painel_all', compact('cursos','componentesBNCC','componentesBT'));
    
   }

   public function pesquisa_contribuicoes(Request $request){
    
  
    if($request->curso == null){
        $request->curso = '$';//para excluir valor null da pesquisa
    }
    if($request->componenteBNCC == null){
        $request->componenteBNCC = '$';//para excluir valor null da pesquisa
    }
    if($request->componenteBT == null){
        $request->componenteBT = '$';//para excluir valor null da pesquisa
    }
    if($request->serie == null){
        $request->serie = '$';//para excluir valor null da pesquisa
    }
    if($request->autores == null){
        $request->autores = '$';//para excluir valor null da pesquisa
    }
    if($request->orientadores == null){
        $request->orientadores = '$';//para excluir valor null da pesquisa
    }
    if($request->titulo == null){
        $request->titulo = '$';//para excluir valor null da pesquisa
    }
    if($request->assunto == null){
        $request->assunto = '$';//para excluir valor null da pesquisa
    }

    


    $contribuicoes = Contribuicoes::where('base', '=', $request->base)
        ->orwhere('curso', '=', $request->curso)
        ->orwhere('disciplinaBNCC', '=', $request->componenteBNCC)
        ->orwhere('disciplinaBT', '=', $request->componenteBT)
        ->orwhere('serie', '=', $request->serie)
        ->orwhere('autores', 'LIKE', "%{$request->autores}%")
        ->orwhere('orientadores', 'LIKE', '%' . $request->orientadores . '%')
        ->orwhere('titulo', 'LIKE', '%' . $request->titulo . '%')
        ->orwhere('assunto', 'LIKE', '%' . $request->assunto . '%')
        ->orwhere('ip', '=', $request->ip)

    ->get();    
 

        $cursos = DB::table('cursos')
        ->whereNotIn('curso',['ENSINO MÉDIO'])
        ->orderBy('curso','asc')
        ->get();

        $componentes = DB::table('componentes')
            ->orderBy('base','asc')
            ->orderBy('curso','asc')
            ->orderBy('componente','asc')
            ->get();

        $componentesBNCC = $componentes->where('base','BASE NACIONAL COMUM');
        $componentesBT = $componentes->where('base','BASE TÉCNICA');

        session()->flashInput($request->input());

return view('user_painel_all', compact('cursos','componentesBNCC','componentesBT','contribuicoes'));



   }



   
}
