@extends('layouts.app')

@section('title', 'Página Principal')
@section('content')

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            @foreach ($banners as $banner)
            <div class="hs-item set-bg" data-setbg="{{ Voyager::image($banner->image)}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>{{ $banner->title }}</span>
                                <h1>{{ $banner->subtitle}}</h1>
                                <a href="{{ url('contato') }}" class="primary-btn">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>     
            @endforeach
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- ChoseUs Section Begin -->
    <section class="choseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Por que nos escolher?</span>
                        <h2>AUMENTE SEUS LIMITES</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($diferenciais as $diferenciai)
                    <div class="col-lg-3 col-sm-6">
                        <div class="cs-item">
                            <span class="{{ $diferenciai->flaticon }}"></span>
                            <h4>{{ $diferenciai->title }}</h4>
                            <p>{{ $diferenciai->content }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Classes Section Begin -->
    <section class="classes-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Classes</span>
                        <h2>O QUE NOS OFERECEMOS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-1.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>STRENGTH</span>
                            <h5>Weightlifting</h5>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-2.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Cardio</span>
                            <h5>Indoor cycling</h5>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-3.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>STRENGTH</span>
                            <h5>Kettlebell power</h5>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-4.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Cardio</span>
                            <h4>Indoor cycling</h4>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-5.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Training</span>
                            <h4>Boxing</h4>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        @foreach ($call_to_actions as $call_to_action)                            
                        
                        <h2>{{ $call_to_action->title }}</h2>
                        <div class="bt-tips">{{ $call_to_action->sub_title }}</div>
                        <a href="{{ url('contato') }}" class="primary-btn  btn-normal">Agendamento</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Planos</span>
                        <h2>Encontre o melhor plano para você</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
               @foreach ($prices as $price)
                    <div class="col-lg-4 col-md-8">
                        <div class="ps-item">
                            <h3>{{ $price->title }}</h3>
                            <div class="pi-price">
                                <h2>{{ $price->price }}</h2>
                                <span>{{ $price->subtitle }}</span>
                            </div>
                            <ul>
                                {!! $price->content !!}
                            </ul>
                            <a href="{{ url('contato') }}" class="primary-btn pricing-btn">Saiba mais</a>
                            {{-- <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a> --}}
                        </div>
                    </div>
               @endforeach
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Gallery Section Begin -->
    <div class="gallery-section">
        <div class="gallery">
            <div class="grid-sizer"></div>
            
            @foreach ($galerias as $galeria)
            <div class="gs-item grid-wide set-bg" data-setbg="{{ Voyager::image($galeria->image) }}">
                <a href="{{ Voyager::image($galeria->image) }}" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            @endforeach 
        </div>
    </div>
    <!-- Gallery Section End -->

    <!-- Team Section Begin -->
    <section class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <span>A Profissional</span>
                            <h2>Claudia Leal</h2>
                        </div>
                        <a href="{{ url('contato') }}" class="primary-btn btn-normal appoinment-btn">Agendamento</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ts-slider owl-carousel">
                    @foreach ($profissionais as $profissional)
                        <div class="col-lg-4">
                            <div class="ts-item set-bg" data-setbg="{{ Voyager::image($profissional->image) }}">
                                <div class="ts_text">
                                    <h4>{{ $profissional->name }}</h4>
                                    <span>{{ $profissional->job }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Get In Touch Section Begin -->
    <div class="gettouch-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-map-marker"></i>
                        <p>{{ setting('site.endereco') }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-mobile"></i>
                        <ul>
                            <li>{{ setting('site.telefone') }}</li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text email">
                        <i class="fa fa-envelope"></i>
                        <p>{{ setting('site.email') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection