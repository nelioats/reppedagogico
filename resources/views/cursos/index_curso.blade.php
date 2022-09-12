@extends('master')

@section('conteudo')
    

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('web/img/parametros.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Cursos</h2>
        <ol>
          <li><a href="{{route('index')}}">Home</a></li>
          <li>Cursos</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container position-relative">

        <div class="row gy-4 d-flex justify-content-center">

       <div class="col-lg-8">


         @if ($errors->all())
            @foreach ($errors->all() as $error)  
              <div class="alert alert-danger text-center" role="alert">
                <i class="bi bi-exclamation-circle-fill"></i> {{$error}}
              </div>
            @endforeach
          @endif

    

            <form action="{{route('curso_salvar')}}" method="POST" class="php-email-form">
              @csrf
              <div class="row">
                <div class="form-group  info-item">
                  <label for=""><h4>Nome do curso:</h4></label>
                  <input type="text" name="curso" class="form-control" placeholder="Digite o curso" required>
                </div>
             

              </div>
              <div class="text-center mt-3"><button type="submit">Cadastrar</button></div>
            </form>

            </div><!-- End Contact Form -->

            <div class="col-lg-12">

              <div>
                <p class="text-center"><strong>Cursos registrados</strong></p>
  
  
                @if ($cursos->count() != 0)
  
                    <table id="exampleData" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>Curso</th>
                              <th class="text-center">Excluir</th>
                          </tr>
                      </thead>
                      <tbody>
                
                        @foreach ($cursos as $curso)
                          <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td >{{$curso->curso}}</td>
                            <td class="text-center"><a href="{{route('curso_delete',['id' => $curso->id])}}"><i style="color:rgb(138, 66, 66); font-size: 25px" class="bi bi-x-square-fill"></i></a></td>
                          </tr>
                        @endforeach    
    
      
                      </tbody>
                    
                    </table>
  
  
  
  
  
  
                @else
                   <p class="text-center">Sem cursos registrados!</p> 
                @endif
  
  
       
  
  
  
  
  
              </div>
                

            </div>


        </div>

      </div>

     


    </section><!-- End Contact Section -->

  </main><!-- End #main -->


  @endsection