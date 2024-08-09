<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('titulo') | Administracion Viventia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Poppins:400,300,700,600,500')}}">
	<link rel="stylesheet" href="{{asset('css/admin.css')}}">
</head>
<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">
	      	<img src="{{asset('svg/logotipo.svg')}}" style="height: 28px;">
	      </a>
	    </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="{{route('inmueble.index')}}">Inmuebles <span class="sr-only">(current)</span></a></li>
	        <li><a href="{{route('inmueble.create')}}">Agregar</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li>
	            	<a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
	            </li>
	            <li role="separator" class="divider"></li>
	            <li><a href="{{ route('register') }}">Registrar admin</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
	@yield('body')
	<footer>
		QuatroConcept
	</footer>
<script src="{{asset('js/jquery-2.2.0.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@yield('js')
</body>
</html>