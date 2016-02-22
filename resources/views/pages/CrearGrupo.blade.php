@extends('default')

@section('content')
<br><br> <br>
@foreach($errors->all() as $error)
<li>{!! $error!!}</li>
@endforeach
<br> <br><br> <br><br> <br>
 @if ($saldox[0]->saldoto > 0)  
SALDO ${!! $saldox[0]->saldoto!!}  
   @else
      SALDO $0
   @endif

<br> <br>
CREAR GRUPO


{!!Form::open(array('route'=> 'grupos/registrar', 'onSubmit' => 'return validar();'))!!}

  



{!!Form::label('Nombre del grupo')!!}<br>
{!!Form::text('nombre',null,array('id' => 'nomgrupo'))!!}<br>
<br>
{!! Form::checkbox('limite', '1',null,array('id' => 'checkbox','onChange' => 'changefecha();')) !!}
{!!Form::label('Fecha Limite')!!}
{!! Form::text('fechalimite',null, array('id' => 'datepicker',"size" => '10',"maxlength" => '10', 'disabled')) !!}<br> <br>

{!! Form::checkbox('cooperacha', '1',null,array('id' => 'checkbox2','onChange' => 'changecosto();')) !!}
{!!Form::label('Cooperacha')!!}
{!! Form::text('costo',null, array('id' => 'cooperacha',"size" => '4',"maxlength" => '4','disabled')) !!}<br> <br>

{!! Form::checkbox('participantes', '1',null,array('id' => 'checkbox3','onChange' => 'changemiembros();')) !!}
{!!Form::label('# de Participantes')!!}
{!! Form::text('miembros',null, array('id' => 'participante',"size" => '4',"maxlength" => '4','disabled')) !!}<br> <br>


<script type="text/javascript">
function changefecha()
{
    if (document.getElementById("checkbox").value === "1") {
        document.getElementById("checkbox").value = "0";
        document.getElementById("datepicker").removeAttribute('disabled') ;
    } else {
      document.getElementById("checkbox").value = "1";
        document.getElementById("datepicker").setAttribute("disabled", true);
    }
}
</script>



<script type="text/javascript">
function changecosto()
{
    var Salx = '<?php echo $saldox[0]->saldoto; ?>';
    if (document.getElementById("checkbox2").value === "1") {

if(Salx === ""){
 alert('No puedes crear grupo con costo si no tienes saldo');}
 else{


        document.getElementById("checkbox2").value = "0";
        document.getElementById("cooperacha").removeAttribute('disabled') ;
    }

    } else {
      document.getElementById("checkbox2").value = "1";
        document.getElementById("cooperacha").setAttribute("disabled", true);
    }
}
</script>

<script type="text/javascript">
function changemiembros()
{
    if (document.getElementById("checkbox3").value === "1") {
        document.getElementById("checkbox3").value = "0";
        document.getElementById("participante").removeAttribute('disabled') ;
    } else {
      document.getElementById("checkbox3").value = "1";
        document.getElementById("participante").setAttribute("disabled", true);
    }
}
</script>


<script>
function validar() {

    var nom = document.getElementById('nomgrupo').value;
    
    if (nom == null || nom == "") {
        alert("Ingresa el nombre del grupo");
        return false;
    }

    if (document.getElementById("checkbox").checked ) 
    {
    var x = document.getElementById('datepicker').value;
    if (x == null || x == "") {
        alert("Una fecha limite tiene que ser seleccionada");
        return false;
    }
   }


    if (document.getElementById("checkbox2").checked ) 

    {

        
    var b = document.getElementById('cooperacha').value;
     var Sald = '<?php echo $saldox[0]->saldoto; ?>';

    if (b == null || b == "") {
        alert("El costo de la cooperacha debe ser capturado");
        return false;
    }
    else if (Sald < b){
       
        
           alert(b);
            alert("El costo de la cooperacha es mayor a tu saldo");
           alert(Sald);
        return false;}
    }

    
   }


if (document.getElementById("checkbox3").checked ) 
    {
    var x = document.getElementById('participante').value;
    if (x == null || x == "") {
        alert("El numero de participantes debe ser capturado");
        return false;
    }
   }

}
</script>


{!!Form::submit('Crear Grupo') !!}

{!!Form::close()!!}









@stop