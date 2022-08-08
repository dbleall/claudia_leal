<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Claudia Leal - Personal Trainer, instrutor de fitness">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Claudia Leal - Personal Trainer @yield('title') </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/barfiller.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="canvas-search search-switch">
            <i class="fa fa-search"></i>
        </div>
        <nav class="canvas-menu mobile-menu">
            <ul>
                <li><a href="{{ url('/') }}">Principal</a></li>
                <li><a href="{{ url('about-us') }}">Sobre</a></li>
                <li><a href="{{ url('classes') }}">Classes</a></li>
                <li><a href="{{ url('servicos') }}">Serviços</a></li>
                <li><a href="{{ url('team') }}">Equipe</a></li>
                <li><a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="{{ url('class-timetable') }}">Classes Datas </a></li>
                        <li><a href="{{ url('bmi-calculator') }}">Calculadora Bmi </a></li>
                        <li><a href="{{ url('team') }}">Equipe</a></li>
                        <li><a href="{{ url('galeria') }}">Galeria</a></li>
                        <li><a href="{{ url('blog') }}">Blog</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('contato') }}">Contato</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="canvas-social">
            <a href="{{ setting('site.facebook') }}"><i class="fa fa-facebook"></i></a>
            <a href="{{ setting('site.instagram') }}"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="{{ url('home') }}">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                            <li class="active"><a href="{{ url('home') }}">Home</a></li>
                            <li><a href="{{ url('about-us') }}">Sobre</a></li>
                            <li><a href="{{ url('classes') }}">Classes</a></li>
                            <li><a href="{{ url('servicos') }}">Serviços</a></li>
                            <li><a href="{{ url('equipe') }}">Equipe</a></li>
                            <li><a href="#">Mais</a>   
                                <ul class="dropdown">
                                    <li><a href="{{ url('blog') }}">Blog</a></li>
                                    <li><a href="{{ url('class-timetable') }}">Classes timetable</a></li>
                                    <li><a href="{{ url('bmi-calculator') }}">Bmi calculate</a></li>
                                    <li><a href="{{ url('galeria') }}">Galeria</a></li>                                    
                                </ul>
                            </li>
                            <li><a href="{{ url('contato') }}">Contato</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="top-option">
                        <div class="to-search search-switch">
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="to-social">
                            <a href="{{ setting('site.facebook') }}"><i class="fa fa-facebook"></i></a>
                            <a href="{{ setting('site.instagram') }}"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->

    @yield('content')

      <!-- Footer Section Begin -->
      <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="fs-about">
                        <div class="fa-logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p>{{ setting('site.texto_rodape') }}</p>
                        <div class="fa-social">
                            <a href="{{ setting('site.facebook') }}"><i class="fa fa-facebook"></i></a>
                            <a href="{{ setting('site.instagram') }}"><i class="fa fa-instagram"></i></a>
                            <a href="mailto:{{ setting('site.email') }}"><i class="fa  fa-envelope-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Saiba mais</h4>
                        <ul>
                            <li><a href="{{ url('about-us') }}">Sobre</a></li>
                            <li><a href="{{ url('blog') }}#">Blog</a></li>
                            <li><a href="{{ url('class-details') }}#">Classes</a></li>
                            <li><a href="{{ url('contact') }}#">Contato</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        {{-- <h4>Support</h4>
                        <ul>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Subscribe</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fs-widget">
                        <h4>Ultimos posts</h4>
                        <div class="fw-recent">
                            <h6><a href="#">Physical fitness may help prevent depression, anxiety</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                        <div class="fw-recent">
                            <h6><a href="#">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p>Copyright 2022 - Desenvolvido por <a target="_blank" href="https://novaz.website">  Novaz </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="O que procura ?">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>