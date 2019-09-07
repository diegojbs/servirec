@extends('layouts.app')
@section('content')

<div>
    <br>
    <br>
    <br>
</div>


<div class="container-fruid">
    
</div>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-center">Registro de nuevo cliente</h1>
    <p class="lead text-center">Por favor complete todos los campos para realizar el registro como punto de venta de recargas</p>

    <div class="col">
            @if($show_message == '1')
                <div class="alert alert-warning" role="alert">
                    <h5>Datos enviados</h5>
                    Hemos recibido sus datos correctamente, nos comunicaremos con Usted a su correo o a su teléfono. Por favor estar pendiente.
                </div>
            @endif

            <div class="card" style="width: 100%;">
                <div class="card-body">
                    {{-- <h5 class="card-title">Card title</h5> --}}
                    {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
                    
                    {{-- <form action="{{ url('/registrar') }}" method="POST" class="peticion"> --}}
                        <form action="{{ url('/registrar') }}" method="POST">
                    {{csrf_field() }}
                    <div class="row prl20">
                        <div class="md-form col-md-6">
                            
                            <div class="form-group">
                                <label for="nombresn">Nombre</label>
                                <input type="text" class="form-control" id="nombresn"  name="nombres" aria-describedby="nombresn" placeholder="Ingrese su nombre completo"  required="true">
                            </div>

                        </div>

                        <div class="md-form col-md-6">
                            
                            <div class="form-group">
                                <label for="identificacionn">Numero de cédula o NIT</label>
                                <input type="text" class="form-control" id="identificacionn"  name="identificacion" aria-describedby="identificacionn" placeholder="Cédula o NIT"  required="true">
                            </div>

                        </div>
                    </div>

                    <div class="row prl20">
                        <div class="md-form col-md-6">
                            
                            <div class="form-group">
                                <label for="correon">Su email</label>
                                <input type="email" class="form-control" id="correon"  name="correo" aria-describedby="correon" placeholder="Su email"  required="true">
                            </div>

                        </div>

                        <div class="md-form col-md-6">
                            
                            <div class="form-group">
                                <label for="telefonon">Número de telefono</label>
                                <input type="text" class="form-control" id="telefonon"  name="telefono" aria-describedby="telefonon" placeholder="Teléfonos"  required="true">
                            </div>

                        </div>
                    </div>

                    <div class="row prl20">
                        <div class="md-form col-md-6">
                            
                            <div class="form-group">
                                <label for="ciudadn">Ciudad - Departamento</label>
                                <input type="text" class="form-control" id="ciudadn"  name="ciudad" aria-describedby="ciudadn" placeholder="Ciudad - Departamento"  required="true">
                            </div>

                        </div>

                        <div class="md-form col-md-6">
                            
                            <div class="form-group">
                                <label for="direccionn">Dirección completa</label>
                                <input type="text" class="form-control" id="direccionn"  name="direccion" aria-describedby="direccionn" placeholder="Dirección completa"  required="true">
                            </div>

                        </div>
                    </div>
                    
                    <div class="row prl20">
                        <div class="md-form  col-md-6">
                            
                            <div class="form-group">
                                <label for="negocion">Nombre del negocio</label>
                                <input type="text" class="form-control" id="negocion"  name="negocio" aria-describedby="negocionn" placeholder="Nombre del negocio"  required="true">
                            </div>

                        </div>

                        <div class="md-form col-md-6 text-center">
                            {{-- <input type="submit" name="" value="Enviar" class="btn primario"> --}}
                            <button type="submit" class="btn btn-warning">Enviar</button>
                        </div>
                    </div>
                </form>

                </div>
            </div>

        </div>

  </div>
</div>

<br>

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
                        <p>Teléfonos de contacto {{ env('TEL_FIJO') }} - {{ env('TEL_CEL')}}</p>
                        <p>Cali Valle del Cauca.</p>
                        {{-- <p>
                            <a class="btn btn-warning" href="{{asset('/')}}#nuevo_cliente" >Nuevo cliente</a>
                        </p> --}}
                    

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
                        {{-- <li class="list-group-item text-center"><a href="{{ asset('/registro') }}">Nuevo cliente</a></li> --}}
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