@extends('master')

@section('content')


Duenio GRUPOS
<br><br><br><br>

Nombre Del Grupo:<li>{!! $grupos[0]->nombre!!}</li>

Clave del Grupo: <li>{!! $grupos[0]->clave!!}</li>

GRUPID: <li>{!! $miembros[0]->pivot->grupos_id!!}</li>



<nav>
  <ul class="pagination">
    
    <li><a href="{!!route('grupos.show',array(Auth::user()->id, 1))!!}">1 </a></li>
     <li><a href="{!!route('grupos.show',array(Auth::user()->id, 2))!!}">2 </a></li>
	 <li><a  href="{!!route('grupos.show',array(Auth::user()->id, 3))!!}">3</a></li>
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
	 <li class="active" ><a href="{!!route('grupos.total',array(Auth::user()->id, 18))!!}">Total</a></li>
	 
	 
      
  </ul>
</nav>








<li>{!! $miembros !!}</li>

{{-- Variables --}}
<?php $z  =0; ?>
<?php $y  =0; ?>

<?php $resta =Array(); ?>
<?php $arrai =Array(); ?>
<?php $param2 = $jor ; ?>

{{-- Call a SP y asginacion de valors a arrays--}}
@foreach ($miembros as $miembro)
<?php $totalo  =0; ?>
<?php $param1 = $miembro->id ; ?>
<?php DB::select('CALL quini.TotalFinalUser(?,@totalo,@desempax)',array($param1)); ?>

<?php $results = DB::select('select @totalo as totalo'); ?>

<?php $results2 = DB::select('select @desempax as desempatex'); ?>
<li>{!! $miembro->username !!}</li> <li>Aciertos {!!$results[0]->totalo!!} </li> <br> 


<?php $arrai[$z] = Collect($results[0]->totalo); ?>
<?php $usernam [$z] =Collect( $miembro->username ); ?>
<?php $arrai2 [$z] =Collect( $results2[0]->desempatex ); ?>
<?php $z  =$z+1; ?>

@endforeach

{{-- SORT de ambos arrays --}}
<?php

array_multisort($arrai2, SORT_DESC ,$usernam,$arrai );

var_dump($arrai);
var_dump($usernam);
var_dump($arrai2);
?>

<?php $arrai= new Illuminate\Support\Collection($arrai);?>

{{-- Formato para mostrar datos --}}
@foreach ($arrai as $arra)



<?php $resta[$y]  = $arrai2[$y]->first() - $arrai[$y]->First(); ?>
 

   {!!$arrai[$y]->first()!!} {!!$usernam[$y]->first()!!} Criterios de desempate Acertados  {!!$resta[$y]!!}<br>  



<?php $y  =$y+1; ?>
@endforeach
<br> <br> <br> <br> 
@foreach ($arrai as $arra)

{!! $arra!!} <br> 


@endforeach
@foreach ($usernam as $usr)
{!! $usr!!} <br> 

@endforeach








<br> <br> <br> 
<a class="btn btn-success" href="{{ URL::route('jornadas/showo',array(Auth::user()->id, 1)) }}" role="button">QUINIELA</a>

<a class="btn btn-success" href="{{ URL::route('grupos/dejar',array(Auth::user()->id, $miembros[0]->pivot->grupos_id)) }}" role="button">ABANDONAR GRUPO</a>

@stop
 