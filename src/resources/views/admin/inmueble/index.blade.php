@extends('admin.plantilla.index')
@section('titulo') Inmuebles @endsection
@section('body')
    <div class="container">
    	<h2>Inmuebles en la Web</h2>
    	<a href="{{route('inmueble.create')}}" class="btn btn-viventia">
    		<i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar
    	</a>
    	<table class="table table-hover">
    		<thead>
    			<tr>
    				<th>Foto</th>
    				<th>Nombre</th>
    				<th>Portada</th>
    				<th>Acciones</th>
    			</tr>
    		</thead>
            <tbody>
                @foreach($inmuebles as $inmueble)
                    <tr>
                        <td><img src="{{asset('img/upimg')}}/@if($inmueble->getHayFoto()){{$inmueble->getFoto()->nombre}} @else()nofoto.jpg @endif()" height="125"></td>
                        <td>{{$inmueble->titulo}}</td>
                        <td>@if($inmueble->portada == 1) Si @else() No @endif()</td>
                        <td>
                            <a href="{{route('inmueble.edit',$inmueble)}}" class="btn btn-default"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a href="{{route('inmueble.upimgpost',$inmueble)}}" class="btn btn-default"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            <form action="{{route('inmueble.destroy',$inmueble->id)}}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach()
            </tbody>
    	</table>
        <div class="clearfix"></div>
        <div>{{$inmuebles->render()}}</div>
    </div>
@endsection