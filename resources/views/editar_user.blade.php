@extends('master')

@section('conteudo')


    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('web/img/contact-header.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>Meus dados</h2>
                <ol>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Meus dados</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->


        <section id="contact" class="contact">
            <div class="container position-relative">

                <div class="row gy-4 d-flex justify-content-center">

                    <div class="col-lg-8">

                        @if (session()->exists('message'))
                            <div class="alert alert-success text-center" role="alert">
                                <i class="bi bi-check-circle-fill"></i> {{ session()->get('message') }}
                            </div>
                        @endif


                        @if ($errors->all())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger text-center" role="alert">
                                    <i class="bi bi-exclamation-circle-fill"></i> {{ $error }}
                                </div>
                            @endforeach
                        @endif



                        <form action="{{ route('update_user') }}" method="POST" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="form-group  info-item">
                                    <label for="">
                                        <h4>Nome Completo:</h4>
                                    </label>
                                    <input type="text" name="name" class="form-control" placeholder="Digite seu Nome"
                                        value="{{ Auth::user()->name }}" required>
                                </div>
                                <div class="form-group mt-3 mt-md-1 info-item">
                                    <label for="">
                                        <h4>E-mail:</h4>
                                    </label>
                                    <input type="text" name="email" class="form-control" placeholder="Digite seu Email"
                                        value="{{ Auth::user()->email }}" required>
                                </div>
                                <div class="form-group mt-3 mt-md-1 info-item col-md-6">
                                    <label for="">
                                        <h4>CPF:</h4>
                                    </label>
                                    <input type="text" class="form-control cpf" name="cpf"
                                        placeholder="Digite seu CPF" value="{{ Auth::user()->cpf }}" required>
                                </div>
                                <div class="form-group mt-3 mt-md-1 info-item col-md-6">
                                    <label for="">
                                        <h4>Telefone:</h4>
                                    </label>
                                    <input type="text" class="form-control telefone" name="telefone"
                                        placeholder="Digite seu telefone" value="{{ Auth::user()->telefone }}" required>
                                </div>

                                <div class="form-group mt-3 info-item">
                                    <label for="">
                                        <h5>Pesquise pelo IEMA Pleno:</h5>
                                    </label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="ip">
                                        <option></option>
                                        <option value="ip_altoalegre"
                                            {{ Auth::user()->ip == 'ip_altoalegre' ? 'selected' : '' }}>IEMA PLENO ALTO
                                            ALEGRE DO PINDAR??</option>
                                        <option value="ip_amarante"
                                            {{ Auth::user()->ip == 'ip_amarante' ? 'selected' : '' }}>IEMA PLENO AMARANTE
                                            DO MARANH??O</option>
                                        <option value="ip_axixa" {{ Auth::user()->ip == 'ip_axixa' ? 'selected' : '' }}>
                                            IEMA PLENO AXIX??</option>
                                        <option value="ip_bacabal"
                                            {{ Auth::user()->ip == 'ip_bacabal' ? 'selected' : '' }}>IEMA PLENO BACABAL
                                        </option>
                                        <option value="ip_bacabeira"
                                            {{ Auth::user()->ip == 'ip_bacabeira' ? 'selected' : '' }}>IEMA PLENO
                                            BACABEIRA</option>
                                        <option value="ip_balsas"
                                            {{ Auth::user()->ip == 'ip_balsas' ? 'selected' : '' }}>IEMA PLENO BALSAS
                                        </option>
                                        <option value="ip_brejo" {{ Auth::user()->ip == 'ip_brejo' ? 'selected' : '' }}>
                                            IEMA PLENO BREJO</option>
                                        <option value="ip_carutapera"
                                            {{ Auth::user()->ip == 'ip_carutapera' ? 'selected' : '' }}>IEMA PLENO
                                            CARUTAPERA</option>
                                        <option value="ip_chapadinha"
                                            {{ Auth::user()->ip == 'ip_chapadinha' ? 'selected' : '' }}>IEMA PLENO
                                            CHAPADINHA</option>
                                        <option value="ip_codo" {{ Auth::user()->ip == 'ip_codo' ? 'selected' : '' }}>
                                            IEMA PLENO COD??</option>
                                        <option value="ip_coelhoneto"
                                            {{ Auth::user()->ip == 'ip_coelhoneto' ? 'selected' : '' }}>IEMA PLENO
                                            COELHO NETO</option>
                                        <option value="ip_colinas"
                                            {{ Auth::user()->ip == 'ip_colinas' ? 'selected' : '' }}>IEMA PLENO COLINAS
                                        </option>
                                        <option value="ip_coroata"
                                            {{ Auth::user()->ip == 'ip_coroata' ? 'selected' : '' }}>IEMA PLENO COROAT??
                                        </option>
                                        <option value="ip_cururupu"
                                            {{ Auth::user()->ip == 'ip_cururupu' ? 'selected' : '' }}>IEMA PLENO
                                            CURURUPU</option>
                                        <option value="ip_matoes"
                                            {{ Auth::user()->ip == 'ip_matoes' ? 'selected' : '' }}>IEMA PLENO MAT??ES
                                        </option>
                                        <option value="ip_pindare"
                                            {{ Auth::user()->ip == 'ip_pindare' ? 'selected' : '' }}>IEMA PLENO
                                            PINDAR??-MIRIM</option>
                                        <option value="ip_presidentedutra"
                                            {{ Auth::user()->ip == 'ip_presidentedutra' ? 'selected' : '' }}>IEMA PLENO
                                            PRESIDENTE DUTRA</option>
                                        <option value="ip_santahelena"
                                            {{ Auth::user()->ip == 'ip_santahelena' ? 'selected' : '' }}>IEMA PLENO
                                            SANTA HELENA</option>
                                        <option value="ip_santaines"
                                            {{ Auth::user()->ip == 'ip_santaines' ? 'selected' : '' }}>IEMA PLENO SANTA
                                            IN??S</option>
                                        <option value="ip_santaluzia"
                                            {{ Auth::user()->ip == 'ip_santaluzia' ? 'selected' : '' }}>IEMA PLENO SANTA
                                            LUZIA DO PARU??</option>
                                        <option value="ip_saojoseribamar"
                                            {{ Auth::user()->ip == 'ip_saojoseribamar' ? 'selected' : '' }}>IEMA PLENO
                                            S??O JOS?? DE RIBAMAR</option>
                                        <option value="ip_saoluisbacelar"
                                            {{ Auth::user()->ip == 'ip_saoluisbacelar' ? 'selected' : '' }}>IEMA PLENO
                                            S??O LU??S BACELAR PORTELA</option>
                                        <option value="ip_saoluiscentro"
                                            {{ Auth::user()->ip == 'ip_saoluiscentro' ? 'selected' : '' }}>IEMA PLENO
                                            S??O LU??S CENTRO</option>
                                        <option value="ip_saoluisgoncalves"
                                            {{ Auth::user()->ip == 'ip_saoluisgoncalves' ? 'selected' : '' }}>IEMA PLENO
                                            S??O LU??S GON??ALVES DIAS</option>
                                        <option value="ip_saoluisitaqui"
                                            {{ Auth::user()->ip == 'ip_saoluisitaqui' ? 'selected' : '' }}>IEMA PLENO
                                            S??O LU??S ITAQUI BACANGA</option>
                                        <option value="ip_saoluisrioanil"
                                            {{ Auth::user()->ip == 'ip_saoluisrioanil' ? 'selected' : '' }}>IEMA PLENO
                                            S??O LU??S RIO ANIL</option>
                                        <option value="ip_saoluistamancao"
                                            {{ Auth::user()->ip == 'ip_saoluistamancao' ? 'selected' : '' }}>IEMA PLENO
                                            S??O LU??S TAMANC??O</option>
                                        <option value="ip_saovicente"
                                            {{ Auth::user()->ip == 'ip_saovicente' ? 'selected' : '' }}>IEMA PLENO S??O
                                            VICENTE FERRER</option>
                                        <option value="ip_timon" {{ Auth::user()->ip == 'ip_timon' ? 'selected' : '' }}>
                                            IEMA PLENO TIMON</option>
                                        <option value="ip_tutoia"
                                            {{ Auth::user()->ip == 'ip_tutoia' ? 'selected' : '' }}>IEMA PLENO TUT??IA -
                                            CASEMIRO DE ABREU</option>
                                        <option value="ip_vargemgrande"
                                            {{ Auth::user()->ip == 'ip_vargemgrande' ? 'selected' : '' }}>IEMA PLENO
                                            VARGEM GRANDE</option>
                                        <option value="ip_viana" {{ Auth::user()->ip == 'ip_viana' ? 'selected' : '' }}>
                                            IEMA PLENO VIANA DOM HAMLETO DE ANGELIS</option>
                                        <option value="ip_zedoca"
                                            {{ Auth::user()->ip == 'ip_zedoca' ? 'selected' : '' }}>IEMA PLENO Z?? DOCA
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group mt-3 mt-md-1 info-item">
                                    <label for="">
                                        <h4>Senha:</h4>
                                    </label>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Digite sua Senha">
                                </div>

                                <div class="form-group mt-3 mt-md-1 info-item">
                                    <label for="">
                                        <h4>Confirma????o de Senha:</h4>
                                    </label>
                                    <input type="password" class="form-control" name="password_conf"
                                        placeholder="Confirme sua Senha">
                                </div>

                            </div>
                            <div class="text-center mt-3"><button type="submit">Atualizar</button></div>
                        </form>

                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->


@endsection
