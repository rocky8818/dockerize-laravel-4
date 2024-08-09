<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Favicon -->
		<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('favicon/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png')}}">
        <link rel="manifest" href="{{ asset('favicon/manifest.json')}}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('favicon/ms-icon-144x144.png')}}">
        <meta name="theme-color" content="#ffffff">

		{{ HTML::script('js/jquery-2.2.0.min.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
		{{ HTML::style('css/bootstrap.min.css') }}
		{{ HTML::style('https://fonts.googleapis.com/css?family=Poppins:400,300,700,600,500') }}
		{{ HTML::style('css/themify-icons.css') }}
		{{ HTML::style('css/styles.css') }}
		@yield('head')
		<style type="text/css">
			.btn-whatsapp{
				display: block;
			    
			    height: 50px;
			    color: #fff;
			    position: fixed;
			    right: 30px;
			    bottom: 77px;
			    border-radius: 50%;
			    line-height: 80px;
			    text-align: center;
			    z-index: 999;
			}
			

            #interested-container {
                background-color: #fff;
                text-align: center;
                padding: 2em 0 0 0;
            }
            
            #interested-container h2{
                color: #4ba82c;
            }
            
            
            #interested-container p {
                color: #a3a3a3;
                font-size: 1.5em;
            }
            
            #write-us-img {
                max-width: 350px;
                padding: 0 0.5em;
                width: 100%;
                min-width: 0;
            }
            
            #interested-shadow {
                background: #171717;
                height: 90px;
                margin: -36px 0 0 0;
            }
            
            #main-menu-container {
                text-align: center;
                /*overflow: hidden;*/
                /*margin: 0 0.8em;*/
        
                background-color: #ff000000!important;
                padding-bottom: 10px;
            }
            
            .fixed {
                background-attachment: fixed!important;
                background-position: center;
                background-repeat: no-repeat;

            }
            
            @supports (-webkit-touch-callout: none) {
                .fixed {
                    background-size: cover;
                    background-attachment: scroll!important;
                }
            }

		</style>
	</head>
	<body>
		<nav id="main-menu-container">
			<a href="/"><img id="main-menu-logo" src="{{ asset('svg/logotipo.svg') }}"></a>
			<div id="menu-dots-container" onclick="$('#mobile-nav').removeClass('hidden')"><img id="menu-dots" src="@if(Route::currentRouteName()=='home'){{ asset('svg/brown-dots.svg') }} @else {{ asset('svg/brown-dots.svg') }} @endif"></div>
			<div id="mobile-nav" class="hidden">
				<span id="close-modal-main-menu" onclick="$('#mobile-nav').addClass('hidden')"></span>
				<ul id="main-menu">
					<li><a class="@if(Route::currentRouteName()=='home') active @endif" href="{{ route('home') }}">Inicio</a></li>
					<li><a class="@if(Route::currentRouteName()=='quienesSomos') active @endif" href="{{ route('quienesSomos') }}">Quienes somos</a></li>
					<li><a class="@if(Request::is('proyectos*')) active @endif" href="{{ route('proyectos') }}">Proyectos </a></li>
					<li><a class="" href="https://quatroconcept.com.mx/inmobiliaria/">Inmobiliaria</a></li>
					<li><a class="@if(Route::currentRouteName()=='contacto') active @endif" href="{{ route('contacto') }}">Contacto</a></li>
				</ul>

				

			</div>
		</nav>
		<!-- <nav id="nav-route">
			<ul id="current-route">
				<li><a href="{{ route('home') }}">Home</a> /</li>
				@yield('navigation-menu')
			</ul>
		</nav> -->
		@yield('body')
		
		<div id="interested-container">
            <h2>Cotiza con nosotros</h2>
            <p>Habla con un asesor</p>
            <a href="{{ route('contacto') }}"><img id="write-us-img" src="{{ asset('img/botones/escribenos.png') }}"></a>
            <div id="interested-shadow"></div>
        </div>
		<footer>
			<ul class="main-menu">
				<li>©Copyright QUATRO CONCEPT {{ date("Y") }}</li>
				<li><a href="{{ route('privacidad') }}">Política de privacidad</a></li>
                                <li><a href="https://cid.mx" title="Agencia de Diseño">CID</a></li>
			</ul>
			<ul class="social-menu">
				<li><a href="https://www.facebook.com/QuatroConcept/"><img src="{{ asset('svg/face-logo.svg') }}"></a></li>
				<li><a href="https://www.instagram.com/quatroconcept/"><img src="{{ asset('svg/t-logo.svg') }}"></a></li>
			</ul>
		</footer>


		<div class="btn-whatsapp">
			<a href="https://api.whatsapp.com/send?phone=5213312895824" target="_blank">
				<img src="{{asset('img/whatsapp-button.png')}}">
			</a>
		</div>

		</dvi>
	</body>
</html>