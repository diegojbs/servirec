@extends('layouts.app')
@section('content')


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