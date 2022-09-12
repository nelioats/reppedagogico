<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Repositório Pedagógico</title>

    <!-- Favicons -->
    <link href="web/img/favicon.png" rel="icon">
    <link href="web/img/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="web/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="web/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="web/vendor/aos/aos.css" rel="stylesheet">
    <link href="web/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="web/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="web/vendor/remixicon/remixicon.css" rel="stylesheet">

    {{-- datatable --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="web/css/main.css" rel="stylesheet">

    @livewireStyles
</head>

<body class="page-index">

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ route('index') }}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="web/img/logo.png" alt=""> -->
                <h1 class="d-flex align-items-center"><img src="web/img/home/logo.png" alt="" class="img-fluid">
                </h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ route('index') }}" class="active">Home</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#objetivos">Objetivos</a></li>
                    <li class="dropdown"><a href="#producoes"><span>Produções</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="#">Planos</a></li>
                            <li><a href="#">Vídeos e podcasts</a></li>
                            <li><a href="#">Relatórios de estágio </a></li>
                            <li><a href="#">E-books </a></li>
                        </ul>
                    </li>

                    @if (Auth::check())

                        <li class="dropdown"><a href="#"><span>Olá, {{ Auth::user()->getPrimeiroNome() }}</span>
                                <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                @if (Auth::user()->perfil == 'admin')
                                    <li><a href="{{ route('index_curso') }}">Cursos</a></li>
                                    <li><a href="{{ route('index_componente') }}">Componente</a></li>
                                    <hr style="background-color: rgb(75, 75, 75)">
                                @endif
                                <li><a href="{{ route('editar_user') }}">Meus Dados</a></li>
                                <li><a href="{{ route('user_painel') }}">Minhas Contribuições</a></li>
                                <li><a href="{{ route('user_contribuicao') }}">Contribuir</a></li>
                                <li><a href="{{ route('user_painel_all') }}">Todas Contribuições</a></li>
                                <hr style="background-color: rgb(75, 75, 75)">
                                <li><a href="{{ route('logout') }}">Sair</a></li>

                            </ul>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}">Olá, faça seu login ou cadastre-se</a></li>
                    @endif





                </ul>
            </nav><!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->



    @yield('conteudo')




    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span>Repositório Pedagógico</span>
                        </a>
                        <p>O Repositório Pedagógico do IEMA constitui-se em um espaço digital de armazenamento,
                            preservação, acesso e disseminação das produções de natureza didático-pedagógica do IEMA.
                        </p>
                        <div class="social-links d-flex  mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Emails</h4>
                        <ul>
                            <li><a href="#">rep_ped@gmail.com</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Contatos</h4>
                        <ul>
                            <li>(98) 99999-9999</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Endereço</h4>
                        <p class="text-left">
                            Rua Primeiro de Maio, n°80. Bairro Anil. São Luís/MA. 65046-280
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="footer-legal">
            <div class="container">
                <div class="copyright">
                    &copy; IEMA
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="web/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="web/vendor/aos/aos.js"></script>
    <script src="web/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="web/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="web/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    {{-- datatable --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>


    <!-- Template Main JS File -->
    <script src="web/js/jquery.mask.min.js"></script>
    <script src="web/js/main.js"></script>


    @livewireScripts
</body>

</html>
