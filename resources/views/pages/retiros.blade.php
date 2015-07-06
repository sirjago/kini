


@extends('default')

@section('content')
<br><br><br><br>
<a class="btn btn-success" href="{{ URL::route('cuentas.datos') }}" role="button">Depositar</a>

<a class="btn btn-success" href="{{ URL::route('cuentas.deposito',array(Auth::user()->id)) }}" role="button">Aviso de Deposito</a>

<a class="btn btn-success" href="{{ URL::route('cuentas.show',array(Auth::user()->id)) }}" role="button">Mis Cuentas</a>

<a class="btn btn-success" href="{{ URL::route('bancos.show',array(Auth::user()->id)) }}" role="button">Cuenta Bancaria</a>
<br><br>
@if (!$notifi->isEmpty())
Retiros en proceso

<table style="width:75%">
  <th>Fecha de Solicitud</th>
    <th>Monto </th>   
   
    <th>Status</th>
      <th>Cancelar</th>
@foreach($notifi->all() as $noti)

<tr>
    <td>{!! $noti->fecha_solicitud!!}</td>
    <td>${!! $noti->monto!!}</td>
   
      <td>Por Depositar</td>
      
   <td>{!! Form::open(array( 'method' => 'DELETE', 'route' => array('cuentas.delete',Auth::user()->id, $noti->id))) !!}
                      
                        {!! Form::submit('Cancelar', array('class' => 'btn btn-danger btn-xs')) !!}</td>
  </tr>
 

@endforeach
</table> 
@else
No tienes retiros en proceso
@endif




{!!Form::open(array('route' =>array('cuentas.solicitar', Auth::user()->id)))!!}
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
{!!Form::text('monto',null,array('id' => 'montox','onBlur' => 'SaldoChange();'))!!}<br><br>


@endif

<script type="text/javascript">
function SaldoChange()
{
   var Salx = '<?php echo $saldox[0]->saldoto; ?>';
   var Salx2 = document.getElementById("montox").value;
    if ( parseInt(Salx2)>parseInt(Salx)) {

        alert('El monto a retirar es mayor al disponible en saldo');
        document.getElementById("montox").value = '';
             document.getElementById("enviar").setAttribute("disabled", true);
    } 
else {
 document.getElementById("enviar").removeAttribute('disabled') ;
    }
}
</script>



{!!Form::submit('Actualizar',array('id' => 'enviar','disabled')) !!}<br><br>
@stop




