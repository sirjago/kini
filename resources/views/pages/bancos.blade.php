


@extends('default')

@section('content')




@foreach($errors->all() as $error)
<li>{!! $error!!}</li>
@endforeach
<br><br><br><br>

<li>{!! $user!!}</li>


<br><br><br><br>
<br>
{!!Form::label('Nombre Completo')!!}<br>
{!!Form::text('completo',$user->nombrecompleto,array("size" => '50',"maxlength" => '100'))!!}<br><br>
{!!Form::label('Tipo de cuenta o deposito')!!}<br>
{!! Form::select('Tipo', array('default' => 'Seleccion el tipo de cuenta','BANCO' => 'BANCO','SALDAZO' => 'SALDAZO', 'TARJETA DEBITO' => 'TARJETA DEBITO','TARJETA CREDITO' => 'TARJETA CREDITO'),null,array('id' => 'account','onChange' => 'changebank();'))!!} 



<script type="text/javascript">
function changebank()
{
    if (document.getElementById("account").value === "BANCO") {
        
         document.getElementById("bank").removeAttribute('disabled') ;
         document.getElementById("bank2").setAttribute("disabled", true);
      
    } else {
       document.getElementById("bank2").removeAttribute('disabled') ;
         document.getElementById("bank").setAttribute("disabled", true);

    }
}
</script>






<br>
{!!Form::label('CLABE')!!}<br>
{!!Form::text('clabe',$user->clabe,array("id" => 'bank',"size" => '18',"maxlength" => '18'))!!}<br> 
{!!Form::label('No. de Cuenta/Tarjeta')!!}<br>
{!!Form::text('cuenta',$user->cuenta,array("id" => 'bank2',"size" => '16',"maxlength" => '16'))!!}<br> <br>










 
 
  



{!!Form::label('Banco')!!}<br>

@if($user->banco == 0)
{!! Form::select('Banco', array('default' => 'Selecciona tu banco','Banamex' => 'Banamex','BBVA BANCOMER' => 'BBVA BANCOMER', 'BANORTE' => 'BANORTE','HSBC' => 'HSBC','SANTANDER' => 'SANTANDER','SCOTIABANK' => 'SCOTIABANK','BANCOPPEL' => 'BANCOPPEL','BANCO AZTECA' => 'BANCO AZTECA','10' => 'OTRO BANCO'),null,array('id' => 'Equipo','onChange' => 'changetextbox();'))!!}
<br> <br>

<script type="text/javascript">
function changetextbox()
{
    if (document.getElementById("Equipo").value === "10") {
        //document.getElementById("otro").setAttribute("disabled", true);
        document.getElementById("otro").removeAttribute('disabled') ;
    } else {
      
        document.getElementById("otro").setAttribute("disabled", true);
    }
}
</script>




@else
{!! Form::select('Banco', array('default' => 'Selecciona tu banco','Banamex' => 'Banamex','BBVA BANCOMER' => 'BBVA BANCOMER', 'BANORTE' => 'BANORTE','HSBC' => 'HSBC','SANTANDER' => 'SANTANDER','SCOTIABANK' => 'SCOTIABANK','BANCOPPEL' => 'BANCOPPEL','BANCO AZTECA' => 'BANCO AZTECA','10' => 'OTRO BANCO'),$user->banco,array('id' => 'Equipo','onChange' => 'changetextbox();'))!!}
<br> <br>
<script type="text/javascript">
function changetextbox()
{
    if (document.getElementById("Equipo").value === "10") {
        
        document.getElementById("otro").removeAttribute('disabled') ;
    } else {
       document.getElementById("otro").value = '';
        document.getElementById("otro").setAttribute("disabled", false);


    }
}
</script>



@endif




@if($user->banco == null)
{!!Form::label('Otro Banco')!!}<br>
{!!Form::text('otro',null,array('id' => 'otro', 'disabled'))!!}<br><br>
@else
{!!Form::label('Otro Banco')!!}<br>
{!!Form::text('otro',$user->bancoOtro,array('id' => 'otro'))!!}<br><br>
@endif










<br><br><br><br>
{!!Form::submit('Actualizar') !!}<br><br>


{!!Form::close()!!}






@stop




