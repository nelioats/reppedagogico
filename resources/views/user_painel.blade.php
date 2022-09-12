@extends('master')

@section('conteudo')
    
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('web/img/user_painel.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Minhas Contribuições</h2>
        <ol>
          <li><a href="{{route('index')}}">Home</a></li>
          <li>Minhas Contribuições</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container position-relative">

        <div class="row gy-4 d-flex justify-content-center">

          <div class="col-lg-12">              

       
            @if ($minhasContribuicoes->count() != 0)
      
              <table id="exampleData" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Contribuição</th>
                        <th>Arquivo</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
          
                  @foreach ($minhasContribuicoes as $minhasContribuicao)
                    <tr>
                      <th scope="row">{{$loop->index+1}}</th>
                      <td >
                          <p class="mb-0" style="color: black"><strong>Título:</strong></p>
                          <h6 style="font-size: 80%; margin-bottom: 0">{{$minhasContribuicao->titulo}}</h6>
                          <p class="mb-0" style="color: black"><strong>Assunto:</strong></p>
                          <h6 style="font-size: 80%; margin-bottom: 0">{{$minhasContribuicao->assunto}}</h6>
                          <p class="mb-0" style="color: black"><strong>Autor(a):</strong></p>
                          <h6 style="font-size: 80%; margin-bottom: 0">{{$minhasContribuicao->autores}}</h6>
                          <p class="mb-0" style="color: black"><strong>Orientador(a):</strong></p>
                          <h6 style="font-size: 80%">{{$minhasContribuicao->orientadores}}</h6>
      
                          <small style="font-size: 80%; margin-bottom: 0; color: rgb(98, 98, 185)">
                            #{{$minhasContribuicao->base}}  
                            {{ $minhasContribuicao->disciplinaBNCC ? ' #'.$minhasContribuicao->disciplinaBNCC : '' }} 
                            {{ $minhasContribuicao->curso ? ' #'.$minhasContribuicao->curso : '' }} 
                            {{ $minhasContribuicao->disciplinaBT ? ' #'.$minhasContribuicao->disciplinaBT : '' }} 
                            {{ $minhasContribuicao->serie ? ' #'.$minhasContribuicao->serie : '' }} 
                          </small>
      
                      </td>
                      <td ><a href="{{ url("storage/{$minhasContribuicao->path_contribuicao}") }}" target="blank">  <i style="color:rgb(151, 151, 151); font-size: 25px" class="bi bi-file-earmark-pdf-fill"></i> </a></td>
                      <td ><a href="{{route('deleta_contribuicao',['id' => $minhasContribuicao->id])}}"><i style="color:rgb(138, 66, 66); font-size: 25px" class="bi bi-x-square-fill"></i></a></td>
                    </tr>
                  @endforeach    
      
      
                </tbody>
              
              </table>
      
            @else
              <p class="text-center">Sem contribuições registrados!</p> 
            @endif       
      
      
          </div>
      
        </div>
      </div>
    </section>

  </main>


  @endsection