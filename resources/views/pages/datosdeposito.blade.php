


@extends('default')

@section('content')
<br><br><br><br>
<a class="btn btn-success" href="{{ URL::route('bancos.show',array(Auth::user()->id)) }}" role="button">Depositar</a>

<a class="btn btn-success" href="{{ URL::route('cuentas.deposito',array(Auth::user()->id)) }}" role="button">Aviso de Deposito</a>

<a class="btn btn-success" href="{{ URL::route('cuentas.retiro',array(Auth::user()->id)) }}" role="button">Retirar</a>

<a class="btn btn-success" href="{{ URL::route('bancos.show',array(Auth::user()->id)) }}" role="button">Cuenta Bancaria</a>


<br><br><br><br><br><br><br><br>
Para hacer deposito por ahora se encuentran estas dos opciones:

 <table style="width:75%">
  <th>Deposito Bancario:</th>
    <th>Deposito a tarjeta saldazo</th>   

<tr>
    <td>Nombre:</td>
    <td>Numero tarjeta: </td>
   
  </tr>

<tr>
    <td>Numero de cuenta:</td>
  </tr>
  <tr>
    <td>Banco:</td>

  </tr>
  </table> 
 













@stop




