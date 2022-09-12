@extends('master')

@section('conteudo')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('web/img/contact-header.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>Login</h2>
                <ol>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Login</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container position-relative">

                <div class="row gy-4 d-flex justify-content-center">

                    <div class="col-lg-6">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                       <form action="{{ route('verifica_login') }}" method="post" role="form" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="form-group info-item">
                                    <label for="">
                                        <h4>E-mail:</h4>
                                    </label>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Digite seu E-mail" required>
                                </div>
                                <div class="form-group mt-3 mt-md-0 info-item">
                                    <label for="">
                                        <h4>Senha:</h4>
                                    </label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Digite sua senha" required>
                                </div>
                            </div>
                            <div class="text-center"><button type="submit">Entrar</button></div>
                        </form>

                        <div class="text-center mt-4">
                            <p>Não tem uma conta? <a href="{{ route('register') }}">Clique aqui</a></p>
                        </div>

                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
