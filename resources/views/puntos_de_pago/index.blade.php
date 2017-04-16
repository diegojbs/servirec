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




<div class="container-fluid terciario  mt" id="puntos_pago">
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