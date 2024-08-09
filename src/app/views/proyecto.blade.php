@extends('master')
@section('title', 'Proyecto '.$name.' 4QUATRO')

@section('head')
    {{ HTML::style('css/proyecto.css') }}
    {{ HTML::script('js/proyecto.js') }}
@stop

@section('navigation-menu')
    <li><a href="{{ route('proyectos') }}">Proyectos</a> / </li>
    <li class="active">{{ $name }}</li>
@stop

@section('body')
    <div class="container-fluid" style="clear: both;">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-xs-6" style="overflow: hidden;">
                        <h1 class="project-title">{{ $name }}</h1>
                        <ul class="floors">
                            <?php $i=0; ?>
                            @foreach(Config::get('floors.'.$oName) as $floor => $image)
                                <li class="@if($i==0)active @endif" data-floor="{{ $floor }}">{{ $floor }}</li>
                                <?php $i++; ?>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-xs-6">
                        <?php $i=0; ?>
                        @foreach(Config::get('floors.'.$oName) as $floor => $image)
                            <img id="floor-{{ $floor }}" class="floor-image @if($i>0)hidden @endif" src="{{ asset('img/floors/'.$oName.'/'.$image) }}">
                            <?php $i++; ?>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6 ob">
                <h4 style="margin-top:0.5em;">Condominio con vigilancia</h4>
                <h4>Terreno 144.05m2</h4>
                <h4 style="margin-bottom:1em;">Construcción 156m2</h4>
                <ul class="first-char">
                    @for($i=0; $i<6; $i++)
                        <li>{{ Config::get('characteristics.'.$oName)[$i] }}</li>
                    @endfor
                </ul>
                <ul class="last-char">
                    @for($i=6; $i<count(Config::get('characteristics.'.$oName)); $i++)
                        <li>{{ Config::get('characteristics.'.$oName)[$i] }}</li>
                    @endfor
                </ul>
                <div style="clear: both;"></div>
                <h5>ACABADOS</h5>
                <ul class="finishes">
                    @foreach(Config::get('finishes.'.$oName) as $characteristic)
                        <li>{{ $characteristic }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row" id="images-row">
            <div class="col-sm-6 col-md-3 no-padding no-margin">
                <div class="row no-padding no-margin">
                    <div class="col-sm-6 no-padding no-margin">
                        <a href="{{ $oName }}/galeria/1"><img src="{{ asset('img/galeria/'.$oName.'/01.jpg') }}"></a>
                    </div>
                    <div class="col-sm-6 no-padding no-margin">
                        <a href="{{ $oName }}/galeria/2"><img src="{{ asset('img/galeria/'.$oName.'/02.jpg') }}"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 no-padding no-margin">
                <div class="row no-padding no-margin">
                    <div class="col-sm-6 no-margin no-padding">
                        <a href="{{ $oName }}/galeria/3"><img src="{{ asset('img/galeria/'.$oName.'/03.jpg') }}"></a>
                    </div>
                    <div class="col-sm-6 no-margin no-padding">
                        <a href="{{ $oName }}/galeria/4"><img src="{{ asset('img/galeria/'.$oName.'/04.jpg') }}"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 no-margin no-padding">
                <div class="row no-padding no-margin">
                    <div class="col-sm-6 no-margin no-padding">
                        <a href="{{ $oName }}/galeria/5"><img src="{{ asset('img/galeria/'.$oName.'/05.jpg') }}"></a>
                    </div>
                    <div class="col-sm-6 no-margin no-padding">
                        <a href="{{ $oName }}/galeria/6"><img src="{{ asset('img/galeria/'.$oName.'/06.jpg') }}"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 no-margin no-padding">
                <div class="row no-padding no-margin">
                    <div class="col-sm-6 no-margin no-padding">
                        <a href="{{ $oName }}/galeria/7"><img src="{{ asset('img/galeria/'.$oName.'/07.jpg') }}"></a>
                    </div>
                    <div class="col-sm-6 no-margin no-padding">
                        <a href="{{ $oName }}/galeria/8"><img src="{{ asset('img/galeria/'.$oName.'/08.jpg') }}"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop