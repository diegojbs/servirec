@extends('layouts.app')
@section('content')

<div>
    <br>
    <br>
    <br>
</div>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
      <div class="row">
          <div class="col-sm-12 col-md-3">
            <img src="{{ asset('img/logo/logo_servirecarga.png') }}" class="img-fluid" alt="...">
          </div>
          <div class="col-sm-12 col-md-9">
              <h1 class="display-4 text-center">Bienvenido a Servirecarga</h1>
                <p class="lead text-center">Servicios electrónicos de alta calidad.</p>
          </div>
      </div>
  </div>
</div>

{{-- Header --}}
<div class="jumbotron alert-primary">
  {{-- <hr class="my-4"> --}}
  
<div class="container">

    <section class="row">

        <div class="col-sm-12 col-md-8">
            <div class="card alert-success" style="width: 100%;">
                
                <h3 class="text-center">Formulario de contacto</h3>
                
                <div class="card-body">
                    @if($show_message == '1')
                        <div class="alert alert-warning" role="alert">
                            <h5>Datos enviados</h5>
                            Hemos recibido sus datos correctamente, nos comunicaremos con Usted a su correo o a su teléfono. Por favor estar pendiente.
                        </div>
                    @endif

                    {{-- <form action="{{ url ('/contacto') }}" method="POST" class="peticion   animated fadeIn retraso-2"> --}}
                        <form action="{{ url ('/contacto') }}" method="POST" animated fadeIn retraso-2">
                    {{csrf_field() }}
                    <hr>
                    <div class="md-form">
                        <input type="text" id="nombresc" class="form-control" name="nombres" required="true">
                        <label for="nombresc">Nombre</label>
                    </div>

                    <div class="md-form">
                        <input type="text" id="apellidosc" class="form-control" name="apellidos" required="true">
                        <label for="apellidosc">Apellido</label>
                    </div>

                    <div class="md-form">
                        <input type="email" id="emailc" class="form-control"  name="email" required="true">
                        <label for="emailc">Email</label>
                    </div>

                    <div class="md-form">
                        <input type="text" id="telefonoc" class="form-control" name="telefono" required="true">
                        <label for="telefonoc">Teléfono</label>
                    </div>

                    <div class="md-form text-center">
                        <!-- <button type="submit" class="btn primario">Enviar</button> -->
                        {{-- <input type="submit" name="" value="Enviar" class="btn btn-info"> --}}
                        <button type="submit" class="btn btn-info btn-lg">Enviar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4">
            <div class="card" style="width: 100%;">
                {{-- <img src="{{ asset('img/logo/logo_servirecarga.png') }}" class="card-img-top" alt="..."> --}}
                <div class="card-body">
                    <h5 class="card-text">
                        Plataforma para vender recargas a todos los operadores desde su computador o teléfono celular.
                    </h5>
                    <img src="{{ asset('img/varios/servirecarga-publicidad-2.jpg') }}" class="img-fluid" alt="">
                    <h3 class="card-text text-center">Llámenos</h3>
                    <p class="card-text text-center">Teléfono: (2) 3724803</p>
                    <p class="card-text text-center">
                        Celular: 3103930123
                    </p>

                    <p class="d-block d-sm-none text-center">
                        Escríbanos por Whatsapp haciendo clic en la imagen
                    </p>
                    <p class="d-block d-sm-none text-center">
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=573103930123&text=Información de recargas">
                            <img style="max-width: 30%" class="img-fluid" src="{{asset('img/varios/whatsapp-logo.png') }}" alt="">
                        </a>
                    </p>

                </div>
            </div>
        </div>

    </section>

    <hr>

    <div class="jumbotron">
        <h1 class="display-4">Nuestra atención y rapidez del servicio hacen la diferencia</h1>
        {{-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> --}}
        <hr class="my-4">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <p>
                    Como cliente de SERVIRECARGA usted obtendrá el beneficio para sus clientes a la vez que aumenta sus ingresos.
                </p>
                <p>
                    Millones de recargas a teléfonos móviles se hacen día a día en Colombia y Usted tiene con nosotros la posibilidad de ofrecer este servicio a sus clientes.
                </p>
            </div>
            <div class="col-sm-12 col-md-6">

                <p>
                    Recargue a teléfonos móviles de todos los operadores en Colombia a través de Internet o simplemente usando un teléfono celular. Le prestamos toda la asesoría que Usted necesita.
                </p>
                <p>
                    Registre sus datos, nosotros le contactamos y le informamos cómo puede hacer parte de nuestra alianza. Nos pondremos en contacto con Usted.
                </p>

            </div>
        </div>
    </div>

