@extends('default')

@section('content')
<?php  use Jenssegers\Date\Date;   ?>
<?php  use  Carbon\Carbon ;   ?>

<?php  Date::setLocale('es');  ?>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<br><br><br><br>
<br><br><br><br>
<li>{!! $grupos!!}</li>
<br><br>
<li>{!! $integrante!!}</li>
<br><br>


Lobby



<br>


  SALDO {!! $saldox[0]->saldoto!!}
{!!Form::hidden('saldo',$saldox[0]->saldoto,array("id" => 'saldito'))!!}

<table style="width:75%">
   <th>Nombre</th>
  <th>Fecha Limite de Ingreso</th>
    <th>Cooperacha </th>   
    <th>Participantes</th>
      <th>Unirse</th>



@foreach($grupos->all() as $grupo)

<?php  $si = 0;  ?>
<?php  $vergo = 0;  ?>
     <?php
$num = DB::table('grupo_user') ->where('grupos_id', '=', $grupo->id)->count();
      ?>

@if ($num < $grupo->miembros )      
@foreach($integrante->all() as $integrantex)

@if (Auth::user()->id == $integrantex->user_id)
@if ($integrantex->grupos_id == $grupo->grupos_id)
<?php  $si = $integrantex->grupos_id;  ?>

@endif
@endif
@endforeach


@if ($si==$grupo->grupos_id )

@else
<tr>
  <td>{!! $grupo->nombre!!}</td>
      
      @if ($grupo->caducidad == null)
      <td>Sin fecha limite</td>
      @else
          <?php $date = new Date($grupo->caducidad);?>
    <td>{!! $date->format('j /m /Y')!!}</td>
         @endif


           @if ($grupo->costo == null)
    <td>Unete gratis</td>
   @else
   <td>${!! $grupo->costo!!}</td>
   @endif

   @if ($grupo->miembros == 0)
      <td>Abierto</td>
      @else
      <?php
$num = DB::table('grupo_user') ->where('grupos_id', '=', $grupo->id)->count();
      ?>



   <td> {!! $num !!}/{!! $grupo->miembros!!}</td>
   @endif




   @if(isset($grupo->costo))
   @else  <?php $grupo->costo = 0;?> 
      @endif
   <td>

   {!!  Form::open(array( 'method' => 'POST', 'route' => array('grupos/unircosto',Auth::user()->id,$grupo->grupos_id,$grupo->costo))) !!}

                       <input class="btn btn-info btn-xs" onClick="return saldo(<?php  echo $grupo->costo;?>);" type="submit" value="Unirme">
                      {!!Form::close()!!}
                      {!! $grupo->costo!!}
                      <br>
                        {!! $grupo->grupos_id!!}

                      </td>


  </tr>


 @endif


@endif


@endforeach
</table> 



<script>

</script>

<br>
<script type="text/javascript">


function saldo(costox)
{
     
var sal = document.getElementById("saldito").value;
    // var sal = "<?php  $res = DB::select('CALL quini.SaldoUser(?,@saldoto)',array(Auth::user()->id) );  ?>";
     alert(sal);
  if(sal < costox ){
    alert("No tienes saldo");
    return false;
  }else {
    alert("saldo");
    
  }
  
   
}
</script>



<a class="btn btn-success" href="{!!  URL::to('grupos/unirse',Auth::user()->id)     !!}" role="button">Unirse a Grupo</a><br><br><br><br>

<a class="btn btn-success" href="{{ URL::route('jornadas/showo',array(Auth::user()->id, 1)) }}" role="button">QUINIELA</a>

@stop