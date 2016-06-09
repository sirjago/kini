@extends('master')

@section('content')
<?php  use Jenssegers\Date\Date;   ?>
<?php  use  Carbon\Carbon ;   ?>




Nombre del grupo: {!! $grupo->nombre!!}  <br>
ID del grupo: {!! $grupo->id!!}  
<br>
{!! $integrante[0]->Owner!!} 
<br>






  

<br>

@if ($grupo->costo > 0)  
Costo ${!! $grupo->costo!!}  
{!!Form::hidden('coshidden',$grupo->costo,array("id" => 'costohidden'))!!}
   @else
      SIN COSTO 
      {!!Form::hidden('coshidden','null',array("id" => 'costohidden'))!!}
   @endif
<br>


<br>
 <?php $date = new Date($grupo->caducidad);?>
  <?php  $ahora = Date::now(); ;?>
@if ($grupo->caducidad <> NULL)  
Fecha Limite {!! $date->format('j /m /Y')!!}

@if ( $ahora > $date)

{!!Form::hidden('fechidden',1,array("id" => 'fechahidden'))!!}

   @else
   {!!Form::hidden('fechidden',0,array("id" => 'fechahidden'))!!}
   @endif
   @else
      SIN FECHA LIMITE 
       {!!Form::hidden('fechidden',0,array("id" => 'fechahidden'))!!}
   @endif
<br>


<br>

<?php
$num = DB::table('grupo_user') ->where('grupos_id', '=', $grupo->id)->count();
      ?>
      
      {!!Form::hidden('memb',$num,array("id" => 'memberhidden'))!!}
       {!!Form::hidden('memb2',$grupo->miembros ,array("id" => 'memberhidden2'))!!}

@if ($grupo->miembros > 0 )  


      No de Miembros: {!! $num !!}/{!! $grupo->miembros!!}  
  
   @else
      Sin Maximo de Participantes
   @endif
<br>

@foreach($errors->all() as $error)
<li>{!! $error!!}</li>
@endforeach
<br>

@if ($saldox[0]->saldoto > 0)  
SALDO ${!! $saldox[0]->saldoto!!}  
   @else
      SALDO $0
   @endif

{!!Form::open(array('route'=> 'grupos/join', 'onSubmit' => 'return validate();'))!!}

{!!Form::label('Confirma la clave del grupo')!!}<br>
<br>
{!!Form::text('clave',null,array("id" => 'clavex'))!!}

{!!Form::submit('Unirte a Grupo',array('id' => 'unete')) !!}

<script>
function validate() {
   var dat = document.getElementById('fechahidden').value;
 var x = document.getElementById('costohidden').value;
  var cla = document.getElementById('clavex').value;
 var numemb = document.getElementById('memberhidden').value;
 var numemb2 = document.getElementById('memberhidden2').value;
 var Sald = '<?php echo $saldox[0]->saldoto; ?>';

 if (x === "null" ) {var x=0;}
  if(x > Sald){
           
            alert("El costo de la cooperacha es mayor a tu saldo");
            alert(x);
        return false;
     }




if (numemb2 > 0) {

   if (numemb >= numemb2){
           
            alert("El grupo esta lleno");
        return false;}
   }

if (cla == null || cla == "") {
        alert("Ingresa la contrasena");
        return false;
    }



 if (dat == 1){
           
            alert("Ha pasado la fecha limite de registro");
        return false;
     }

}

</script>




{!!Form::close()!!}

@stop