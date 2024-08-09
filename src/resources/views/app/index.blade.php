@extends('master')
@section('title') Inmuebles | Quatro Concept @endsection
@section('body')
	<!-- The Modal -->
	<div id="myModal" class="modal">
	  <span class="close">&times;</span>
	  <img class="modal-content" id="img01">
	  <div id="caption"></div>
	</div>
	<!-- End Modal -->

	<!-- <div class="verde">
		<div class="row">
			<div class="container forma">
				<img src="{{asset('img/4.gif')}}" class="center-block">
				<h2>Bienvenido a QUATRO CONCEPT Sección Inmobiliaria. </h2>
				<p>Encuentra tu nueva casa aquí. Ofrecemos un servicio personalizado y de calidad para atenderte en todas tus necesidades sobre el mundo inmobiliario. Si necesitas asistencia o tienes preguntas, siéntete libre de contactarnos. Estaremos dispuestos a ayudarte.</p>
				<h2>SERVICIOS: </h2>

				<p>
					Venta y Promoción de Propiedades, Avaluos, Asesoría Fiscal, Tramites de créditos, Vende tu propiedad aquí, Agilizamos el proceso de compra venta
				</p>
				<ul>
					<li>Venta y Promoción de Propiedades. </li>
					<li>Avaluos</li>
					<li>Asesoría Fiscal</li>
					<li>Tramites de créditos.</li>
					<li>Vende tu propiedad aquí.</li>
					<li>Agilizamos el proceso de compra venta.</li>
				</ul> 

				<div id="ver">
					<div class="col-md-6">
						<img src="{{asset('img/inm.svg')}}" class="img-responsive" alt="">
					</div>

					<div class="col-md-6">
						<h2>SERVICIO QUATRO CONCEPT PREMIUM</h2>
						<p>SERVICIO QUATRO CONCEPT PREMIUM, para tu comodidad, acercamos nuestras oficinas a tu trabajo o negocio, No te molestes en hablar con miles de asesores del otro lado del teléfono en busca de tu patrimonio o inversión, además de dejarle tus datos a personas que ni conoces, o arriesgarte a una cita en horarios inadecuados, además de en ocasiones no contar con el tiempo suficiente, déjanos ese trabajo a Nosotros, nuestro equipo de profesionales te ayudará en esa difícil tarea.</p>
						
						<img src="{{asset('img/img.jpg')}}" class="img-responsive">
					</div>
					
				</div>
				<div class="clearfix"></div>
				<a onclick="run();" class="pull-right" style="color: #fff;font-size: 1.2em;" id="btnin">LEER MÁS <i class="fa fa-plus-circle" aria-hidden="true"></i></a> 
			</div>
		</div>
		
	</div> -->
	<div class="container">
		<h2 class="blanco">{{$titulo}}</h2>
		<div>
			<div>
				<div class="row" id="casas">
					@foreach($inmuebles as $inmueble)
						<!-- inmueble -->
				        <div class="col-md-4">
				          <div class="ticket-card">
				            <div class="cover">
				              <img src="{{asset('img/upimg')}}/{{$inmueble->fotos[0]->nombre}}" alt="" />
				              <div class="info">
				                <div class="going">
				                	Construcción {{$inmueble->cuartos}}
				                </div>
				                <div class="tickets-left">
				                	Terreno{{$inmueble->metros}} mts
				                </div>
				              </div>
				            </div>
				            <div class="body"> 
				              <div class="artist">
				              	<h6 class="info"></h6>
				            	<h4 class="name">{{$inmueble->titulo}}</h4>
				              </div>
				              <div class="clearfix"></div>
				              <div class="price">
				                <div class="from">Precio</div>
				                <div class="value">
				                  <b>$</b>{{number_format($inmueble->precio,2)}}
				                </div>
				              </div>
				              
				              <div class="clearfix"></div>
				              <div class="info">
				                <p class="location">
				                  <i class="fa fa-map-marker"></i> {{$inmueble->colonia}}
				                </p>
				                <p class="date">
				                  <i class="fa fa-calendar"></i> {{$inmueble->updated_at->format('d/m/Y')}}
				                </p>
				              </div>
				              <div><a href="{{route('index.inmueble',$inmueble)}}" class="btn btn-viventia btn-lg">Ver más <i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
				              <div class="clearfix"></div>
				            </div>
				            <div class="collapse">
				            	<div class="row galeria">
					              
				              	</div>
				            </div>

				          </div>
				        </div>
				        @if($loop->iteration % 3 == 0)
				        	<div class="clearfix"></div>
				        @endif()
			        @endforeach()
			    </div>
			    <div class="clearfix"></div>
			    <div>{{$inmuebles->render()}}</div>
			</div>
		</div>
	</div>
@endsection
@section('js')
	<script src="{{asset('js/mp.mansory.js')}}"></script>
	<script>
		$(".galeria").mpmansory({
		  childrenClass: '',
		  breakpoints: {
		      lg: 6,
		      md: 6,
		      sm: 12,
		      xs: 12
		  },
		  onload: function ( items ) {
		    return true;
		  }
		});
	</script>
	<script>
	var modal = document.getElementById('myModal');
	function abrir(id){
	// Get the image and insert it inside the modal - use its "alt" text as a caption
		var img = document.getElementById("img"+id);
		var modalImg = document.getElementById("img01");
		var captionText = document.getElementById("caption");
		
		    modal.style.display = "block";
		    modalImg.src = img.src;
		    captionText.innerHTML = img.alt;
		
	}

	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() { 
	    modal.style.display = "none";
	}
	modal.onclick = function() { 
	    modal.style.display = "none";
	}
</script>
@endsection  