@extends('master')
@section('title', 'Proyectos Especiales')

@section('head')
  {{ HTML::style('css/banner.css') }}
  {{ HTML::style('css/proyectos.css') }}
  <style>
    .galery{
        padding: 2rem 0;
    }
    .banco{padding:20px 15px;}
    .hide-bullets {
      list-style:none;
      margin-left: -40px;
      margin-top:20px;
    }
    .thumbnail {padding: 0;}
    .carousel-inner>.item>img, .carousel-inner>.item>a>img {width: 100%;}
    .espacio{padding: 60px 90px;}
    p{font-size: 1.1em;}

    .thumbnail {
      display: block;
      padding: 4px;
      margin-bottom: 20px;
      line-height: 1.42857143;
      background-color: #171717;
      border: 1px solid #171717;
      border-radius: 4px;
      -webkit-transition: border .2s ease-in-out;
      -o-transition: border .2s ease-in-out;
      transition: border .2s ease-in-out;
    }

    #presence-description-container {
      display: table;
      height: 310px;
      width: 100%;
      
      background-size: contain;
    }

    #presence-description-content {
      display: table-cell;
      width: 100%;
      height: 100%;
      padding: 0 3em;
    }

    #presence-description-content p {
      color: #4ba82c;
      margin: 3em;
      font-size: 1.3em;
      font-weight: bold;
      text-align: center;
    }

    @media (max-width: 400px) {
      #presence-description-content p {
        margin: 1.5em !important;
        font-size: 0.9em !important;
      }
    }

    #second-block-container {
      width: 100%;
      height: 310px;
      background: url('../img/valle-imperial.jpg') center no-repeat;
      background-size: cover;
    }
    .lista-inferior {
      list-style-image: url(img/lista.png);
      float: right;
      color: #fff;
      padding-right: 10px;
    }
    
    .lista-inferior-iz {
      list-style-image: url(img/lista.png);
      float: left;
      color: #fff;
      padding-left: 10px;
      font-size: 23px;
    }

    #links-container {
      height: 310px;
      width: 100%;
      display: table;
    }

    #links-content {
      height: 100%;
      width: 100%;
      display: table-cell;
      vertical-align: middle;
      text-align: center;
      padding: 0;
      margin: 0;
    }

    #links-content p {
      color: #fff;
      margin: 1em 0;
      font-size: 1.2em;
      padding: 0;
    }
    #links-content a {
      width: 100%;
      display: block;
    }
    #links-content a img{
      width: 54%;
    }
    
    .flex{
      margin-top: 2rem;
      background-color: #2e2e2e;
      display: flex;
      flex-direction: row;
      flex-wrap: nowrap;
      justify-content: space-around;
      align-items: stretch;
    }
    .flex .item{
      width: 100%;
      padding: 2em 1em;
      color: #fff;
      text-align: center;
    }
    
    .flex .item p, .flex .item h6{
      width: 100%;
      max-width: 400px;
      margin: auto;
      font-size: 1.2rem;
    }
    .flex .item h6{
      font-weight: 700;
    }
    .flex img{
      width: 100%;
      max-width: 350px;
      margin: auto;
    }
    .big-text{
      padding: 5em;
      text-align: center;
      font-size: 1.2rem;
      color: #fff;
    }
    .big-text .container p:last-child {margin-bottom: 0px;}
    .bg-green{background-color:#4ba82c;}
  </style>
@stop

@section('navigation-menu')
  <li class="active">Proyectos</li>
@stop

@section('body')
  <div id="banner-container">
    <div id="banner-content">
      <div class="banner-title">
          <h1>PROYECTOS PERSONALIZADOS</h1>
      </div>
      <div class="banner-shadow">
          <p>Lo que tú sueñas como tú lo sueñas</p>
      </div>
    </div>
  </div>
  <!--galeria-->
  <div class="container">
      <div id="main_area">
          <!-- Slider -->
          <div class="row galery">
              <div class="col-sm-6 visible-md visible-lg" id="slider-thumbs">
                  <!-- Bottom switcher of slider -->
                  <ul class="hide-bullets">
                      <li class="col-sm-3">
                          <a class="thumbnail" id="carousel-selector-0">
                              <img src="img/galeria/016a.jpg">
                          </a>
                      </li>

                      <li class="col-sm-3">
                          <a class="thumbnail" id="carousel-selector-1"><img src="img/galeria/001a.jpg"></a>
                      </li>

                      <li class="col-sm-3">
                          <a class="thumbnail" id="carousel-selector-2"><img src="img/galeria/002a.jpg"></a>
                      </li>

                      <li class="col-sm-3">
                          <a class="thumbnail" id="carousel-selector-3"><img src="img/galeria/003a.jpg"></a>
                      </li>

                      <li class="col-sm-3">
                          <a class="thumbnail" id="carousel-selector-4"><img src="img/galeria/004a.jpg"></a>
                      </li>

                      <li class="col-sm-3">
                          <a class="thumbnail" id="carousel-selector-5"><img src="img/galeria/005a.jpg"></a>
                      </li>
                      <li class="col-sm-3">
                          <a class="thumbnail" id="carousel-selector-6"><img src="img/galeria/006a.jpg"></a>
                      </li>

                      <li class="col-sm-3">
                          <a class="thumbnail" id="carousel-selector-7"><img src="img/galeria/007a.jpg"></a>
                      </li>

                      <li class="col-sm-3">
                          <a class="thumbnail" id="carousel-selector-8"><img src="img/galeria/008a.jpg"></a>
                      </li>

                      <li class="col-sm-3">
                          <a class="thumbnail" id="carousel-selector-9"><img src="img/galeria/009a.jpg"></a>
                      </li>
                      <li class="col-sm-3">
                          <a class="thumbnail" id="carousel-selector-10"><img src="img/galeria/010a.jpg"></a>
                      </li>

                      <li class="col-sm-3">
                          <a class="thumbnail" id="carousel-selector-11"><img src="img/galeria/011a.jpg"></a>
                      </li>

                      <li class="col-sm-3">
                          <a class="thumbnail" id="carousel-selector-12"><img src="img/galeria/012a.jpg"></a>
                      </li>

                      <li class="col-sm-3">
                          <a class="thumbnail" id="carousel-selector-13"><img src="img/galeria/013a.jpg"></a>
                      </li>
                      <li class="col-sm-3">
                          <a class="thumbnail" id="carousel-selector-14"><img src="img/galeria/014a.jpg"></a>
                      </li>

                      <li class="col-sm-3">
                          <a class="thumbnail" id="carousel-selector-15"><img src="img/galeria/015a.jpg"></a>
                      </li>
                  </ul>
              </div>
              <div class="col-sm-6">
                  <div id="slider">
                      <!-- Top part of the slider -->
                      <div class="row">
                          <div class="col-sm-12" id="carousel-bounding-box">
                              <div class="carousel slide" id="myCarousel">
                                  <!-- Carousel items -->
                                  <div class="carousel-inner">
                                      <div class="active item" data-slide-number="0">
                                          <img src="img/galeria/016.jpg"></div>

                                      <div class="item" data-slide-number="1">
                                          <img src="img/galeria/001.jpg"></div>

                                      <div class="item" data-slide-number="2">
                                          <img src="img/galeria/002.jpg"></div>

                                      <div class="item" data-slide-number="3">
                                          <img src="img/galeria/003.jpg"></div>

                                      <div class="item" data-slide-number="4">
                                          <img src="img/galeria/004.jpg"></div>

                                      <div class="item" data-slide-number="5">
                                          <img src="img/galeria/005.jpg"></div>
                                      
                                      <div class="item" data-slide-number="6">
                                          <img src="img/galeria/006.jpg"></div>
                                      
                                      <div class="item" data-slide-number="7">
                                          <img src="img/galeria/007.jpg"></div>
                                      
                                      <div class="item" data-slide-number="8">
                                          <img src="img/galeria/008.jpg"></div>
                                      
                                      <div class="item" data-slide-number="9">
                                          <img src="img/galeria/009.jpg"></div>
                                      
                                      <div class="item" data-slide-number="10">
                                          <img src="img/galeria/010.jpg"></div>
                                      
                                      <div class="item" data-slide-number="11">
                                          <img src="img/galeria/011.jpg"></div>
                                      
                                      <div class="item" data-slide-number="12">
                                          <img src="img/galeria/012.jpg"></div>

                                      <div class="item" data-slide-number="13">
                                          <img src="img/galeria/013.jpg"></div>

                                      <div class="item" data-slide-number="14">
                                          <img src="img/galeria/014.jpg"></div>

                                      <div class="item" data-slide-number="15">
                                          <img src="img/galeria/015.jpg"></div>
                                  </div>
                                  <!-- Carousel nav -->
                                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                      <span class="glyphicon glyphicon-chevron-left"></span>
                                  </a>
                                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                      <span class="glyphicon glyphicon-chevron-right"></span>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--/Slider-->
          </div>
      </div>
  </div>
  <!--end galeria-->

  <div class="container-fluid">
      <div class="row">
          <div class="col-sm-8 no-padding">
              <div id="presence-description-container">
                  <div id="presence-description-content">
                      <p>Diseñemos y construyamos juntos la casa de tus sueños.</p>
                      <p><samp class="color2"></samp></p>
                      
                      <ul class="lista-inferior-iz">
                          <li>¿YA CUENTAS CON TERRENO?</li>
                      </ul>
                      
                      
                      <ul class="lista-inferior">
                          <li>DISEÑAMOS A TU GUSTO </li>
                          <li>EN LA UBICACIÓN QUE ELIJAS</li>
                          <li>ACABADOS SEGÚN TÚ ESTILO DE VIDA</li>
                          <li>A CRÉDITO O DE CONTADO</li>
                      </ul>
                      
                  </div>
              </div>
          </div>
          <div class="col-sm-4 no-padding ">
              <div id="links-container">
                  <div id="links-content" >
                      <p>CASAS EN VENTA </p>
                      <a href="/inmobiliaria"><img src="{{ asset('img/botones/btn3.png') }}" alt="Ver proyectos"></a>
                      <div style="border-top: 1px solid #fff; width: 94%; display: block; margin: 1.8em auto;"></div>
                      <p>¿DONDE HEMOS CONSTRUIDO?</p>
                      <a href="{{ route('presencia') }}"><img src="{{ asset('img/botones/ver-presencia.png') }}" alt="Ver presencia"></a>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="" style="background-color: #171717">
      <div>
          <h2 style="text-align: center;">CONSTRUIREMOS TU CASA EN 3 PASOS</h2>
          <div>
              <div class="flex">
                <div class="item">
                  <img src="img/001.svg"  class="img-responsive" alt="">
                  <h6>CITA</h6>
                  <p>
                    Define un plan a tu medida.<br>
                    Construcción a crédito o contado.<br> 
                    En tu terreno o te ofrecemos opciones. 
                  </p>
                </div>
                <div class="item bg-green">
                  <img src="img/002.svg"  class="img-responsive" alt="">
                  <h6>DEFINE TU PROYECTO</h6>
                  <p>
                    Firma el acuerdo con Fecha de inicio y termino de obra garantizado.<br>
                    Precio fijo de principio a fin.
                  </p>
                </div>
                <div class="item">
                  <img src="img/003.svg"  class="img-responsive" alt="">
                  <h6>CONSTRUCCION & DISEÑO</h6>
                  <p>
                    De acuerdo a tus necesidades.<br>
                    Totalmente a tu gusto.<br>
                    Contamos con amplia gama de acabados.
                  </p>
                </div>
              </div>
          </div>
      </div>
  </div>

  <section>
    <div class="big-text bg-green">
      <div class="container">
        <h2>Elige experiencia</h2>
        <p>
          Para obtener resultados exitosos en la construcción de tu casa personalizada como tu la sueñas es vital elegir una constructora con experiencia, en QUATRO CONCEPT contamos con mas de 15 años de experiencia en la construcción de casas personalizadas diseños Modernos, contemporáneos, e innovadores en toda la Zona Metropoitana de Guadalajara.
        </p>
        <p>En QUATRO CONCEPT</p>
        <h5>Creamos espacios a tu medida</h5>
      </div>
    </div>
  </section>
  
  <secction>
    <img
        srcset="
        img/proyectos/footer_sm_.jpg 500w,
        img/proyectos/footer_md_.jpg 1400w
        "
        sizes="(max-width: 720px) 500px,
            1400px"
        src="src/assets/images/bg/que-es-codelytv.png"
        style="width: 100%;"
    />
  </secction>

  <script>
        jQuery(document).ready(function($) {
            $('#myCarousel').carousel({
                interval: 5000
            });

            //Handles the carousel thumbnails
            $('[id^=carousel-selector-]').click(function () {
                var id_selector = $(this).attr("id");
                try {
                  var id = /-(\d+)$/.exec(id_selector)[1];
                  console.log(id_selector, id);
                  jQuery('#myCarousel').carousel(parseInt(id));
                } catch (e) {
                  console.log('Regex failed!', e);
                }
          });
          // When the carousel slides, auto update the text
          $('#myCarousel').on('slid.bs.carousel', function (e) {
              var id = $('.item.active').data('slide-number');
              $('#carousel-text').html($('#slide-content-'+id).html());
          });
      });
  </script>
@stop