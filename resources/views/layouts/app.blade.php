<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='Classification' content='Business'>
  <meta name='url' content='https://www.servirecarga.com'>
  <meta name="description" content="VENDER RECARGAS Servirecarga le presta los servicios de plataforma para vender recargas en Colombia, una empresa con mas de cinco años de experiencia y clientes al rededor de todo el pais.">
        <meta name="keywords" content="recargas, vender recargas, servirecargas, servirecarga, sistema de recargas para celular, recargas para celular colombia, distribuidor de recargas a todo operador, distribuidor de recargas virtuales, venta de recargas para negocio, proveedor de recargas, servicio de recargas para negocios, distribuidores de recargas, proveedor de recargas, recargas para negocio, sistema de recargas, recargas celular, proveedores de recargas para celular, como vender recargas, recarga de celulares para negocios">
	<title>Servirecarga - Recargas</title>
	<!-- Material Design fonts -->
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('css/app.css')}}" rel="stylesheet"> -->

</head>
<body>
<div id="mdb-preloader" class="flex-center">
    <div id="preloader-markup">
    </div>
</div>
@include('flash::message')
<!--Navbar-->
<nav class="navbar navbar-toggleable-md navbar-dark bg-primary fixed-top mb-50">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation" id="menumovil">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand m60" href="{{ asset('/') }}">
            <strong>SERVIRECARGA.COM</strong>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav1">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ asset('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-info" href="{{asset('/')}}#nuevo_cliente" >Nuevo cliente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ asset('/puntos_de_pago') }}">Puntos de pago</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('/')}}#preguntas_fre">Preguntas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('/')}}">Contacto</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link" href="{{asset('/plataforma')}}" target="_blank">Plataforma</a> --}}
                    <a class="nav-link" href="http://servirecarga.com/plataforma" target="_blank">Plataforma</a>
                </li>
        </div>
    </div>
</nav>


@yield('content')

<hr>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-lg-12">
            <h3 class="ta">Recargamos todos los operadores</h3>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-1 col-lg-1">
            <img src="{{ asset('img/logos_operadores/claro.png') }}" class="img-fluid">
        </div>
        <div class="col-xs-6 col-sm-6 col-md-1 col-lg-1">
            <img src="{{ asset('img/logos_operadores/movistar.png') }}" class="img-fluid">
        </div>
        <div class="col-xs-6 col-sm-6 col-md-1 col-lg-1">
            <img src="{{ asset('img/logos_operadores/tigo.png') }}" class="img-fluid">
        </div>
        <div class="col-xs-6 col-sm-6 col-md-1 col-lg-1">
            <img src="{{ asset('img/logos_operadores/uff.png') }}" class="img-fluid">
        </div>
        <div class="col-xs-6 col-sm-6 col-md-1 col-lg-1">
            <img src="{{ asset('img/logos_operadores/virgin.png') }}" class="img-fluid">
        </div>
        <div class="col-xs-6 col-sm-6 col-md-1 col-lg-1">
            <img src="{{ asset('img/logos_operadores/etb.png') }}" class="img-fluid">
        </div>
        <div class="col-xs-6 col-sm-6 col-md-1 col-lg-1">
            <img src="{{ asset('img/logos_operadores/une.png') }}" class="img-fluid">
        </div>
        <div class="col-xs-6 col-sm-6 col-md-1 col-lg-1">
            <img src="{{ asset('img/logos_operadores/direct_tv.png') }}" class="img-fluid">
        </div>
        <div class="col-xs-6 col-sm-6 col-md-1 col-lg-1">
            <img src="{{ asset('img/logos_operadores/exito_movil.png') }}" class="img-fluid">
        </div>
        <div class="col-xs-6 col-sm-6 col-md-1 col-lg-1">
            <img src="{{ asset('img/logos_operadores/avantel.png') }}" class="img-fluid">
        </div>
        <div class="col-xs-6 col-sm-6 col-md-1 col-lg-1">
            <img src="{{ asset('img/logos_operadores/paquetes_servirecarga.png') }}" class="img-fluid">
        </div>
        <div class="col-xs-6 col-sm-6 col-md-1 col-lg-1">
            <img src="{{ asset('img/logos_operadores/paquetes_servirecarga_minutos.png') }}" class="maxancho">
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title w-100" id="myModalLabel">Datos enviados.</h4>
            </div>
            <!--Body-->
            <div class="modal-body">
                <p>
                    Hemos recibido sus datos correctamente, nos comunicaremos con Usted a su correo o a su teléfono. Por favor estar pendiente.
                </p>
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>

<!-- fin modal  -->

<!--Footer-->
<footer class="page-footer blue center-on-small-only">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-md-6">
                <h5 class="title">SERVIRECARGA.COM</h5>
                <ul>
                    <li>Servicios electrónicos de alta calidad.</li>
                    <li>Horario de atención.</li>
                    <li>Lunes a viernes 8:00 am a 5:30 pm.</li>
                    <li>Teléfonos de contacto (2) 3724803 - 3103930123.</li>
                    <li>Cali Valle del Cauca.</li>
                    <li><a class="btn btn-info" href="{{asset('/')}}#nuevo_cliente" >Nuevo cliente</a></li>
                </ul>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-6">
                <h5 class="title">Enlaces importantes</h5>
                <ul>
                    <li><a href="{{asset('/') }}">Inicio</a></li>
                    <li><a href="{{asset('/')}}#nuevo_cliente">Nuevo cliente</a></li>
                    <li><a href="{{asset('/puntos_de_pago') }}">Puntos de pago</a></li>
                    <li><a href="{{asset('/')}}#preguntas_fre">Preguntas frecuentes</a></li>
                    <li><a href="{{asset('/')}}">Contacto</a></li>
                    <li><a href="{{asset('/plataforma')}}" target="_blank">Plataforma</a></li>
                    <li><a href="https://anydesk.es/download" target="_blank">Soporte remoto</a></li>
                </ul>
            </div>
            <!--/.Second column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2018 Copyright: <a href="#"> servirecarga.com </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ asset('js/tether.min.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/56faa6ca5de6a2ac05c9a2fa/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>
</html>



