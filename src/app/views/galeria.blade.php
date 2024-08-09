@extends('master')
@section('title', 'Galeria 4QUATRO')

@section('head')
    <style>
        #img-container {
            text-align: center;
            width: 100%;
        }

        #img-container img {
            max-width: 100%;
        }

        .ti {
            font-size: 2em;
            color: #fff;
            cursor: pointer;
        }

        .vcenter {
            display: inline-block;
            vertical-align: middle;
            float: none;
        }

        .container-fluid a {
            text-decoration: none;
        }
    </style>
@stop

@section('navigation-menu')
    <li><a href="{{ route('proyectos') }}">Proyectos</a> / </li>
    <li><a href="../">{{ $name }}</a> /</li>
    <li class="active">Galeria</li>
@stop

@section('body')
    <div class="container-fluid" style="clear: both;">
        <div class="row ob" style="vertical-align: middle;">
            <div class="col-sm-1 vcenter visible-md-inline-block visible-lg-inline-block">
                @if($file>1)
                    <a href="{{ $file-1 }}"><span class="ti ti-angle-left"></span></a>
                @endif
            </div><!--
            --><div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 vcenter">
                <div id="img-container">
                    <img src="{{ asset("img/galeria/$oName/0$file.jpg") }}">
                </div>
            </div><!--
            --><div class="col-sm-1 vcenter visible-md-inline-block visible-lg-inline-block">
                @if($file<8)
                    <a href="{{ $file+1 }}"><span class="ti ti-angle-right"></span></a>
                @endif
            </div>
        </div>
    </div>
@stop