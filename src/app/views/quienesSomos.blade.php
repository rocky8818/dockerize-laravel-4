@extends('master')
@section('title', 'Quatro Concept · ¿Quiénes Somos? En pocas palabras, los arquitectos de tu nueva vida')

@section('head')
    {{ HTML::style('css/banner.css') }}
    {{ HTML::style('css/quienes-somos.css') }}
@stop

@section('navigation-menu')
    <li class="active">Quienes somos</li>
@stop

@section('body')
    <div id="banner-container">
        <div id="banner-content">
            <div class="banner-title">
                <h1>¿Quién es Quatro Concept?</h1>
            </div>
            <div class="banner-shadow">
                <p>
                    Somos constructores Inmobiliarios, creamos y desarrollamos proyectos Residenciales personalizados en toda la Zona Metropolitana de Guadalajara, a Crédito o Contado,  con excelentes acabados.
                </p>
                <p>¡LO QUE TU SUEÑAS COMO TU LO SUEÑAS!</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 no-padding">
                <div id="first-block-container">
                    <div id="first-block-content">
                        <p>
                         Nos dedicamos a la Construcción Residencial Personalizada especializados en satisfacer tus necesidades y expectativas en Construcción, Diseño y Arquitectura; creando espacios funcionales y auténticos, trabajamos con tecnología y recurso humano profesional.
                         <br><br>
                       En Quatro Concept tu proyecto es nuestra prioridad, contamos con un equipo de profesionales expertos en cada etapa de la construcción de tu nueva casa, ofreciendo flexibilidad en tu forma de pago.
                        <br><br>
                            Buscamos que nuestros clientes encuentren el espacio perfecto para
su estilo de vida y sus ideas. ¡LO QUE TÚ SUEÑAS COMO TÚ LO SUEÑAS!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 no-padding">
                <div id="second-block-container"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 no-padding">
                <div id="lifestyle-container" >
                    <div>
                        <h3>LIFESTYLE E INNOVACIÓN</h3>
                        <p>
                            Hoy en día cada uno de nuestros proyectos pasa por una fase de implementación y desarrollo, apoyándonos en  empresas de investigación estratégica que fundamenta el valor y el éxito de cada proyecto, nuestro comité de análisis, Ingenieros, Arquitectos e Inversionistas buscamos ofrecer el mejor de los productos para nuestros clientes, para que cada uno de ellos encuentre el espacio perfecto para sus vidas y sus ideas.
                        </p>
                    </div>
                    
                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div id="family-2-image"></div>

            </div>
            <div class="col-sm-4 no-padding">
                <div id="links-container">
                    <div id="links-content" >
                        <p>¿CUÁL ES NUESTRA EXPERIENCIA?</p>
                        <a href="{{ route('proyectos') }}"><img src="{{ asset('img/botones/ver-proyectos.png') }}" alt="Ver proyectos"></a>
                        <div style="border-top: 1px solid #fff; width: 94%; display: block; margin: 1.8em auto;"></div>
                        <p>¿DONDE HEMOS CONSTRUIDO?</p>
                        <a href="{{ route('presencia') }}"><img src="{{ asset('img/botones/ver-presencia.png') }}" alt="Ver presencia"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop