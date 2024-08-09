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
        
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Poppins:400,300,700,600,500')}}">
		<link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
		<link rel="stylesheet" href="{{asset('css/styles.css')}}">
		<style type="text/css">
			.verde{
				background-color: #4ba82c;
				padding: 40px 65px;
			}
			.verde h2{
				color: #ffffff;
				text-align: center;
			}
			.forma{
				padding: 0 50px;
			}
			#ver{
				display: none;
			}
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
		</style>
		@yield('head')
	</head>
	<body>
		<nav id="main-menu-container">
			<img id="main-menu-logo" src="{{ asset('svg/logotipo.svg') }}">
			<div id="menu-dots-container" onclick="$('#mobile-nav').removeClass('hidden')"><img id="menu-dots" src="{{ asset('svg/brown-dots.svg') }}"></div>
			<div id="mobile-nav" class="hidden">
				<span id="close-modal-main-menu" onclick="$('#mobile-nav').addClass('hidden')"></span>
				<ul id="main-menu">
					<li><a href="/">Inicio</a></li>
					<li><a href="/quienes-somos">Quienes somos</a></li>
					<li><a href="/proyectos">Proyectos</a></li>
					<li><a class="active" href="{{route('index')}}">Inmobiliaria</a></li>
					<li><a href="/contacto">Contacto</a></li>
				</ul>
			</div>
		</nav>
		<!-- <nav id="nav-route">
			<ul id="current-route">
				<li><a href="#">Inmobiliaria</a> /</li>
				@yield('navigation-menu','Home')
			</ul>
		</nav> -->
		<div class="clearfix"></div>
		<div class="buscador">
			<div class="banner-title">
                <h1>¿DONDE ESTAS BUSCANDO?</h1>
            </div>
			<div class="container">
			    <div class="row">
			    <form action="{{route('index.search')}}" method="get">
			            <div class="col-md-4"></div>
				    <div class="col-md-4">
						<div class="input-group">
				            <div class="input-group-btn search-panel">
				                <button type="button" class="btn btn-viventia  dropdown-toggle" data-toggle="dropdown">
				                	<span id="search_concept">Terreno/Casa</span> <span class="caret"></span>
				                </button>
			                    <ul class="dropdown-menu" role="menu">
			                      <li><a href="#Terreno">Terreno</a></li>
			                      <li><a href="#Casa">Casa</a></li>
			                    </ul>
			                    <!-- <select name="tipo" id="" class="btn dropdown-toggle" data-toggle="dropdown">
			                    	<option value="value1">Value 1</option> 
			  								<option value="value2" selected>Value 2</option>
			                    </select> -->
				            </div>
				                
				            <input type="hidden" name="search_param" value="all" id="search_param">         
				            <select id="" class="form-control-viventia" name="lista">
				            	<option value="all">Todas las cuidades</option>
				                @foreach($lista as $i)
			                    	<option value="{{$i}}">{{$i}}</option>
			                    @endforeach()
			  				</select>
				            <span class="input-group-btn">
				            	<button class="btn btn-viventia " type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				            </span>  
				        </div>
				        </div>
			        </form>
				</div>
			</div>
		</div>

		@yield('body')

		<footer>
			<ul class="main-menu">
				<li>©Copyright 4Qutro Corporativo {{ date("Y") }}</li>
				<li><a href="#">Política de privacidad</a></li>
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
		<script src="{{asset('js/jquery-2.2.0.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/mp.mansory.js')}}"></script>
		<script>
			$(document).ready(function(e){
				//$("#casas").mpmansory();
			    $('.search-panel .dropdown-menu').find('a').click(function(e) {
					e.preventDefault();
					var param = $(this).attr("href").replace("#","");
					var concept = $(this).text();
					$('.search-panel span#search_concept').text(concept);
					$('.input-group #search_param').val(param);
				});
			});

			$('.toggle-tickets').click(function() {
				  $tickets = $(this).parent().siblings('.collapse');
				  if ($tickets.hasClass('in')) {
				    $tickets.collapse('hide');
				    $(this).html('Ver Galeria');
				    $(this).closest('.ticket-card').removeClass('active');
				    
				  } else {
				    $tickets.collapse('show');
				    $(this).html('Cerrar Galeria');
				    $(this).closest('.ticket-card').addClass('active');
				  }
			});
			function run(){
					
				if($("#ver").is(":hidden")){
					$("#btnin").html("VER MENOS <i class='fa fa-minus-circle' aria-hidden='true'>");
                	$("#ver").slideDown("slow");
                	
		    	}else{
		    		$("#btnin").html("VER MÁS <i class='fa fa-plus-circle' aria-hidden='true'>");
		    		$("#ver").slideUp("slow");
				}
			}
		</script>
		@yield('js')
	</body>
</html>