


@extends('default')

@section('content')




<br><br><br><br>
<a class="btn btn-success" href="{{ URL::route('cuentas.datos') }}" role="button">Depositar</a>

<a class="btn btn-success" href="{{ URL::route('cuentas.show',array(Auth::user()->id)) }}" role="button">Mis cuentas</a>

<a class="btn btn-success" href="{{ URL::route('cuentas.retiro',array(Auth::user()->id)) }}" role="button">Retirar</a>

<a class="btn btn-success" href="{{ URL::route('bancos.show',array(Auth::user()->id)) }}" role="button">Cuenta Bancaria</a>
<br><br><br>

@if (!$notify->isEmpty())
Depositos en Proceso de Verificacion

<table style="width:75%">
  <th>Fecha de Deposito</th>
    <th>Monto </th>   
    <th>Referencia</th>
    <th>Status</th>
@foreach($notify->all() as $noti)

<tr>
    <td>{!! $noti->fecha_solicitud!!}</td>
    <td>${!! $noti->monto!!}</td>
    <td>{!! $noti->referencia!!}</td>
      <td>Por Verificar</td>
   
  </tr>
 

@endforeach
</table> 
@else
No tienes depositos pendientes de verificar
@endif


{!!Form::open(array('route' =>array('cuentas.deposito')))!!}

<br><br><br>
{!!Form::label('Tipo de Deposito')!!}<br>
{!! Form::select('tipodeposito', array('default' => 'Selecciona el tipo','1' => 'Tarjeta Saldazo','2' => 'Deposito Bancario'),null,array('id' => 'tipodepo'))!!}
<br>
 
{!!Form::label('Referencia')!!}<br>
{!!Form::text('referencia',null,array("id" => 'ref',"size" => '18',"maxlength" => '18'))!!}<br> <br>
{!!Form::label('Fecha de Deposito')!!}<br>
{!! Form::text('fechadeposito', null, array('id' => 'datepicker')) !!}<br> <br>
{!!Form::label('Monto Depositado')!!}<br>
{!!Form::text('abono',null,array("id" => 'abono',"size" => '5',"maxlength" => '5'))!!}<br> <br>










<script type="text/javascript">
function changetextbox()
{
    if (document.getElementById("EquipoInt").value === "27") {
        
        document.getElementById("otro").removeAttribute('disabled') ;
    } else {
       document.getElementById("otro").value = '';
        document.getElementById("otro").setAttribute("disabled", false);


    }
}
</script>














<br><br><br><br>
{!!Form::submit('Enviar Notificacion') !!}<br><br>


@foreach($errors->all() as $error)
<li>{!! $error!!}</li>
@endforeach
<br>

{!!Form::close()!!}






@stop




