@extends('layouts.app')
@section('content')

<!-- <div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12 p0">
        <div class="p10 ta secundario la">
            <div style="display: inline-block; float: none;">
                <img src="{{ asset('img/logo/logo_transparente_servirecarga.png') }}" class="col-xs-2 col-sm-6 col-md-3 col-lg-3 img-ro">
                <h3 class="negrita">La mejor plataforma para vender recargas</h3>
            </div>
        </div>
    </div>
</div> -->

<div class="container-fluid gris mt norte">
    <div class="container gris">
        <div class="row">
           
            <div class="col-xs-12 col-md-6 hoverable">
                <div class="row  animated fadeInRight retraso-1">
                    <div class="col-sm-12">
                        <div class="p40 ta encabezado">
                            <h3>Formulario de contacto</h3>

                        </div>
                    </div>
                </div>
                <form action="{{ url ('/contacto') }}" method="POST" class="peticion   animated fadeIn retraso-2">
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
                        <input type="submit" name="" value="Enviar" class="btn primario">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container primario lb">
    <div class="row">
        <!-- <div class="col-xs-12 col-lg-12"> -->
        <!-- <div class="p40 ta encabezado"> -->
            <h3 class="p40 ta encabezado animated fadeInDown retraso-1">Nuestra atención y rapidez del servicio hacen la diferencia.</h3>
        <!-- </div> -->
        <!-- </div> -->
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6">
            
            <p class="animated fadeInDown retraso-2">
                Como cliente de SERVIRECARGA usted obtendrá el beneficio para sus clientes a la vez que aumenta sus ingresos.
            </p>
            <p class="animated fadeInDown retraso-2">
                Millones de recargas a teléfonos móviles se hacen día a día en Colombia y Usted tiene con nosotros la posibilidad de ofrecer este servicio a sus clientes.
            </p>
        </div>

        <div class="col-xs-12 col-md-6">
            <p class="animated fadeInDown retraso-2">
                Recargue a teléfonos móviles de todos los operadores en Colombia a través de Internet o simplemente usando un teléfono celular. Le prestamos toda la asesoría que Usted necesita.
            </p>
            <p class="animated fadeInDown retraso-2">
                Registre sus datos, nosotros le contactamos y le informamos cómo puede hacer parte de nuestra alianza. Nos pondremos en contacto con Usted.
            </p>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12 p0  animated fadeIn retraso-1">
        <div class="p20 ta  la">
            <div class="container">
                <h3 class="negrita">Se esta uniendo a la mejor plataforma para vender recargas</h3>
                <h4>Miles de clientes nos prefieren en Colombia</h4>
                <p class="lgray">Supermercados, tiendas, droguerías y su negocio también puede ser hoy mismo punto de venta de recargas, regístrese ahora en el Formulario de registro de nuevo cliente que encuentra aquí abajo</p>
            </div>
        </div>
    </div>
</div>

<!-- <hr> -->

<hr>
<div class="container-fluid norte">
    <div class="container z-depth-1 blanco">
        <div class="row"  id="nuevo_cliente">
            <div class="col-xs-12 col-md-12 col-lg-12 p0">
                <div class="p40 ta encabezado">
                    <h3 class="">Registro de nuevo cliente</h3>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12  col-md-12 col-lg-12">
                <form action="{{ url('/registro') }}" method="POST" class="peticion">
                    {{csrf_field() }}
                    <div class="row prl20">
                        <div class="md-form col-md-6">
                            <input type="text" id="nombresn" class="form-control" name="nombres"  required="true">
                            <label for="nombresn">Nombre</label>
                        </div>

                        <div class="md-form col-md-6">
                            <input type="text" id="identificacionn" class="form-control" name="identificacion" required="true">
                            <label for="identificacionn">Numero de cédula o NIT</label>
                        </div>
                    </div>

                    <div class="row prl20">
                        <div class="md-form col-md-6">
                            <input type="email" id="correon" class="form-control" name="correo" required="true">
                            <label for="correon">Su email</label>
                        </div>

                        <div class="md-form col-md-6">
                            <input type="text" id="telefonon" class="form-control" name="telefono" required="true">
                            <label for="telefonon">Número de telefono</label>
                        </div>
                    </div>

                    <div class="row prl20">
                        <div class="md-form col-md-6">
                            <input type="text" id="ciudadn" class="form-control" name="ciudad" required="true">
                            <label for="ciudadn">Ciudad - Departamento</label>
                        </div>

                        <div class="md-form col-md-6">
                            <input type="text" id="direccionn" class="form-control" name="direccion" required="true">
                            <label for="direccionn">Dirección completa</label>
                        </div>
                    </div>
                    
                    <div class="row prl20">
                        <div class="md-form  col-md-6">
                            <input type="text" id="negocion" class="form-control" name="negocio" required="true">
                            <label for="negocion">Nombre del negocio</label>
                        </div>

                        <div class="md-form col-md-6 text-center">
                            <input type="submit" name="" value="Enviar" class="btn primario">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid gris pt-20  pb-20">
    <div class="container gris">
        <div class="row">
            <div class="col-xs-2 col-md-6 terciario p20 br10 b5 mt-10 animated fadeIn retraso-2">
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
            <div class="col-xs-2 col-md-6 terciario p20 br10 b5 mt-10  animated fadeIn retraso-2">
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
</div>


<div class="container-fluid terciario pt-10"  id="preguntas_fre">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <h3 class="encabezado ta p40">Preguntas frecuentes</h3>
            </div>
        </div>
        <div class="row">
                @foreach($preguntas as $pregunta)
                    <div class="col-xs-12 col-sm-6">
                        <div class="z-depth-1">
                            <h4 class="encabezado2 text-center p10 white-text P10">{{$pregunta->pregunta}}</h4>
                            <p class="p20">{!! $pregunta->respuesta !!}</p>    
                        </div>
                    </div>    
            @endforeach
        </div>
    </div>
</div>

<div class="container-fluid terciario" id="puntos_pago">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <h3 class="encabezado ta p40">Puntos de pago autorizados</h3>
            </div>
        </div>
        <div class="row">
                @foreach($bancos as $banco)
                    <div class="col-xs-12 col-sm-6 mb-20">
                        <div class="z-depth-1">
                            <h3 class="encabezado2 text-center white-text p10">{{$banco->nombre}}</h3>
                            <div class="p20">{!! $banco->datos !!}</div>    
                        </div>
                    </div>    
            @endforeach
        </div>
    </div>
</div>

@endsection





<!-- FOOTER -->



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
            <img src="{{ asset('img/logos_operadores/flash_mobile_colombia_servirecarga.png') }}" class="img-fluid">
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