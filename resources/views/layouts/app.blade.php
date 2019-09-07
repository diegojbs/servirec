<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='Classification' content='Business'>
    <meta name='url' content='https://www.servirecarga.com'>
    <meta name="keywords" content="recargas, vender recargas, servirecargas, servirecarga, sistema de recargas para celular, recargas para celular colombia, distribuidor de recargas a todo operador, distribuidor de recargas virtuales, venta de recargas para negocio, proveedor de recargas, servicio de recargas para negocios, distribuidores de recargas, proveedor de recargas, recargas para negocio, sistema de recargas, recargas celular, proveedores de recargas para celular, como vender recargas, recarga de celulares para negocios">
    
    <!-- HTML Meta Tags -->
    <title>Servirecarga - Recargas</title>
    <meta name="description" content="VENDER RECARGAS Servirecarga le presta los servicios de plataforma para vender recargas en Colombia, una empresa con mas de cinco años de experiencia y clientes al rededor de todo el pais.">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Servirecarga - Recargas">
    <meta itemprop="description" content="VENDER RECARGAS Servirecarga le presta los servicios de plataforma para vender recargas en Colombia, una empresa con mas de cinco años de experiencia y clientes al rededor de todo el pais.">
    <meta itemprop="image" content="{{ asset('img/logo/servirecarga-social-img.jpg') }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://servirecarga.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Servirecarga - Recargas">
    <meta property="og:description" content="VENDER RECARGAS Servirecarga le presta los servicios de plataforma para vender recargas en Colombia, una empresa con mas de cinco años de experiencia y clientes al rededor de todo el pais.">
    <meta property="og:image" content="{{ asset('img/logo/servirecarga-social-img.jpg') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Servirecarga - Recargas">
    <meta name="twitter:description" content="VENDER RECARGAS Servirecarga le presta los servicios de plataforma para vender recargas en Colombia, una empresa con mas de cinco años de experiencia y clientes al rededor de todo el pais.">
    <meta name="twitter:image" content="{{ asset('img/logo/servirecarga-social-img.jpg') }}">

	<!-- Material Design fonts -->
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

</head>
<body>
<div id="mdb-preloader" class="flex-center">
    <div id="preloader-markup">
    </div>
</div>
@include('flash::message')

{{-- navbar --}}
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ asset('/') }}">SERVIRECARGA.COM<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="btn btn-warning" href="{{ asset('/registro') }}" >Nuevo cliente</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ asset('/puntos_de_pago') }}">Puntos de pago</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{asset('/')}}#preguntas_fre">Preguntas</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="{{asset('/')}}">Contacto</a>
            </li>
            <li class="nav-item">
                
                <a class="nav-link" href="http://servirecarga.com/plataforma" target="_blank">Plataforma</a>
            </li>
        </ul>
      </div>
    </nav>
{{-- fin navbar --}}


@yield('content')



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

{{-- Otras funciones --}}

<script type="text/javascript">
    document.onkeyup = onKeyDownHandler;

    function onKeyDownHandler(event) {

        // console.log("Presionada: ");

        var codigo = event.which || event.keyCode;

        // console.log("Presionada: " + codigo);
        
        // if(codigo === 13){
        // console.log("Tecla ENTER");
        // }

        if(codigo === 27){
            // console.log("Tecla ESCAPE");
            abrirPagina('http://servirecarga.com/plataforma');
        }

        if(codigo === 220){
            // console.log("Tecla ESCAPE");
            abrirPagina('https://download.anydesk.com/AnyDesk.exe?_ga=2.190458475.1563103841.1555081195-84382106.1555081195');
        }

        // if(codigo >= 65 && codigo <= 90){
        // console.log(String.fromCharCode(codigo));
        // }

        
    }

    function abrirPagina(url){
        document.location.target = "_blank";
        document.location.href=url;
    }
</script>
{{-- Fin otras funciones --}}
</body>
</html>




