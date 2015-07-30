@extends('default')

@section('content')

@foreach($errors->all() as $error)
<li>{!! $error!!}</li>
@endforeach
<br> <br><br> <br><br> <br>
CREAR GRUPO


{!!Form::open(['route'=> 'grupos/registrar'])!!}
{!!Form::label('Nombre del grupo')!!}<br>
{!!Form::text('nombre')!!}<br>
<br>
{!! Form::checkbox('limite', '1',null,array('id' => 'checkbox','onChange' => 'changefecha();')) !!}
{!!Form::label('Fecha Limite')!!}
{!! Form::text('fechalimite',null, array('id' => 'datepicker',"size" => '10',"maxlength" => '10', 'disabled')) !!}<br> <br>

{!! Form::checkbox('cooperacha', '1',null,array('id' => 'checkbox2','onChange' => 'changecosto();')) !!}
{!!Form::label('Cooperacha')!!}
{!! Form::text('costo',null, array('id' => 'cooperacha',"size" => '4',"maxlength" => '4','disabled')) !!}<br> <br>


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
    if (document.getElementById("checkbox2").value === "1") {
        document.getElementById("checkbox2").value = "0";
        document.getElementById("cooperacha").removeAttribute('disabled') ;
    } else {
      document.getElementById("checkbox2").value = "1";
        document.getElementById("cooperacha").setAttribute("disabled", true);
    }
}
</script>





{!!Form::submit('Crear Grupo') !!}

{!!Form::close()!!}









@stop