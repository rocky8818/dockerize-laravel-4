@extends('master')
@section('title', 'Contacto Quatro Concept')

@section('head')
    {{ HTML::style('css/contacto.css') }}
    {{ HTML::style('css/font-awesome.min.css') }}
@stop

@section('navigation-menu')
    <li class="active">Contacto</li>
@stop

@section('body')
    <div class="container-fluid" style="clear: both;">
        <div class="row">
            <div class="col-lg-12 hidden-xs">
                <div class="row ob" style="padding: 1em 0;">
                    <div class="col-sm-3">
                        <h3 class="phone-title">TELÉFONOS</h3>
                    </div>
                    <div class="col-sm-6 phone-col">
                        <a href="tel:3396887170">(33) 3396887170 <i class="fa fa-phone"></i></a>
                    </div>
                   
                    <div class="col-sm-3 phone-col">
                        <a href="tel:3312895824">044 3312895824 <i class="fa fa-phone"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 no-padding">
                <div id="contact-background"></div>
                <div id="contact-content">
                    <h1>Agenda una cita</h1>
                    @if(Session::has('success'))
                        <div class="alert-success">
                            <p>Mensaje enviado correctamente</p>
                        </div>
                    @else
                        <p>Envíanos un mensaje y un asesor<br>se pondrá en contacto contigo</p>
                    @endif
                    <form action="{{ route('sendEmail') }}" method="POST">
                        <input name="nombre" placeholder="nombre*" required>
                        <input type="email" name="correo" placeholder="correo*" required>
                        <input name="telefono" placeholder="teléfono">
                        <input name="horario" placeholder="horario de atención">
                        <textarea name="mensaje" rows="4" placeholder="mensaje" required></textarea>
                        <button><img src="{{ asset('img/botones/enviar.png') }}" alt="Enviar"></button>
                    </form>
                </div>
                <div style="height: 500px;"></div>
            </div>
            <div class="col-xs-12 visible-xs-block phones-xs">
                <h3 class="phone-title phone-title-xs">TELÉFONOS</h3>
                <a href="tel:3396887170">(33) 3396887170 <i class="fa fa-phone"></i></a>
                 <a href="tel:3312895824">044 3312895824 <i class="fa fa-phone"></i></a>
            </div>
            <div class="col-md-6 no-padding clear-small">
                <div id="map"></div>
            </div>
        </div>
    </div>
    <script>

        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 20.747369, lng:-103.391826},
                zoom: 16,
                scrollwheel:  false,
                draggable: false
            });

            var beachMarker = new google.maps.Marker({
                position: {lat: 20.747369, lng:-103.391826},
                map: map,
                icon: "img/marcador.png"
            });
        }
    </script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFmhYUfbS6ZvzD3KA5dfFMgVO0bumkaKY&callback=initMap"
    async defer></script>
@stop