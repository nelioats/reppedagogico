@extends('master')

@section('conteudo')


    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('web/img/contact-header.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>Registrar</h2>
                <ol>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Registrar</li>
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
                                    <i class="bi bi-exclamation-circle-fill"></i> {{ $error }}
                                </div>
                            @endforeach
                        @endif


                        <form action="{{ route('novo_registro') }}" method="POST" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="form-group  info-item">
                                    <label for="">
                                        <h4>Nome Completo:</h4>
                                    </label>
                                    <input type="text" name="name" class="form-control" placeholder="Digite seu Nome"
                                        required>
                                </div>
                                <div class="form-group mt-3 mt-md-1 info-item">
                                    <label for="">
                                        <h4>E-mail:</h4>
                                    </label>
                                    <input type="text" name="email" class="form-control" placeholder="Digite seu Email"
                                        required>
                                </div>
                                <div class="form-group mt-3 mt-md-1 info-item col-md-6">
                                    <label for="">
                                        <h4>CPF:</h4>
                                    </label>
                                    <input type="text" class="form-control cpf" name="cpf"
                                        placeholder="Digite seu CPF" required>
                                </div>
                                <div class="form-group mt-3 mt-md-1 info-item col-md-6">
                                    <label for="">
                                        <h4>Telefone:</h4>
                                    </label>
                                    <input type="text" class="form-control telefone" name="telefone"
                                        placeholder="Digite seu telefone" required>
                                </div>

                                <div class="form-group mt-3 mt-md-1 info-item">
                                    <label for="">
                                        <h4>IEMA Pleno:</h4>
                                    </label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="ip">
                                        <option></option>
                                        <option value="ip_altoalegre">IEMA PLENO ALTO ALEGRE DO PINDARÉ</option>
                                        <option value="ip_amarante">IEMA PLENO AMARANTE DO MARANHÃO</option>
                                        <option value="ip_axixa">IEMA PLENO AXIXÁ</option>
                                        <option value="ip_bacabal">IEMA PLENO BACABAL</option>
                                        <option value="ip_bacabeira">IEMA PLENO BACABEIRA</option>
                                        <option value="ip_balsas">IEMA PLENO BALSAS</option>
                                        <option value="ip_brejo">IEMA PLENO BREJO</option>
                                        <option value="ip_carutapera">IEMA PLENO CARUTAPERA</option>
                                        <option value="ip_chapadinha">IEMA PLENO CHAPADINHA</option>
                                        <option value="ip_codo">IEMA PLENO CODÓ</option>
                                        <option value="ip_coelhoneto">IEMA PLENO COELHO NETO</option>
                                        <option value="ip_colinas">IEMA PLENO COLINAS </option>
                                        <option value="ip_coroata">IEMA PLENO COROATÁ</option>
                                        <option value="ip_cururupu">IEMA PLENO CURURUPU</option>
                                        <option value="ip_matoes">IEMA PLENO MATÕES</option>
                                        <option value="ip_pindare">IEMA PLENO PINDARÉ-MIRIM</option>
                                        <option value="ip_presidentedutra">IEMA PLENO PRESIDENTE DUTRA</option>
                                        <option value="ip_santahelena">IEMA PLENO SANTA HELENA</option>
                                        <option value="ip_santaines">IEMA PLENO SANTA INÊS</option>
                                        <option value="ip_santaluzia">IEMA PLENO SANTA LUZIA DO PARUÁ</option>
                                        <option value="ip_saojoseribamar">IEMA PLENO SÃO JOSÉ DE RIBAMAR</option>
                                        <option value="ip_saoluisbacelar">IEMA PLENO SÃO LUÍS BACELAR PORTELA</option>
                                        <option value="ip_saoluiscentro">IEMA PLENO SÃO LUÍS CENTRO</option>
                                        <option value="ip_saoluisgoncalves">IEMA PLENO SÃO LUÍS GONÇALVES DIAS</option>
                                        <option value="ip_saoluisitaqui">IEMA PLENO SÃO LUÍS ITAQUI BACANGA</option>
                                        <option value="ip_saoluisrioanil">IEMA PLENO SÃO LUÍS RIO ANIL</option>
                                        <option value="ip_saoluistamancao">IEMA PLENO SÃO LUÍS TAMANCÃO</option>
                                        <option value="ip_saovicente">IEMA PLENO SÃO VICENTE FERRER</option>
                                        <option value="ip_timon">IEMA PLENO TIMON</option>
                                        <option value="ip_tutoia">IEMA PLENO TUTÓIA - CASEMIRO DE ABREU</option>
                                        <option value="ip_vargemgrande">IEMA PLENO VARGEM GRANDE</option>
                                        <option value="ip_viana">IEMA PLENO VIANA DOM HAMLETO DE ANGELIS</option>
                                        <option value="ip_zedoca">IEMA PLENO ZÉ DOCA</option>
                                    </select>
                                </div>

                                <div class="form-group mt-3 mt-md-1 info-item">
                                    <label for="">
                                        <h4>Senha:</h4>
                                    </label>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Digite sua Senha" required>
                                </div>

                                <div class="form-group mt-3 mt-md-1 info-item">
                                    <label for="">
                                        <h4>Confirmação de Senha:</h4>
                                    </label>
                                    <input type="password" class="form-control" name="password_conf"
                                        placeholder="Confirme sua Senha" required>
                                </div>

                            </div>
                            <div class="text-center mt-3"><button type="submit">Cadastrar</button></div>
                        </form>

                        <div class="text-center mt-5">
                            <p>Já tem uma conta? <a href="{{ route('login') }}">Clique aqui</a></p>
                        </div>


                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->


@endsection
