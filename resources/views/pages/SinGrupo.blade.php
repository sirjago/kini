@extends('default')

@section('content')


<br>

<br>
<br>

<br>




{!! $grupos!!}




GRUPOS PRIVADOS a los que perteneces


<table style="width:75%">
   <th>Nombre</th>
    <th>Cooperacha </th>   
    <th>Participantes</th>
      <th>Acceder</th>
@foreach($grupos->all() as $grupo)




<tr>
  <td>{!! $grupo->Nombre!!}</td>
      
      

   @if ($grupo->costo == null)
    <td>Sin Costo</td>
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

   {!!  Form::open(array( 'method' => 'GET', 'route' => array('grupos.show',Auth::user()->id,$grupo->id))) !!}

                       <input class="btn btn-info btn-xs"  type="submit" value="Ver Grupo">
                      {!!Form::close()!!}
                   

                      </td>


  </tr>


@endforeach
</table> 







<br>

<br>
<a class="btn btn-success" href="{{  URL::route('grupos/crear',Auth::user()->id)  }}" role="button">Crear  Grupo</a>



<a class="btn btn-success" href="{!!  URL::to('grupos/unirse',Auth::user()->id)     !!}" role="button">Unirse a Grupo</a><br><br><br><br>

<a class="btn btn-success" href="{{ URL::route('jornadas/showo',array(Auth::user()->id, 1)) }}" role="button">QUINIELA</a>

@stop