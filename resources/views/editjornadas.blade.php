@extends('master')

@section('content')



<li>{!! $jornadas!!}</li>


{!!Form::open(['route' => 'jornadas.guardar']) !!}




<br>

<br>

<br><br><br><br>

<table style="width:80%">
  <tr>
   @if ($jornadas->juego == 1)
    <td>{!!Form::radio('j1', '1',true,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3'))!!}</td>
	@elseif ($jornadas->juego == 2)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j1', '2',true,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3'))!!}</td>
@elseif 	($jornadas->juego == 3)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j1', '3',true,array('id'=>'3'))!!}</td>
	@else
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3'))!!}</td>
@endif


  <tr>
   @if ($jornadas->juego2 == 1)
    <td>{!!Form::radio('j2', '1',true,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j2', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j2', '3',false,array('id'=>'3'))!!}</td>
	@elseif ($jornadas->juego2 == 2)
    <td>{!!Form::radio('j2', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j2', '2',true,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j2', '3',false,array('id'=>'3'))!!}</td>
@elseif 	($jornadas->juego2 == 3)
    <td>{!!Form::radio('j2', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j2', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j2', '3',true,array('id'=>'3'))!!}</td>
	@else
    <td>{!!Form::radio('j2', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j2', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j2', '3',false,array('id'=>'3'))!!}</td>
@endif
  </tr>
  
  
  <tr>
   @if ($jornadas->juego3 == 1)
    <td>{!!Form::radio('j3', '1',true,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j3', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j3', '3',false,array('id'=>'3'))!!}</td>
	@elseif ($jornadas->juego3 == 2)
    <td>{!!Form::radio('j3', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j3', '2',true,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j3', '3',false,array('id'=>'3'))!!}</td>
@elseif 	($jornadas->juego3 == 3)
    <td>{!!Form::radio('j3', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j3', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j3', '3',true,array('id'=>'3'))!!}</td>
	@else
    <td>{!!Form::radio('j3', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j3', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j3', '3',false,array('id'=>'3'))!!}</td>
@endif
  </tr>
  
   <tr>
   @if ($jornadas->juego4 == 1)
    <td>{!!Form::radio('j4', '1',true,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j4', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j4', '3',false,array('id'=>'3'))!!}</td>
	@elseif ($jornadas->juego4 == 2)
    <td>{!!Form::radio('j4', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j4', '2',true,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j4', '3',false,array('id'=>'3'))!!}</td>
@elseif 	($jornadas->juego4 == 3)
    <td>{!!Form::radio('j4', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j4', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j4', '3',true,array('id'=>'3'))!!}</td>
	@else
    <td>{!!Form::radio('j4', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j4', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j4', '3',false,array('id'=>'3'))!!}</td>
@endif
  </tr>
  
   <tr>
   @if ($jornadas->juego5 == 1)
    <td>{!!Form::radio('j5', '1',true,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j5', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j5', '3',false,array('id'=>'3'))!!}</td>
	@elseif ($jornadas->juego5 == 2)
    <td>{!!Form::radio('j5', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j5', '2',true,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j5', '3',false,array('id'=>'3'))!!}</td>
@elseif 	($jornadas->juego5 == 3)
    <td>{!!Form::radio('j5', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j5', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j5', '3',true,array('id'=>'3'))!!}</td>
	@else
    <td>{!!Form::radio('j5', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j5', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j5', '3',false,array('id'=>'3'))!!}</td>
@endif
  </tr>
  
    <tr>
   @if ($jornadas->juego6 == 1)
    <td>{!!Form::radio('j6', '1',true,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j6', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j6', '3',false,array('id'=>'3'))!!}</td>
	@elseif ($jornadas->juego6 == 2)
    <td>{!!Form::radio('j6', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j6', '2',true,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j6', '3',false,array('id'=>'3'))!!}</td>
@elseif 	($jornadas->juego6 == 3)
    <td>{!!Form::radio('j6', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j6', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j6', '3',true,array('id'=>'3'))!!}</td>
	@else
    <td>{!!Form::radio('j6', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j6', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j6', '3',false,array('id'=>'3'))!!}</td>
@endif
  </tr>
  
  <tr>
   @if ($jornadas->juego7 == 1)
    <td>{!!Form::radio('j7', '1',true,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j7', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j7', '3',false,array('id'=>'3'))!!}</td>
	@elseif ($jornadas->juego7 == 2)
    <td>{!!Form::radio('j7', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j7', '2',true,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j7', '3',false,array('id'=>'3'))!!}</td>
@elseif 	($jornadas->juego7 == 3)
    <td>{!!Form::radio('j7', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j7', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j7', '3',true,array('id'=>'3'))!!}</td>
	@else
    <td>{!!Form::radio('j7', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j7', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j7', '3',false,array('id'=>'3'))!!}</td>
@endif
  </tr>
  
  
  <tr>
   @if ($jornadas->juego8 == 1)
    <td>{!!Form::radio('j8', '1',true,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j8', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j8', '3',false,array('id'=>'3'))!!}</td>
	@elseif ($jornadas->juego8 == 2)
    <td>{!!Form::radio('j8', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j8', '2',true,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j8', '3',false,array('id'=>'3'))!!}</td>
@elseif 	($jornadas->juego8 == 3)
    <td>{!!Form::radio('j8', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j8', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j8', '3',true,array('id'=>'3'))!!}</td>
	@else
    <td>{!!Form::radio('j8', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j8', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j8', '3',false,array('id'=>'3'))!!}</td>
@endif
  </tr>
  
  
  <tr>
   @if ($jornadas->juego9 == 1)
    <td>{!!Form::radio('j9', '1',true,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j9', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j9', '3',false,array('id'=>'3'))!!}</td>
	@elseif ($jornadas->juego9 == 2)
    <td>{!!Form::radio('j9', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j9', '2',true,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j9', '3',false,array('id'=>'3'))!!}</td>
@elseif 	($jornadas->juego9 == 3)
    <td>{!!Form::radio('j9', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j9', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j9', '3',true,array('id'=>'3'))!!}</td>
	@else
    <td>{!!Form::radio('j9', '1',false,array('id'=>'1'))!!}</td>
    <td>{!!Form::radio('j9', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j9', '3',false,array('id'=>'3'))!!}</td>
@endif
  </tr>
  
  
  
  
  
   
</table>






{!!Form::submit('Actualizar') !!}
{!!Form::close()!!}

<nav>
  <ul class="pagination">
    
    <li class="active"><a href="{!!route('jornadas/showo',array(Auth::user()->id, 1))!!}">1 <span class="sr-only">(current)</span></a></li>
     <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 2))!!}">2</a></li>
	 <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 3))!!}">3</a></li>
	 <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 4))!!}">4</a></li>
	 <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 5))!!}">5</a></li>
	 <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 6))!!}">6</a></li>
	 <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 7))!!}">7</a></li>
	 <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 8))!!}">8</a></li>
	 <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 9))!!}">9</a></li>
	 <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 10))!!}">10</a></li>
	 <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 11))!!}">11</a></li>
	 <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 12))!!}">12</a></li>
	 <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 13))!!}">13</a></li>
	 <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 14))!!}">14</a></li>
	 <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 15))!!}">15</a></li>
	 <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 16))!!}">16</a></li>
	 <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 17))!!}">17</a></li>
	 
	 
	 
      
  </ul>
</nav>

@stop
 