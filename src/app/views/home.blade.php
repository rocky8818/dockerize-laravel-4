@extends('master')
@section('title', 'Quatro Concept | En pocas palabras, los arquitectos de tu nueva vida')

@section('head')
    {{ HTML::style('css/home.css') }}
    <script>
        $(function(){
            $('#scroll-link').click(function(e){
                e.preventDefault();
                $('html,body').animate({scrollTop: $("#squares-container").offset().top}, 'slow');
            });

            $('.square-container').hover(function(){
                // Hide previous overs
                $('.square-over').addClass('hidden');
                // Show current over
                $(this).parent().find('.square-over').removeClass('hidden');
            }, function(){
                // Out
            });

            $('.square-over').hover(function(){}, function(){
                $(this).addClass('hidden');
            });
        });
    </script>
@stop

@section('body')
    <div id="home-intro-background"></div>
    <div id="home-intro-container">
        <div id="home-intro-content">
            <img id="intro-logo" src="{{ asset('svg/logotipo_home.svg') }}" alt="Viventia">
            <p class="slogan">Construcción + Diseño + Arquitectura</p>
            <a id="scroll-link" href="#content"><img src="{{ asset('svg/down.svg') }}" id="down-icon" alt="Down"></a>
        </div>
    </div>
    <div id="content-puller"></div>
    <a name="content"></a>
    <div class="container-fluid">
         <div class="row" id="squares-container">
            <div class="col-sm-4 no-padding">
                <div id="projects-background" class="container-background"></div>
                <div class="square-over hidden">
                    <img src="{{ asset('img/4.gif') }}">
                    <p>Nuestros proyectos son desarrollos residenciales personalizados 100% a tu gusto y necesidades, con materiales de la mejor calidad.</p>
                    <a href="{{ route('proyectos') }}"><span>CONOCER PROYECTOS <img src="svg/mas.svg"></span></a>
                </div>
                <div id="projects-container" class="square-container">
                    <div id="projects-content">
                        <h3>PROYECTOS</h3>
                        <p>que realizamos</p>
                        <a href="/proyectos-especiales/"><img src="{{ asset('svg/mas.svg') }}" alt="más"></a>
                    </div>
                </div>
                <div class="square-puller"></div>
            </div>
            <div class="col-sm-4 no-padding">
                <div id="who-is-background"></div>
                <div class="square-over hidden">
                    <img src="{{ asset('img/4.gif') }}">
                    <p>Es un grupo constructor inmobiliario de occidente.<br>Somos producto de esfuerzo constantes de personas comprometidas y confiables.</p>
                    <a href="{{ route ('quienesSomos')}}"><span>LEER MÁS <img src="svg/mas.svg"></span></a>
                </div>
                <div id="who-is-container" class="square-container">
                    <div id="who-is-content">
                        <h3>¿QUIÉN ES QUATRO CONCEPT?</h3>
                        <p>conócenos más</p>
                        <a href=""><img src="{{ asset('svg/mas.svg') }}" alt="más"></a>
                    </div>
                </div>
                <div class="square-puller"></div>
            </div>
            <div class="col-sm-4 no-padding">
                <div id="presence-background" class="container-background"></div>
                <div id="presence-over" class="square-over hidden">
                    <img src="{{ asset('img/4.gif') }}">
                    <p>Aquí te ofrecemos las mejores opciones de proyectos en venta de casas terminadas con las mejores ubicaciones de acuerdo a tu zona de interés.</p>
                    <a href="https://quatroconcept.com.mx/inmobiliaria"><span>IR A INMOBILIARIA <img src="svg/mas.svg"></span></a>
                </div>
                <div id="presence-container" class="square-container">
                    <div id="presence-content">
                        <h3>INMOBILIARIA</h3>
                        <p>residencias con nuestro sello</p>
                        <a href=""><img src="{{ asset('svg/mas.svg') }}" alt="más"></a>
                    </div>
                </div>
                <div class="square-puller"></div>
            </div>
        </div>
    </div>

@stop