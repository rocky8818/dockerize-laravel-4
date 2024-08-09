@extends('master')
@section('title') {{$inmueble->titulo}} | Quatro Concept @endsection
@section('head')
	<meta property="og:url"                content="{{url()->current()}}" />
	<meta property="og:type"               content="article" />
	<meta property="og:title"              content="{{$inmueble->titulo}}" />
	<meta property="og:description"        content="{!!html_entity_decode($inmueble->descripcion)!!}" />
	<meta property="og:image"              content="{{asset('img/upimg')}}/@if($inmueble->getHayFoto()){{$inmueble->getFoto()->nombre}} @else()nofoto.jpg @endif()" />
	<style type="text/css">
		.oro {
		    color: #0e8c2b!important;
		}
	</style>
@endsection
@section('body')
	<div class="container-fluid">
	    <div><a href="{{route('index')}}" class="btn btn-viventia btn-lg"><i class="fa fa-chevron-left" aria-hidden="true"> Atras</i></a></div>
		<h1 class="project-title">{{$inmueble->titulo}}</h1>
	</div>
	<div class="">

		<div class="col-md-6">
			<div class="carousel slide article-slide" id="article-photo-carousel">
			  	<!-- Wrapper for slides -->
				<div class="carousel-inner cont-slider">
				    @foreach($inmueble->fotos as $id => $foto)
				    <div class="item @if($id==0) active @endif">
				      <img alt="{{$id}}" title="{{$id}}" src="{{asset('img/upimg')}}/{{$foto->nombre}}">
				    </div>
				    @endforeach()
			  </div>
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			     @foreach($inmueble->fotos as $id => $foto)
					<li class="@if($id==0) active @endif"  data-slide-to="{{$id}}" data-target="#article-photo-carousel">
				      <div style="float: left;height: 54px;left: 0;width: 100px; background-image: url({{asset('img/upimg')}}/{{$foto->nombre}});background-size: cover;background-position: center;"></div>
				    </li>
			     @endforeach()
			  </ol>
			</div>
		</div>
		<div class="col-md-6 ob white">
			<h2 class="oro">{{$inmueble->getTipo()}} en {{$inmueble->getCategoria()}}</h2>
			<hr>
			<div class="clearfix"></div>
			<h6 class="oro">Direccion:</h6>
			<p>{{$inmueble->direccion}} {{$inmueble->cp}} {{$inmueble->colonia}} {{$inmueble->estado}} </p>
			<h6 class="oro">Mapa:</h6>
			<div id="map" style="width: 100%;height: 358px;"></div>
			<hr>
			<h6 class="oro">Descripcion</h6>
			<div>{!!html_entity_decode($inmueble->descripcion)!!}</div>
			<hr>
			<h2>TELÉFONOS</h2>
			<h3 class="oro text-center"><i class="fa fa-phone-square" aria-hidden="true"></i> (33) 3396887170</h3>
			<h3 class="oro text-center"><i class="fa fa-phone-square" aria-hidden="true"></i> (044 3312895824</h3>
			<hr>
			<a href="/contacto" class="btn btn-viventia btn-lg btn-block">Contacto</a>
			<hr>
		</div>
	</div>
@endsection

@section('js')
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPHakpNUE0Th_CZ-xZZDnkJLyNKZHdw80&callback=initMap" async defer></script>
	<script>

    	function initMap() {

	        var myLatLng = {lat: {{$inmueble->latitud}}, lng: {{$inmueble->longitud}}};

	        var map = new google.maps.Map(document.getElementById('map'), {
	          zoom: 15,
	          center: myLatLng
	        });

	        var marker = new google.maps.Marker({
	          position: myLatLng,
	          map: map,
	          title: '{{$inmueble->direccion}}'
	        });
      	}
    </script>
	<script>
		$('.carousel').carousel({
		  interval: false
		});
	</script>

@endsection