</div>

</div>
{{-- Header fin --}}


<div class="jumbotron jumbotron-fluid">
<div class="container">
    <h1 class="display-4">Se esta uniendo a la mejor plataforma para vender recargas</h1>
    <h2>Miles de clientes nos prefieren en Colombia</h2>
    <p class="lead">Supermercados, tiendas, droguerías y su negocio también puede ser hoy mismo punto de venta de recargas, regístrese ahora en el Formulario de registro de nuevo cliente que encuentra aquí abajo.</p>

    <p class="d-block d-sm-none text-center">
        Escríbanos por Whatsapp haciendo clic en la imagen
    </p>
    <p class="d-block d-sm-none text-center">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=573103930123&text=Información de recargas">
            <img style="max-width: 30%" class="img-fluid" src="{{asset('img/varios/whatsapp-logo.png') }}" alt="">
        </a>
    </p>
</div>
</div>

<br>

<div class="container">
    <div class="jumbotron  alert-info">
        <h1 class="display-4">Registro de nuevo cliente</h1>
        <p class="lead">Llenando un sencillo formulario Usted puede convertirse en punto de venta de recargas con una empresa que le respalda.</p>
        <hr class="my-4">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <img src="{{ asset('img/varios/nuevo_cliente_servirecarga.jpg') }}" class="img-fluid">
            </div>
            <div class="col-sm-12 col-md-6">

                
                <p>En horas laborales el proceso de creaciónde su usuario no nos tomas más de 10 minutos.</p>
                <p class="text-center">
                    <a class="btn btn-warning btn-lg" href="{{ asset('/registro') }}" role="button">Nuevo cliente</a>
                </p>
                
            </div>
        </div>
    </div>
</div>

<br>

<div class="container">
    <div class="row">

        <div class="col-sm-12 col-md-6">

            <h2>
                ¿Por qué vender recargas?
            </h2>
            <div>
                <p>
                    Vender recargas para celular y DirectTV prepago desde su negocio o establecimiento comercial en Colombia, aumenta sus ingresos y volumen de visitas de clientes, con una excelente rentabilidad.
                </p>
                <p>
                    Llame ahora o solicite información a través de nuestros canales de contacto.
                </p>
            </div>

        </div>
        <div class="col-sm-12 col-md-6">

            <h2>¿Cómo trabajamos?</h2>
            <div>
                <ol>
                    <li>Complete el formulario de nuevo cliente. Un agente comercial se comunicará en el menor tiempo posible.</li>
                    <li>Recibirá su usuario y su clave en su correo electrónico.</li>
                    <li>En el correo se le indica como hacer su consignación para tener saldo.</li>
                    <li>Una vez tiene saldo ya puede vender recargas.</li>
                </ol>
            </div>
            
        </div>

    </div>
</div>


{{-- Preguntas frecuentes --}}
<div class="jumbotron   alert-info">
  <h1 class="display-4 text-center">Preguntas frecuentes</h1>
  <p class="lead text-center">Aquí tiene algunas preguntas que generalmente se hacen nuestros clientes, si tiene otra inquietud adicional por favor contáctenos</p>
  <hr class="my-4">
  
