@extends('master')
@section('title', 'Presencia QUATRO CONCEPT')

@section('head')
    {{ HTML::style('css/banner.css') }}
    {{ HTML::style('css/presencia.css') }}
@stop

@section('navigation-menu')
    <li class="active">Presencia</li>
@stop

@section('body')
    <div id="banner-container">
        <div id="banner-content">
            <div class="banner-title">
                <h1>PRESENCIA QUATRO CONCEPT</h1>
            </div>
            <div class="banner-shadow">
                <p>En donde hemos tenido el privilegio de crear</p>
            </div>
        </div>
    </div>
    <div class="container-fluid" >
        <div class="row">
            <div class="col-sm-6 no-padding">
                <div id="presence-description-container">
                    <div id="presence-description-content">
                        <p>
                            Hemos creado proyectos en las zonas de más alto nivel en la metrópoli tapatía y actualmente incursionamos en Querétaro.
                            <br><br>
                            Siempre preocupados de crear para usted el mejor entorno habitacional, cuidando cada detalle tanto en diseño, construcción y acabados.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 no-padding">
                <div id="second-block-container"></div>
            </div>
        </div>
    </div>

    <section style="background-color: #fff;">
        <div class="section-title">
            <h3>GUADALAJARA</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('svg/logos/valle-imperial.svg') }}" alt="Valle imperial" class="img-fluid" style="display: block; margin:auto;">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('svg/logos/sendas.svg') }}" alt="Sendas" class="img-fluid" style="display: block; margin:auto;">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('svg/logos/solares.svg') }}" alt="Solares" class="img-fluid" style="display: block; margin:auto;">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('svg/logos/la-toscana.svg') }}" alt="La toscana" class="img-fluid" style="display: block; margin:auto;">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('svg/logos/senda-del-valle.svg') }}" alt="Senda del valle" class="img-fluid" style="display: block; margin:auto;">
                </div>

                <div class="col-md-3">
                    <img src="{{ asset('svg/logos/la-rioja.svg') }}" class="img-fluid" style="display: block; margin:auto;">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('svg/logos/monte-verde.svg') }}" class="img-fluid" style="display: block; margin:auto;">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('svg/logos/casa-fuerte.svg') }}" class="img-fluid" style="display: block; margin:auto;">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('svg/logos/el-campestre.svg') }}" class="img-fluid" style="display: block; margin:auto;">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('img/001.jpg') }}" class="img-fluid" style="display: block; margin:auto;">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('img/002.jpg') }}" class="img-fluid" style="display: block; margin:auto;">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('img/003.jpg') }}" class="img-fluid" style="display: block; margin:auto;">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('img/004.jpg') }}" class="img-fluid" style="display: block; margin:auto;">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('img/020.jpg') }}" class="img-fluid" style="display: block; margin:auto;">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('img/021.jpg') }}" class="img-fluid" style="display: block; margin:auto;">
                </div>
            </div>
        </div>
        

        <div class="section-title">
            <h3>QUERÉTARO</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('svg/logos/san-isidro.svg') }}" alt="San isidro" class="img-fluid" style="display: block; margin:auto;">
                </div>
            </div>
        </div>
    </section>

@stop