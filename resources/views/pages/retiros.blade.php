


@extends('default')

@section('content')
<br><br><br><br>
<a class="btn btn-success" href="{{ URL::route('bancos.show',array(Auth::user()->id)) }}" role="button">Depositar</a>

<a class="btn btn-success" href="{{ URL::route('grupos/dejar',array(Auth::user()->id)) }}" role="button">Aviso de Deposito</a>

<a class="btn btn-success" href="{{ URL::route('cuentas.show',array(Auth::user()->id)) }}" role="button">Mis Cuentas</a>

<a class="btn btn-success" href="{{ URL::route('bancos.show',array(Auth::user()->id)) }}" role="button">Cuenta Bancaria</a>
<?php $z  =0; ?>

<br><br><br><br><br><br><br><br>
  SALDO {!! $saldox[0]->saldoto!!}
<br><br><br><br>
@if ($user[0]->tipocuenta <> null)
     @if ($user[0]->tipocuenta == 1)
          @if ($user[0]->cuentaclabe <> '000000000000000000')
          <?php $z  =0; ?>
          @else
          <?php $z  =$z+1; ?>
          @endif

        @elseif ($user[0]->cuentatarjeta <> '0000000000000000')
        <?php $z =0; ?>
        @else
         <?php $z  =$z+1; ?>
         
      @endif
       @else
         <?php $z  =$z+1; ?>
@endif

@if ($user[0]->banco <> null)
  @if ($user[0]->banco == "OTRO")
    @if ($user[0]->otrobanco <> null)
        <?php $z  =0; ?>
    @else
       <?php $z  =$z+1; ?>
    @endif   
  @else
   <?php $z  =0; ?>
  @endif
@else <?php $z  =$z+1; ?>

@endif


@if ($user[0]->nombrecompleto <> null)
 <?php $z  =0; ?>
@else
       <?php $z  =$z+1; ?>

@endif


@if ($user[0]->nombrecompleto <> null)
 <?php $z  =0; ?>
@else
       <?php $z  =$z+1; ?>

@endif








@if ($z <> 0)
{!!Form::label('Faltan datos para el deposito, por capturar')!!} <a class="btn btn-success" href="{{ URL::route('bancos.show',array(Auth::user()->id)) }}" role="button">Ir a Cuenta Bancaria</a><br>

@else
   Estos son los datos de tu cuenta:<br><br>
    Nombre:{!!$user[0]->nombrecompleto!!}<br><br>
    @if ($user[0]->tipocuenta == 1)
   Cuenta Clabe:{!!$user[0]->cuentaclabe!!}<br><br>
       @elseif ($user[0]->tipocuenta == 2)
       Tarjeta Saldazo:{!!$user[0]->cuentatarjeta!!}<br><br>
       

    @else
   Numero de cuenta:{!!$user[0]->cuentatarjeta!!}<br><br>

   @endif

@if ($user[0]->banco== 'OTRO')
 Banco:{!!$user[0]->otrobanco!!}<br><br>
 @else
  Banco:{!!$user[0]->banco!!}<br><br>

@endif
<br><br>
Por favor ingresa el monto a retirar de tu saldo.<br><br>
  {!!Form::label('monto a retirar')!!}
{!!Form::text('monto')!!}<br><br>


@endif

@stop




