<div>


 <form wire:submit.prevent="submit" method="POST" class="php-email-form">
    @csrf 

{{-- BASE --}}
    <div class="form-group mt-2 mb-3 info-item">
        <label for=""><h4>Selecione a base:</h4></label>
            <select class="form-control" wire:model="selectBase" style="border-radius:0px;">
                <option>== Base ==</option>
                @foreach ($bases as $base)
                    <option value="{{$base}}">{{$base}}</option>
                @endforeach
            </select>
    </div>

{{-- BASE TECNICA --}}
    @if (!is_null($apresentaCurso))
    <div class="form-group mt-2 mb-3 info-item">
        <label for=""><h4>Selecione o curso técnico:</h4></label>
            <select class="form-control" wire:model="selectCursos" style="border-radius:0px;">
                <option value="">== Curso ==</option>
                @foreach ($cursos as $curso)
                    <option  value="{{$curso->curso}}">{{ $curso->curso }}</option>   
                @endforeach
            </select>
     </div>
     @endif 

  @if (!is_null($componentesBT))
     <div class="form-group mt-2 mb-3 info-item">
        <label for=""><h4>Selecione o componente:</h4></label>
            <select class="form-control" wire:model="selectComponentesBT" style="border-radius:0px;">
                <option value="">== Componente ==</option>
                @foreach ($componentesBT as $componente)
                    <option  value="{{$componente->componente}}">{{ $componente->componente }}</option>   
                @endforeach
            </select> 
     </div>
  @endif 

{{-- BASE NACAIONAL COMUM --}}
    @if (!is_null($apresentaComponentesBNCC))
    <div class="form-group mt-2 mb-3 info-item">
    <label for=""><h4>Selecione o componente:</h4></label>
        <select class="form-control" wire:model="selectComponentesBNCC" style="border-radius:0px;">
            <option value="">== Componente ==</option>
            @foreach ($componentesBNCC as $componente)
                <option  value="{{$componente->componente}}">{{ $componente->componente }}</option>   
            @endforeach
        </select> 
    </div>
    @endif 

{{-- SERIE --}}
    @if (!is_null($series))
    <div class="form-group mt-2 mb-3 info-item">
    <label for=""><h4>Selecione a serie:</h4></label>
        <select class="form-control" wire:model="selectSeries" style="border-radius:0px;">
            <option value="">== Série ==</option>
            @foreach ($series as $serie)
                <option  value="{{$serie}}">{{ $serie }}</option>   
            @endforeach
        </select> 
    </div>
    @endif 

{{-- SOBRE SUA CONTRIBUICAO --}}
     @if(!is_null($apresentaInputs))
        <div class="info-label mt-4">
            <h4 class="text-center bg-secondary text-white pt-2 pb-2">Sobre sua contribuição:</h4>
         

             <div class="row">
                <div class="form-group">
                  <p class="mb-1">Autor:</p>
                  <input wire:model="autores" type="text" name="autores" class="form-control" placeholder="Digite o(a) autor(a)" required>
                </div>
                <div class="form-group mt-3 mt-md-1">
                   <p class="mb-1">Orientador:</p>
                  <input wire:model="orientadores" type="text" name="orientadores" class="form-control" placeholder="Digite o(a) orientador(a)" required>
                </div>
                <div class="form-group mt-3 mt-md-1">
                   <p class="mb-1">Titulo:</p>
                  <input wire:model="titulo" type="text" name="titulo" class="form-control"  placeholder="Digite o título" required>
                </div>
                <div class="form-group mt-3 mb-1 mt-md-1">
                   <p class="mb-1">Assunto:</p>
                  <input wire:model="assunto" type="text" name="assunto" class="form-control"  placeholder="Digite o assunto" required>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Carrege seu trabalho <small class="font-italic text-info">máximo de 5mb - somente .pdf</small></label>
                    <input wire:model="contribuicaoFile" class="form-control" type="file" required>
                    @error('contribuicaoFile') <small class="error font-italic text-danger">Tamanho/tipo de arquivo de arquivo não permitido</small> @enderror
                </div>
               
            </div> 

            <div class="text-center mt-1 mb-3"><button type="submit">Salvar</button></div>
        </div>
    @endif  
 

