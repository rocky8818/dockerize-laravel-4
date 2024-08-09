@extends('admin.plantilla.index')
@section('titulo') Inmuebles @endsection
@section('body')
    <div class="container">
    	<h2>Agregar Inmueble</h2>
		<form action="{{route('inmueble.store')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<!--titulo-->
			<div class="form-group">
		    	<label for="titulo">Titulo</label>
		    	<input type="text" class="form-control" id="titulo" placeholder="Bonita casa en...." name="titulo" required>
		  	</div>
		  	<!--tipo-->
		  	<div class="form-group">
			  	<div class="row">
			  		<div class="col-md-6">
			  			<label for="tipo">Tipo</label>
					    <select class="form-control" id="tipo" name="tipo">
<!-- 						  <option value="0">Departamento</option> -->
						  <option value="1">Terreno</option>
						  <option value="2">Casa</option>
<!-- 						  <option value="3">Oficina</option>
						  <option value="4">Otro</option> -->
						</select>
			  		</div>
			  		<div class="col-md-6">
			  			<label for="categoria">Categoria</label>
					    <select class="form-control" id="categoria" name="categoria">
						  <option value="0">Venta</option>
						</select>
			  		</div>
			  	</div>
		  	</div>
		  	<!--direccion-->
		  	<div class="form-group">
		  		<label for="direccion">Direccion</label>
		    	<input type="text" class="form-control" id="direccion" placeholder="Av.Acueducto...." name="direccion" required>
		  	</div>
		  	<!--cp y estado-->
		  	<div class="form-group">
		  		<div class="row">
		  			<div class="col-md-6">
		  				<label for="cp">C.P.</label>
		    			<input type="text" class="form-control" id="cp" placeholder="44950.." name="cp" required>
		  			</div>
		  			<div class="col-md-6">
		  				<label for="estado">Estado</label>
					    <select class="form-control" id="estado" name="estado">
						  <option value="Jalisco">Jalisco</option>
						</select>
		  			</div>
		  		</div>
		  	</div>
		  	<!--ciudad-->
		  	<div class="form-group">
		  		<label for="ciudad">Ciudad</label>
			    <select class="form-control" id="ciudad" name="ciudad">
			    	<option value="Guadalajara">Guadalajara</option>
			    	<option value="Zapopan">Zapopan</option>
			    	<option value="Tlaquepaque">Tlaquepaque</option>
					<option value="Tonalá">Tonalá</option>
					<option disabled>--------------------------------</option>
					<option value="Acatlán de Juárez">Acatlán de Juárez</option>
					<option value="Ahualulco de Mercado">Ahualulco de Mercado</option>
					<option value="Ajijic">Ajijic</option>
					<option value="Ameca">Ameca</option>
					<option value="Arandas">Arandas</option>
					<option value="Atotonilco el Alto">Atotonilco el Alto</option>
					<option value="Autlán de Navarro">Autlán de Navarro</option>
					<option value="Chapala">Chapala</option>
					<option value="Cihuatlán">Cihuatlán</option>
					<option value="Ciudad Guzmán">Ciudad Guzmán</option>
					<option value="Cocula">Cocula</option>
					<option value="Colotlán">Colotlán</option>
					<option value="El Grullo">El Grullo</option>
					<option value="El Quince">El Quince</option>
					<option value="Etzatlán">Etzatlán</option>
					<option value="Huejuquilla el Alto">Huejuquilla el Alto</option>
					<option value="Jalostotitlán">Jalostotitlán</option>
					<option value="Jamay">Jamay</option>
					<option value="Jocotepec">Jocotepec</option>
					<option value="La Barca">La Barca</option>
					<option value="Lagos de Moreno">Lagos de Moreno</option>
					<option value="La Resolana">La Resolana</option>
					<option value="Las Pintitas">Las Pintitas</option>
					<option value="Magdalena">Magdalena</option>
					<option value="Ocotlán">Ocotlán</option>
					<option value="Poncitlán">Poncitlán</option>
					<option value="Puerto Vallarta">Puerto Vallarta</option>
					<option value="San Diego de Alejandría">San Diego de Alejandría</option>
					<option value="San Ignacio Cerro Gordo">San Ignacio Cerro Gordo</option>
					<option value="San José el Verde">San José el Verde</option>
					<option value="San Juan de los Lagos">San Juan de los Lagos</option>
					<option value="San Julián">San Julián</option>
					<option value="San Miguel el Alto">San Miguel el Alto</option>
					<option value="Sayula">Sayula</option>
					<option value="Tala">Tala</option>
					<option value="Talpa de Allende">Talpa de Allende</option>
					<option value="Tamazula de Gordiano">Tamazula de Gordiano</option>
					<option value="Tecalitlán">Tecalitlán</option>
					<option value="Teocaltiche">Teocaltiche</option>
					<option value="Tepatitlán de Morelos">Tepatitlán de Morelos</option>
					<option value="Tequila">Tequila</option>
					<option value="Tlajomulco de Zúñiga">Tlajomulco de Zúñiga</option>
					<option value="Tototlán">Tototlán</option>
					<option value="Tuxpan">Tuxpan</option>
					<option value="Unión de San Antonio">Unión de San Antonio</option>
					<option value="Valle de Guadalupe">Valle de Guadalupe</option>
					<option value="Villa Corona">Villa Corona</option>
					<option value="Villa Hidalgo">Villa Hidalgo</option>
					<option value="Yahualica de González Gallo">Yahualica de González Gallo</option>
					<option value="Zacoalco de Torres">Zacoalco de Torres</option>
					<option value="Zapotiltic">Zapotiltic</option>
				</select>
		  	</div>
		  	<!--Colonia-->
		  	<div class="form-group">
		  		<label for="colonia">Colonia</label>
		    	<input type="text" class="form-control" id="colonia" placeholder="44950.." name="colonia" required>
		  	</div>
		  	<!--mapa-->
		  	<div>
		  		<div id="map"></div>
				<input type="hidden" id="latitud" name="latitud" required/>
				<input type="hidden" id="longitud" name="longitud" required/>
		  	</div>
		  	<!--cuartos metros-->
		  	<div class="form-group">
		  		<div class="row">
		  			<div class="col-md-6">
		  				<label for="cuartos">Metros de construcción</label>
		    			<input type="text" class="form-control" id="cuartos" placeholder="Eje. 3" name="cuartos" required>
		  			</div>
		  			<div class="col-md-6">
		  				<label for="metros">Metros de terreno</label>
		    			<input type="text" class="form-control" id="metros" placeholder="Eje. 300" name="metros" required>
		  			</div>
		  		</div>
		  	</div>
		  	<!--Descripcion-->
		  	<div class="form-group">
		  		<textarea name="descripcion" id="editor"></textarea>
		  	</div>
		  	<!--IMG portada-->
		  	<div class="form-group">
		  		<div class="row">
		  			<div class="col-md-6">
		  				<label for="exampleInputFile">Imagen de Portada</label>
				    	<input type="file" id="img" name="img" class="btn btn-viventia" required>
				    	<p class="help-block">Selecciona la imagen de portada</p>
		  			</div>
		  			<div class="col-md-6">
		  				<label for="portada">Estara en Inicio?</label>
					    <select class="form-control" id="portada" name="portada">
							<option value="0">No</option>
							<option value="1">Si</option>
						</select>
		  			</div>
		  		</div>
		  	</div>
		  	<!--precio-->
		  	<div class="form-group">
		  		<label for="precio">Precio $</label>
		    	<input type="text" class="form-control" id="precio" name="precio" maxlength="11">
		  	</div>
		  	<button type="submit" class="btn btn-viventia  btn-lg btn-block">Subir inmueble</button>
		</form>
    </div>
@endsection
@section('js')
	<script src="{{asset('editor/ckeditor.js')}}"></script>
	<script>
        CKEDITOR.replace( 'editor' );
    </script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPHakpNUE0Th_CZ-xZZDnkJLyNKZHdw80&callback=initMap"
    async defer></script>
	<script src="{{asset('js/mapa.js')}}"></script>
@endsection
