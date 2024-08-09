@extends('admin.plantilla.index')
@section('titulo') Inmuebles @endsection
@section('body')
    <div class="container">
    	<h2>Agregar fotos</h2>
		<form action="{{route('inmueble.upimgpost',$inmueble)}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
		  	<!--IMG portada-->
		  	<div class="form-group">
		  		<div class="row">
		  			<div class="col-md-12">
		  				<label for="exampleInputFile">Imagen de Portada</label>
				    	<input type="file" id="img" name="img[]" class="btn btn-viventia" multiple required>
				    	<p class="help-block">Seleccionar Fotos para lagaleria</p>
		  			</div>
		  		</div>
		  	</div>
		  	<div class="form-group">
		  		<button type="submit" class="btn btn-viventia  btn-lg btn-block">Subir Fotos de la galeria</button>
		  	</div>
		  	<hr>
		  	<div class="row">
		  		<div class="col-md-3">
		  			<p>Portada</p>
		  			<img src="{{asset('img/upimg')}}/@if($inmueble->getHayFoto()){{$inmueble->getFoto()->nombre}} @else()nofoto.jpg @endif()" class="img-responsive">
		  		</div>
		  		@foreach($inmueble->getFotos as $foto)
			  		<div class="col-md-3">
			  			<a href="{{route('inmueble.delelteimagen',$foto->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
			  			<img src="{{asset('img/upimg')}}/{{$foto->nombre}}" class="img-responsive">
			  		</div>
		  		@endforeach()
		  	</div>
			<hr>
			<a href="{{route('inmueble.index')}}" class="btn btn-viventia  btn-lg btn-block">Terminar</a>
		</form>
	</div>
@endsection
@section('js')
@endsection
