@extends('default')

@section('content')
<?php  use Jenssegers\Date\Date;   ?>
<?php  use  Carbon\Carbon ;   ?>
<?php  Date::setLocale('es');  ?>


<br><br><br><br>

<li>{!! $grupos!!}</li>

<br><br>

Lobby
<br>


<table style="width:75%">
	 <th>Nombre</th>
  <th>Fecha Limite</th>
    <th>Cooperacha </th>   
    <th>Participantes</th>
      <th>Unirse</th>
@foreach($grupos->all() as $grupo)

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
      <td>..participantes..</td>
      
   <td>{!! Form::open(array( 'method' => 'DELETE', 'route' => array('cuentas.delete',Auth::user()->id, $grupo->id))) !!}
                      
                        {!! Form::submit('Unirme', array('class' => 'btn btn-info btn-xs')) !!}</td>
  </tr>
 

@endforeach
</table> 

<br>




<a class="btn btn-success" href="{!!  URL::to('grupos/unirse',Auth::user()->id)     !!}" role="button">Unirse a Grupo</a><br><br><br><br>

<a class="btn btn-success" href="{{ URL::route('jornadas/showo',array(Auth::user()->id, 1)) }}" role="button">QUINIELA</a>

@stop