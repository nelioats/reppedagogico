@extends('master')

@section('conteudo')
    <main id="main">


        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('web/img/user_painel.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>Contribuir</h2>
                <ol>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Contribuir</li>
                </ol>

            </div>
        </div>

        <section id="contact" class="contact">
            <div class="container position-relative">

                <div class="row gy-4 d-flex justify-content-center">

                    <div class="col-lg-8">
                        <livewire:dados-contribuicao />
                    </div>

                </div>
            </div>
        </section>



    </main>
@endsection
