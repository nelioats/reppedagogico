@extends('master')

@section('conteudo')
    

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('web/img/parametros.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Componente</h2>
        <ol>
          <li><a href="{{route('index')}}">Home</a></li>
          <li>Componente</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

  
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

      

            <form action="{{route('componente_salvar')}}" method="POST" class="php-email-form">
              @csrf
              <div class="row">

                
                <div class="form-group mt-3 mt-md-1 info-item">
                  <label for=""><h4>Selecione a base:</h4></label>
                  <select class="form-control" id="exampleFormControlSelect1" name="base" required>
                    <option></option>
                    <option value="BASE NACIONAL COMUM">Base Nacional Comum</option>
                    <option value="BASE TÉCNICA">Base Técnica</option>
                  </select>
                </div>

                <div class="form-group mt-3 mt-md-1 info-item">
                  <label for=""><h4>Selecione o curso:</h4></label>
                  <select class="form-control" id="exampleFormControlSelect1" name="curso" required>
                    <option></option>
                      @foreach ($cursos as $curso)
                        <option value="{{$curso->id}}">{{$curso->curso}}</option>
                      @endforeach
                  </select>
                </div>

                <div class="form-group mt-3 mt-md-1 info-item">
                  <label for=""><h4>Selecione a série:</h4></label>
                  <select class="form-control" id="exampleFormControlSelect1" name="serie" required>
                    <option value=""></option>
                        <option value="1ª">1ª</option>
                        <option value="2ª">2ª</option>
                        <option value="3ª">3ª</option>
                  </select>
                </div>

                <div class="form-group mt-3 mt-md-1 info-item">
                  <label for=""><h4>Informe componente:</h4></label>
                  <input type="text" name="componente" class="form-control" required>
                </div>
               

              </div>
              <div class="text-center mt-3"><button type="submit">Cadastrar</button></div>
            </form>
          
            </div>

            <div class="col-lg-12">              
              <p class="text-center"><strong>Componentes registrados</strong></p>
       
              @if ($componentes->count() != 0)

                <table id="exampleData" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Base</th>
                          <th>Curso</th>
                          <th>Componente</th>
                          <th>Série</th>
                          <th class="text-center">Excluir</th>
                      </tr>
                  </thead>
                  <tbody>
            
                    @foreach ($componentes as $componente)
                      <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td >{{$componente->base}}</td>
                        <td >{{$componente->getNomeCurso($componente->curso)}}</td>
                        <td >{{$componente->componente}}</td>
                        <td >{{$componente->serie}}</td>
                        <td class="text-center"><a href="{{route('componente_delete',['id' => $componente->id])}}"><i style="color:rgb(138, 66, 66); font-size: 25px" class="bi bi-x-square-fill"></i></a></td>
                      </tr>
                    @endforeach    

  
                  </tbody>
                
                </table>

              @else
                <p class="text-center">Sem componentes registrados!</p> 
              @endif       


            </div>

        </div>

      </div>
    </section>

  </main>


  @endsection