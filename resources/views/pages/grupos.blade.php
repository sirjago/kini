@extends('master')

@section('content')





Nombre:<li>{!! $grupos[0]->nombre!!}</li>
<nav>
  <ul class="pagination">
    
    <li class="active"><a href="{!!route('grupos.show',array(Auth::user()->id, 1))!!}">1 </a></li>
     <li><a href="{!!route('grupos.show',array(Auth::user()->id, 2))!!}">2<span class="sr-only">(current)</span> </a></li>
	 <li><a href="{!!route('grupos.show',array(Auth::user()->id, 3))!!}">3</a></li>
	 <li><a href="{!!route('grupos.show',array(Auth::user()->id, 4))!!}">4</a></li>
	 <li><a href="{!!route('grupos.show',array(Auth::user()->id, 5))!!}">5</a></li>
	 <li><a href="{!!route('grupos.show',array(Auth::user()->id, 6))!!}">6</a></li>
	 <li><a href="{!!route('grupos.show',array(Auth::user()->id, 7))!!}">7</a></li>
	 <li><a href="{!!route('grupos.show',array(Auth::user()->id, 8))!!}">8</a></li>
	 <li><a href="{!!route('grupos.show',array(Auth::user()->id, 9))!!}">9</a></li>
	 <li><a href="{!!route('grupos.show',array(Auth::user()->id, 10))!!}">10</a></li>
	 <li><a href="{!!route('grupos.show',array(Auth::user()->id, 11))!!}">11</a></li>
	 <li><a href="{!!route('grupos.show',array(Auth::user()->id, 12))!!}">12</a></li>
	 <li><a href="{!!route('grupos.show',array(Auth::user()->id, 13))!!}">13</a></li>
	 <li><a href="{!!route('grupos.show',array(Auth::user()->id, 14))!!}">14</a></li>
	 <li><a href="{!!route('grupos.show',array(Auth::user()->id, 15))!!}">15</a></li>
	 <li><a href="{!!route('grupos.show',array(Auth::user()->id, 16))!!}">16</a></li>
	 <li><a href="{!!route('grupos.show',array(Auth::user()->id, 17))!!}">17</a></li>
	 <li><a href="{!!route('grupos.show',array(Auth::user()->id, 18))!!}">Total</a></li>
	 
	 
      
  </ul>
</nav>







<li>{!! $jor !!}</li>

<li>{!! $miembros !!}</li>


<?php $param2 = $jor ; ?>
@foreach ($miembros as $miembro)
<?php $aciertox  =0; ?>
<?php $param1 = $miembro->id ; ?>

<?php DB::select('CALL quini.TotalJornadaUser(?,?,@aciertox)',array($param2,$param1)); ?>
<?php $results = DB::select('select @aciertox as aciertox'); ?>
<li>{!! $miembro->username !!}</li> <li>Aciertos {!!$results[0]->aciertox!!} </li> <br> 


@endforeach

<a class="btn btn-success" href="{{ URL::route('jornadas/showo',array(Auth::user()->id, 1)) }}" role="button">QUINIELA</a>

<a class="btn btn-success" href="{{ URL::route('grupos/dejar',array(Auth::user()->id, $miembros[0]->pivot->grupos_id)) }}" role="button">ABANDONAR GRUPO</a>

@stop
 