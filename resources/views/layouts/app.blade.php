<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Servirecarga</title>
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
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation" id="menumovil">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{ asset('/') }}">
            <strong>SERVIRECARGA.COM</strong>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav1">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" target="{{ asset('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#nuevo_cliente" >Nuevo cliente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#puntos_pago">Puntos de pago</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#preguntas_fre">Preguntas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://recargas.servirecarga.com" target="_blank">Plataforma</a>
                </li>
        </div>
    </div>
</nav>


@yield('content')


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
                    <li>Email: info@servirecarga.com</li>
                    <li>Cali Valle del Cauca.</li>
                </ul>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-6">
                <h5 class="title">Enlaces importantes</h5>
                <ul>
                    <li><a href="#!"></a></li>
                    <li><a href="#puntos_pago">Puntos de pago</a></li>
                    <li><a href="#!">Contacto</a></li>
                    <li><a href="#!">Plataforma</a></li>
                    <li><a href="#nuevo_cliente">Nuevo cliente</a></li>
                    <li><a href="http://anydesk.es/download" target="_blank">Soporte remoto</a></li>
                </ul>
            </div>
            <!--/.Second column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017 Copyright: <a href="#"> servirecarga.com </a>

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
</body>
</html>