</form>


  
{{-- 
 <form wire:submit.prevent="submit" method="POST" class="php-email-form">
    @csrf 

     <div class="form-group mt-2 mb-3 info-item">
            <label for=""><h4>Selecione a base:</h4></label>
                <select class="form-control" wire:model="selectBase" style="border-radius:0px;">
                    <option>== Base ==</option>
                    @foreach ($bases as $base)
                        <option value="{{$base}}">{{$base}}</option>
                    @endforeach
                </select>
    </div>  --}}
{{-- BASE TECNICA --}}
    {{-- @if(!is_null($apresesntaCursos))
        <div class="form-group mt-2 mb-3 info-item">
            <label for=""><h4>Selecione o curso técnico:</h4></label>
                <select class="form-control" wire:model="selectCursos" style="border-radius:0px;">
                    <option value="">== Curso ==</option>
                    @foreach ($cursosDB as $curso)
                        <option  value="{{$curso->id}}">{{ $curso->curso }}</option>   
                    @endforeach
                </select>
                
         </div>
     @endif

   @if(!is_null($apresentaDisciplinasBT))

    <div class="form-group mt-2 mb-3 info-item">
        <label for=""><h4>Selecione a disciplina:</h4></label>
            <select class="form-control" wire:model="selectDisciplinasBT" style="border-radius:0px;">
                <option>== Disciplina ==</option>
                @foreach ($disciplinasBT as $disciplinaBT)
  
                        <option value="{{$disciplinaBT->id}}">{{$disciplinaBT->componente}}</option>
           

                   
                @endforeach
            </select>
    </div>
    @endif --}}



    {{-- @if(!is_null($seriesBT))
    <div class="form-group mt-2 mb-2 info-item">
        <label for=""><h4>Selecione a Série:</h4></label>
            <select class="form-control" wire:model="selectSeriesBT" style="border-radius:0px;">
                <option>== Série ==</option>
                @foreach ($seriesBT as $serieBT)
                    <option value="{{$serieBT}}">{{$serieBT}}</option>
                @endforeach
            </select>
    </div>
    @endif --}}

    {{-- BASE NAIONAL COMUM --}}
    {{-- @if(!is_null($disciplinasBNCC))
    <div class="form-group mt-2 mb-3 info-item">
        <label for=""><h4>Selecione a disciplina BNCC:</h4></label>
            <select class="form-control" wire:model="selectDisciplinasBNCC" style="border-radius:0px;">
                <option>== Disciplina ==</option>
                @foreach ($disciplinasBNCC as $disciplinaBNCC)
                    <option value="{{$disciplinaBNCC->componente}}">{{$disciplinaBNCC->componente}}</option>
                @endforeach
            </select>
    </div>
    @endif

    @if(!is_null($seriesBNCC))
    <div class="form-group mt-2 mb-2 info-item">
        <label for=""><h4>Selecione a Série:</h4></label>
            <select class="form-control" wire:model="selectSeriesBNCC" style="border-radius:0px;">
                <option>== Série ==</option>
                @foreach ($seriesBNCC as $serieBNCC)
                    <option value="{{$serieBNCC}}">{{$serieBNCC}}</option>
                @endforeach
            </select>
    </div>
    @endif --}}

    {{-- SOBRE SUA CONTRIBUICAO --}}
    {{-- @if(!is_null($apresentaInputs))
        <div class="info-label mt-4">
            <h4 class="text-center bg-secondary text-white pt-2 pb-2">Sobre sua contribuição:</h4>
         

             <div class="row">
                <div class="form-group">
                  <p class="mb-1">Autor:</p>
                  <input wire:model="autores" type="text" name="autores" class="form-control" placeholder="Digite o(a) autor(a)" required>
                </div>
                <div class="form-group mt-3 mt-md-1">
                   <p class="mb-1">Orientador:</p>
                  <input wire:model="orientadores" type="text" name="orientadores" class="form-control" placeholder="Digite o(a) orientador(a)" required>
                </div>
                <div class="form-group mt-3 mt-md-1">
                   <p class="mb-1">Titulo:</p>
                  <input wire:model="titulo" type="text" name="titulo" class="form-control"  placeholder="Digite o título" required>
                </div>
                <div class="form-group mt-3 mb-1 mt-md-1">
                   <p class="mb-1">Assunto:</p>
                  <input wire:model="assunto" type="text" name="assunto" class="form-control"  placeholder="Digite o assunto" required>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Carrege seu trabalho</label>
                    <input wire:model="contribuicaoFile" class="form-control" type="file" required>
                </div>
                @error('contribuicaoFile') <span class="error">{{ $message }}</span> @enderror
            </div> 

            <div class="text-center mt-1 mb-3"><button type="submit">Salvar</button></div>
        </div>
    @endif --}}

{{-- </form> --}}

    
   


</div>