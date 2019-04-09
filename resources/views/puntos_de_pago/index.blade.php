@extends('layouts.app')
@section('content')

<div>
    <br>
    <br>
    <br>
</div>


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
</div>

</div>
{{-- Puntos de pago --}}

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