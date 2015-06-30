


@extends('default')

@section('content')
<br><br><br><br>
<a class="btn btn-success" href="{{ URL::route('cuentas.datos') }}" role="button">Depositar</a>

<a class="btn btn-success" href="{{ URL::route('cuentas.notify',array(Auth::user()->id)) }}" role="button">Aviso de Deposito</a>

<a class="btn btn-success" href="{{ URL::route('cuentas.retiro',array(Auth::user()->id)) }}" role="button">Retirar</a>

<a class="btn btn-success" href="{{ URL::route('bancos.show',array(Auth::user()->id)) }}" role="button">Cuenta Bancaria</a>


<br><br><br><br><br><br><br><br>
  SALDO {!! $saldox[0]->saldoto!!}
<br><br><br><br>
 <table style="width:75%">
	<th># Movimiento</th>
    <th>Fecha </th>		
    <th>Abono</th>
    <th>Cargo</th>
@foreach($cuentas as $cuenta)

<tr>
    <td>{!! $cuenta->id!!}</td>
    <td>{!! $cuenta->fecha!!}</td>
    <td>{!! $cuenta->abono!!}</td>
    <td>{!! $cuenta->cargo!!}  </td>
  </tr>
 

@endforeach
</table> 
   <table style="width:75%">
 <tr>
    <td>Total:{!! $saldox[0]->saldoto!!}</td>
 
  </tr>
</table> 
@stop




