@extends('master')

@section('conteudo')
    

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('web/img/pesquisa.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Contribuições</h2>
        <ol>
          <li><a href="{{route('index')}}">Home</a></li>
          <li>Contribuições</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container position-relative">

        <div class="row gy-4 d-flex justify-content-center">

          <div class="col-lg-12">
            
        
        
            <form action="{{route('pesquisa_contribuicoes')}}" method="POST" class="php-email-form">
              @csrf  

              <div class="row">

               

                <div class="form-group mt-1 info-item col-md-4">
                  <label><h5>Pesquise pela base:</h5></label>
                  <select class="form-control" name="base">
                    <option></option>
                    <option value="BASE NACIONAL COMUM" {{ (old('base') == 'BASE NACIONAL COMUM'  ? 'selected' : '') }}>BASE NACIONAL COMUM</option>
                    <option value="BASE TÉCNICA" {{ (old('base') == 'BASE TÉCNICA'  ? 'selected' : '') }}>BASE TÉCNICA</option>
                  </select>
                </div>

                <div class="form-group mt-1 info-item col-md-4">
                  <label><h5>Pesquise pelo curso:</h5></label>     
                          <select class="form-control" name="curso">
                            <option value=""></option>
                                @foreach ($cursos as $curso)
                                <option value="{{$curso->curso}}" {{ (old('curso') == $curso->curso  ? 'selected' : '') }}>{{$curso->curso}}</option>
                            @endforeach
                        </select>
                </div>

                 <div class="form-group mt-1 info-item col-md-4">
                  <label><h5>Pesquise pelo componente BNCC:</h5></label>     
                    <select class="form-control" name="componenteBNCC">
                      <option value=""></option>
                      @foreach ($componentesBNCC as $componenteBNCC)
                          <option  value="{{$componenteBNCC->componente}}" {{ (old('componenteBNCC') == $componenteBNCC->componente  ? 'selected' : '') }}>{{ $componenteBNCC->componente }}</option>   
                      @endforeach
                  </select>
                </div>

                <div class="form-group mt-4 info-item col-md-4">
                  <label><h5>Pesquise pelo componente BT:</h5></label>     
                    <select class="form-control" name="componenteBT">
                      <option value=""></option>
                      @foreach ($componentesBT as $componenteBT)
                          <option  value="{{$componenteBT->componente}}"  {{ (old('componenteBT') == $componenteBT->componente  ? 'selected' : '') }}>{{ $componenteBT->componente }}</option>   
                      @endforeach
                  </select>
                </div>

                <div class="form-group mt-4 info-item col-md-4">
                  <label><h5>Pesquise pela série:</h5></label>
                  <select class="form-control" name="serie">
                    <option value=""></option>
                        <option value="1ª" {{ (old('serie') == '1ª'  ? 'selected' : '') }}>1ª</option>
                        <option value="2ª" {{ (old('serie') == '2ª'  ? 'selected' : '') }}>2ª</option>
                        <option value="3ª" {{ (old('serie') == '3ª'  ? 'selected' : '') }}>3ª</option>
                  </select>
                </div>           

                <div class="form-group mt-4 info-item col-md-4">
                  <label for=""><h5>Pesquise pelos autores:</h5></label>
                  <input type="text" class="form-control" name="autores" value="{{old('autores')}}">
                </div>

                <div class="form-group mt-4 info-item col-md-4">
                  <label for=""><h5>Pesquise pelos orientadores:</h5></label>
                  <input type="text" class="form-control" name="orientadores" value="{{old('orientadores')}}">
                </div>

                <div class="form-group mt-4 info-item col-md-4">
                  <label for=""><h5>Pesquise pelo título:</h5></label>
                  <input type="text" class="form-control" name="titulo" value="{{old('titulo')}}">
                </div>
                
                <div class="form-group mt-4 info-item col-md-4">
                  <label for=""><h5>Pesquise pelo assunto:</h5></label>
                  <input type="text" class="form-control" name="assunto" value="{{old('assunto')}}">
                </div>

                <div class="form-group mt-3 info-item">
                  <label for=""><h5>Pesquise pelo IEMA Pleno:</h5></label>
                  <select class="form-control" id="exampleFormControlSelect1" name="ip">
                    <option></option>
                    <option value="ip_altoalegre" {{ (old('ip') == 'ip_altoalegre'  ? 'selected' : '') }}>IEMA PLENO ALTO ALEGRE DO PINDARÉ</option>
                    <option value="ip_amarante" {{ (old('ip') == 'ip_amarante'  ? 'selected' : '') }}>IEMA PLENO AMARANTE DO MARANHÃO</option>
                    <option value="ip_axixa" {{ (old('ip') == 'ip_axixa'  ? 'selected' : '') }}>IEMA PLENO AXIXÁ</option>
                    <option value="ip_bacabal" {{ (old('ip') == 'ip_bacabal'  ? 'selected' : '') }}>IEMA PLENO BACABAL</option>
                    <option value="ip_bacabeira" {{ (old('ip') == 'ip_bacabeira'  ? 'selected' : '') }}>IEMA PLENO BACABEIRA</option>
                    <option value="ip_balsas" {{ (old('ip') == 'ip_balsas'  ? 'selected' : '') }}>IEMA PLENO BALSAS</option>
                    <option value="ip_brejo" {{ (old('ip') == 'ip_brejo'  ? 'selected' : '') }}>IEMA PLENO BREJO</option>
                    <option value="ip_carutapera" {{ (old('ip') == 'ip_carutapera'  ? 'selected' : '') }}>IEMA PLENO CARUTAPERA</option>
                    <option value="ip_chapadinha" {{ (old('ip') == 'ip_chapadinha'  ? 'selected' : '') }}>IEMA PLENO CHAPADINHA</option>
                    <option value="ip_codo" {{ (old('ip') == 'ip_codo'  ? 'selected' : '') }}>IEMA PLENO CODÓ</option>
                    <option value="ip_coelhoneto" {{ (old('ip') == 'ip_coelhoneto'  ? 'selected' : '') }}>IEMA PLENO COELHO NETO</option>
                    <option value="ip_colinas" {{ (old('ip') == 'ip_colinas'  ? 'selected' : '') }}>IEMA PLENO COLINAS </option>
                    <option value="ip_coroata" {{ (old('ip') == 'ip_coroata'  ? 'selected' : '') }}>IEMA PLENO COROATÁ</option>
                    <option value="ip_cururupu" {{ (old('ip') == 'ip_cururupu'  ? 'selected' : '') }}>IEMA PLENO CURURUPU</option>
                    <option value="ip_matoes" {{ (old('ip') == 'ip_matoes'  ? 'selected' : '') }}>IEMA PLENO MATÕES</option>
                    <option value="ip_pindare" {{ (old('ip') == 'ip_pindare'  ? 'selected' : '') }}>IEMA PLENO PINDARÉ-MIRIM</option>
                    <option value="ip_presidentedutra" {{ (old('ip') == 'ip_presidentedutra'  ? 'selected' : '') }}>IEMA PLENO PRESIDENTE DUTRA</option>
                    <option value="ip_santahelena" {{ (old('ip') == 'ip_santahelena'  ? 'selected' : '') }}>IEMA PLENO SANTA HELENA</option>
                    <option value="ip_santaines" {{ (old('ip') == 'ip_santaines'  ? 'selected' : '') }}>IEMA PLENO SANTA INÊS</option>
                    <option value="ip_santaluzia" {{ (old('ip') == 'ip_santaluzia'  ? 'selected' : '') }}>IEMA PLENO SANTA LUZIA DO PARUÁ</option>
                    <option value="ip_saojoseribamar" {{ (old('ip') == 'ip_saojoseribamar'  ? 'selected' : '') }}>IEMA PLENO SÃO JOSÉ DE RIBAMAR</option>
                    <option value="ip_saoluisbacelar" {{ (old('ip') == 'ip_saoluisbacelar'  ? 'selected' : '') }}>IEMA PLENO SÃO LUÍS BACELAR PORTELA</option>
                    <option value="ip_saoluiscentro" {{ (old('ip') == 'ip_saoluiscentro'  ? 'selected' : '') }}>IEMA PLENO SÃO LUÍS CENTRO</option>
                    <option value="ip_saoluisgoncalves" {{ (old('ip') == 'ip_saoluisgoncalves'  ? 'selected' : '') }}>IEMA PLENO SÃO LUÍS GONÇALVES DIAS</option>
                    <option value="ip_saoluisitaqui" {{ (old('ip') == 'ip_saoluisitaqui'  ? 'selected' : '') }}>IEMA PLENO SÃO LUÍS ITAQUI BACANGA</option>
                    <option value="ip_saoluisrioanil" {{ (old('ip') == 'ip_saoluisrioanil'  ? 'selected' : '') }}>IEMA PLENO SÃO LUÍS RIO ANIL</option>
                    <option value="ip_saoluistamancao" {{ (old('ip') == 'ip_saoluistamancao'  ? 'selected' : '') }}>IEMA PLENO SÃO LUÍS TAMANCÃO</option>
                    <option value="ip_saovicente" {{ (old('ip') == 'ip_saovicente'  ? 'selected' : '') }}>IEMA PLENO SÃO VICENTE FERRER</option>
                    <option value="ip_timon" {{ (old('ip') == 'ip_timon'  ? 'selected' : '') }}>IEMA PLENO TIMON</option>
                    <option value="ip_tutoia" {{ (old('ip') == 'ip_tutoia'  ? 'selected' : '') }}>IEMA PLENO TUTÓIA - CASEMIRO DE ABREU</option>
                    <option value="ip_vargemgrande" {{ (old('ip') == 'ip_vargemgrande'  ? 'selected' : '') }}>IEMA PLENO VARGEM GRANDE</option>
                    <option value="ip_viana" {{ (old('ip') == 'ip_viana'  ? 'selected' : '') }}>IEMA PLENO VIANA DOM  HAMLETO DE ANGELIS</option>
                    <option value="ip_zedoca" {{ (old('ip') == 'ip_zedoca'  ? 'selected' : '') }}>IEMA PLENO ZÉ DOCA</option>
                  </select>
                </div>

                <div class="text-center mt-3"><button type="submit">Pesquisar</button></div>

              </div>

            </form>

        </div>

         <div class="col-lg-12">
          <div class="row">
     
              @if (isset($contribuicoes))
              <table id="exampleData" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Registros encontrados</th>
                          <th scope="col">Anexo</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($contribuicoes as $contribuicao)
                        <tr>
                          <th scope="row">{{$loop->index+1}}</th>
                          <td>
                              <p class="mb-0 mt-0"><strong>Base:</strong> {{$contribuicao->base}}</p>
                                  @if ($contribuicao->base == "BASE NACIONAL COMUM")
                                  <p class="mb-0 mt-0"><strong>Componente BNCC:</strong> {{$contribuicao->disciplinaBNCC}}</p>
                                  @else
                                  <p class="mb-0 mt-0"><strong>Componente BT:</strong> {{$contribuicao->disciplinaBT}}</p>
                                  @endif
                                  @if ($contribuicao->base == "BASE TÉCNICA")
                                  <p class="mb-0 mt-0"><strong>Curso:</strong> {{$contribuicao->curso}}</p>
                                  @endif
                              <p class="mb-0 mt-0"><strong>Série:</strong> {{$contribuicao->serie}}</p>
                              <p class="mb-0 mt-0"><strong>Autores:</strong> {{$contribuicao->autores}}</p>
                              <p class="mb-0 mt-0"><strong>Orientadores:</strong> {{$contribuicao->orientadores}}</p>
                              <p class="mb-0 mt-0"><strong>Título:</strong> {{$contribuicao->titulo}}</p>
                              <p class="mb-0 mt-0"><strong>Assunto:</strong> {{$contribuicao->assunto}}</p>
                          </td>
                          <td>
                              <a href="{{ url("storage/{$contribuicao->path_contribuicao}") }}" target="blank">  <i style="color:rgb(151, 151, 151); font-size: 25px" class="bi bi-file-earmark-pdf-fill"></i> </a>
                          </td>
                        </tr>
                      @endforeach    
                    </tbody>
              </table>
              @endif

          </div>
        </div>  

      </div>
    </section>


  </main>


  @endsection