


@extends('default')

@section('content')




@foreach($errors->all() as $error)
<li>{!! $error!!}</li>
@endforeach
<br><br><br>

@foreach($notify->all() as $noti)
<li>{!! $noti!!}</li>
@endforeach

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


{!!Form::close()!!}






@stop