<div class="container">
    <div class="card-columns">
        @foreach($preguntas as $pregunta)
            <div class="card">
                {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                <div class="card-body">
                <h5 class="card-title text-center">{{$pregunta->pregunta}}</h5>
                <hr class="my-4">
                <p class="card-text">{!! $pregunta->respuesta !!}</p>
                {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                </div>
            </div>
        @endforeach
    </div>
</div>

</div>
{{-- Fin preguntas frecuentes --}}


{{-- Puntos de pago --}}
<div class="jumbotron">
  <h1 class="display-4 text-center">Puntos de pago</h1>
  <p class="lead text-center">Contamos con convenios con los principales bancos y puntos de pago en el país, además, contamos con pago por PSE (Pago Seguro Electrónico)</p>
  <hr class="my-4">
  
<div class="container">
    <div class="card-columns">
        @foreach($bancos as $banco)
            <div class="card">
                {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                <div class="card-body">
                <h5 class="card-title text-center">{{$banco->nombre}}</h5>
                <hr class="my-4">
                <p class="card-text">{!! $banco->datos !!}</p>
                {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                </div>
            </div>
        @endforeach
    </div>

    <p class="d-block d-sm-none text-center">
        Escríbanos por Whatsapp haciendo clic en la imagen
    </p>
    <p class="d-block d-sm-none text-center">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=573103930123&text=Información de recargas">
            <img style="max-width: 30%" class="img-fluid" src="{{asset('img/varios/whatsapp-logo.png') }}" alt="">
        </a>
    </p>
</div>

</div>
{{-- Puntos de pago --}}

<br>

{{-- Operadores --}}

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-center">Recargamos todos los operadores</h3>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-6 col-md-1">
            <img src="{{ asset('img/logos_operadores/claro.png') }}" class="img-fluid">
        </div>
        <div class="col-sm-6 col-md-1">
            <img src="{{ asset('img/logos_operadores/movistar.png') }}" class="img-fluid">
        </div>
        <div class="col-sm-6 col-md-1">
            <img src="{{ asset('img/logos_operadores/tigo.png') }}" class="img-fluid">
        </div>
        <div class="col-sm-6 col-md-1">
            <img src="{{ asset('img/logos_operadores/flash_mobile_colombia_servirecarga.png') }}" class="img-fluid">
        </div>
        <div class="col-sm-6 col-md-1">
            <img src="{{ asset('img/logos_operadores/virgin.png') }}" class="img-fluid">
        </div>
        <div class="col-sm-6 col-md-1">
            <img src="{{ asset('img/logos_operadores/etb.png') }}" class="img-fluid">
        </div>
        <div class="col-sm-6 col-md-1">
            <img src="{{ asset('img/logos_operadores/une.png') }}" class="img-fluid">
        </div>
        <div class="col-sm-6 col-md-1">
            <img src="{{ asset('img/logos_operadores/direct_tv.png') }}" class="img-fluid">
        </div>
        <div class="col-sm-6 col-md-1">
            <img src="{{ asset('img/logos_operadores/exito_movil.png') }}" class="img-fluid">
        </div>
        <div class="col-sm-6 col-md-1">
            <img src="{{ asset('img/logos_operadores/avantel.png') }}" class="img-fluid">
        </div>
        <div class="col-sm-6 col-md-1">
            <img src="{{ asset('img/logos_operadores/paquetes_servirecarga.png') }}" class="img-fluid">
        </div>
        <div class="col-sm-6 col-md-1">
            <img src="{{ asset('img/logos_operadores/paquetes_servirecarga_minutos.png') }}" class="img-fluid">
        </div>
    </div>
</div>

{{-- Fin operadores --}}

<hr class="my-4">

<!--Footer-->
<footer class="page-footer blue center-on-small-only">

    <!--Footer Links-->
    <div class="container">
        <div class="row">

            <!--First column-->
            <div class="col-md-6">
                <div class="card">
                    {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                    <div class="card-body">
                    <h5 class="card-title text-center">SERVIRECARGA.COM</h5>
                    {{-- <hr class="my-4"> --}}

                    
                        <p>Horario de atención.</p>
                        <p>Lunes a viernes 8:00 am a 5:30 pm.</p>
                        <p>Teléfonos de contacto (2) 3724803 - 3103930123.</p>
                        <p>Cali Valle del Cauca.</p>
                        <p>
                            <a class="btn btn-warning" href="{{asset('/')}}#nuevo_cliente" >Nuevo cliente</a>
                        </p>
                    

                    </div>
                </div>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-6">

                <div class="card">
                    {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                    <div class="card-body">
                    <h5 class="card-title text-center">Enlaces importantes</h5>
                    {{-- <hr class="my-4"> --}}

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center"><a href="{{asset('/') }}">Inicio</a></li>
                        <li class="list-group-item text-center"><a href="{{asset('/')}}#nuevo_cliente">Nuevo cliente</a></li>
                        <li class="list-group-item text-center"><a href="{{asset('/puntos_de_pago') }}">Puntos de pago</a></li>
                        <li class="list-group-item text-center"><a href="{{asset('/')}}#preguntas_fre">Preguntas frecuentes</a></li>
                        <li class="list-group-item text-center">
                            <a href="{{asset('/')}}">Contacto</a>
                            <a href="{{asset('/plataforma')}}" target="_blank">Plataforma</a>
                            <a href="https://anydesk.es/download" target="_blank">Soporte remoto</a>
                        </li>
                    </ul>

                    </div>
                </div>
            </div>
            <!--/.Second column-->
        </div>
    </div>
    <!--/.Footer Links-->
<br>
<!--Copyright-->
    <div class="container-fluid">
        <h6 class="text-center">
            © 2019 Copyright: <a href="#"> servirecarga.com </a>
        </h6>
    </div>
<!--/.Copyright-->

<br>

</footer>
<!--/.Footer-->


@endsection