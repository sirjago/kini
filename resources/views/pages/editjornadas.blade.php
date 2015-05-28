@extends('master')

@section('content')

<li>{!! $jornadas->jornada!!}</li>

<li>{!! $jornadas!!}</li><br><br>
<li>{!! $partidos!!}</li><br><br>

<li>{!! $equipos[0]->nombre!!}</li><br><br>

<a class="btn btn-success" href="http://localhost/quini/public/grupos/1" role="button">GRUPOS</a>
<li>{!! $equipos[1]->nombre!!}</li><br><br>

<li>{!! $partidos[1]->jornada!!}</li>
<br><br>
<li>{!! $partidos[0]->local!!}   {!! $equipos[$partidos[0]->local]->nombre!!}  {!! HTML::image($equipos[$partidos[0]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </li>

<li>{!! $partidos[0]->visitante!!}  {!! $equipos[$partidos[0]->visitante]->nombre!!} </li>
<br><br>

<li>{!! $resultados[0]->juego!!}</li>
 
 

{!!   Form::model($jornadas, array('route' => array('jornadas/update', $jornadas->id,$jornadas->jornada), 'method' => 'PUT'))           !!}




<br>

<br>

<br><br><br><br>

<table style="width:80%">
  <tr>
     {!! $a=0!!}
 @if (strtotime($partidos[0]->horario) < strtotime('now'))
	 
 
	  @if ($jornadas->juego == 1)
    <td>{!!Form::radio('j1', '1',true,array('id'=>'1','disabled' ))!!}    {!! $equipos[$partidos[0]->local]->nombre!!}</td>
  <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled' ))!!}</td>
    <td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled' ))!!}  {!! $equipos[$partidos[0]->visitante]->nombre!!} </td>
	@if ($resultados[0]->resultado == $jornadas->juego)
	 <td> Acierto  </td> 
           <?php $a++; ?> 
       @else 
	 	 <td> fallo  </td>
	 @endif
	 
	 
	 
	@elseif ($jornadas->juego == 2)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!}   {!! $equipos[$partidos[0]->local]->nombre!!} </td>
    <td>{!!Form::radio('j1', '2',true,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[0]->visitante]->nombre!!} </td>
	
	@if ($resultados[0]->resultado == $jornadas->juego)
	 <td> Acierto  </td>
  <?php $a++; ?> 
       @else 
	 	 <td> fallo  </td>
	 @endif
	 
	
	
    @elseif 	($jornadas->juego == 3)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!}   {!! $equipos[$partidos[0]->local]->nombre!!}</td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',true,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[0]->visitante]->nombre!!} </td>
	
	@if ($resultados[0]->resultado == $jornadas->juego)
	 <td> Acierto  </td>
  <?php $a++; ?> 
       @else 
	 	 <td> fallo  </td>
	 @endif
	 
	
	@else
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!}     {!! $equipos[$partidos[0]->local]->nombre!!}</td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled'))!!}   {!! $equipos[$partidos[0]->visitante]->nombre!!} </td>
	
	@if ($resultados[0]->resultado == $jornadas->juego)
	 <td> Acierto  </td>
       @else 
	 	 <td> fallo</td>
	 @endif
	 
	
	
    @endif
	
	
	
@elseif ($jornadas->juego == 1)
    <td>{!!Form::radio('j1', '1',true,array('id'=>'1'))!!}  {!! $equipos[$partidos[0]->local]->nombre!!} </td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[0]->visitante]->nombre!!} </td>
@elseif ($jornadas->juego == 2)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[0]->local]->nombre!!}  </td>
    <td>{!!Form::radio('j1', '2',true,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[0]->visitante]->nombre!!}   </td>
@elseif 	($jornadas->juego == 3)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[0]->local]->nombre!!}  </td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j1', '3',true,array('id'=>'3'))!!} {!! $equipos[$partidos[0]->visitante]->nombre!!}  </td>
@else
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[0]->local]->nombre!!} </td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[0]->visitante]->nombre!!}   </td>
@endif


  <tr>
  @if (strtotime($partidos[1]->horario) < strtotime('now'))
	  @if ($jornadas->juego2 == 1)
    <td>{!!Form::radio('j1', '1',true,array('id'=>'1','disabled' ))!!}  {!! $equipos[$partidos[1]->local]->nombre!!}   </td>
  <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled' ))!!}</td>
    <td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled' ))!!}  {!! $equipos[$partidos[1]->visitante]->nombre!!}  </td>
	@elseif ($jornadas->juego2 == 2)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!}  {!! $equipos[$partidos[1]->local]->nombre!!}   </td>
    <td>{!!Form::radio('j1', '2',true,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[1]->visitante]->nombre!!}    </td>
@elseif 	($jornadas->juego2 == 3)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!}   {!! $equipos[$partidos[1]->local]->nombre!!}   </td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',true,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[1]->visitante]->nombre!!}   </td>
	@else
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!}  {!! $equipos[$partidos[1]->local]->nombre!!}    </td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled'))!!}  {!! $equipos[$partidos[1]->visitante]->nombre!!}  </td>
@endif
  
  
   @elseif ($jornadas->juego2 == 1)
    <td>{!!Form::radio('j2', '1',true,array('id'=>'1'))!!}  {!! $equipos[$partidos[1]->local]->nombre!!}   </td>
    <td>{!!Form::radio('j2', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j2', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[1]->visitante]->nombre!!}   </td>
	@elseif ($jornadas->juego2 == 2)
    <td>{!!Form::radio('j2', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[1]->local]->nombre!!}   </td>
    <td>{!!Form::radio('j2', '2',true,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j2', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[1]->visitante]->nombre!!}   </td>
@elseif 	($jornadas->juego2 == 3)
    <td>{!!Form::radio('j2', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[1]->local]->nombre!!}   </td>
    <td>{!!Form::radio('j2', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j2', '3',true,array('id'=>'3'))!!}  {!! $equipos[$partidos[1]->visitante]->nombre!!}  </td>
	@else
    <td>{!!Form::radio('j2', '1',false,array('id'=>'1'))!!}   {!! $equipos[$partidos[1]->local]->nombre!!}  </td>
    <td>{!!Form::radio('j2', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j2', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[1]->visitante]->nombre!!}   </td>
@endif
  </tr>
  
  
  <tr>
  @if (strtotime($partidos[2]->horario) < strtotime('now'))
	  @if ($jornadas->juego3 == 1)
    <td>{!!Form::radio('j1', '1',true,array('id'=>'1','disabled' ))!!} {!! $equipos[$partidos[2]->local]->nombre!!}  </td>
  <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled' ))!!}</td>
    <td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled' ))!!} {!! $equipos[$partidos[2]->visitante]->nombre!!}</td>
	@elseif ($jornadas->juego3 == 2)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!} {!! $equipos[$partidos[2]->local]->nombre!!} </td>
    <td>{!!Form::radio('j1', '2',true,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled'))!!}  {!! $equipos[$partidos[2]->visitante]->nombre!!}</td>
@elseif 	($jornadas->juego3 == 3)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!}  {!! $equipos[$partidos[2]->local]->nombre!!} </td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',true,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[2]->visitante]->nombre!!}   </td>
	@else
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!}  {!! $equipos[$partidos[2]->local]->nombre!!}  </td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[2]->visitante]->nombre!!}   </td>
@endif
  
  
  
  
   @elseif ($jornadas->juego3 == 1)
    <td>{!!Form::radio('j3', '1',true,array('id'=>'1'))!!}  {!! $equipos[$partidos[2]->local]->nombre!!}  </td>
    <td>{!!Form::radio('j3', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j3', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[2]->visitante]->nombre!!}  </td>
	@elseif ($jornadas->juego3 == 2)
    <td>{!!Form::radio('j3', '1',false,array('id'=>'1'))!!}   {!! $equipos[$partidos[2]->local]->nombre!!}  </td>
    <td>{!!Form::radio('j3', '2',true,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j3', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[2]->visitante]->nombre!!}   </td>
@elseif 	($jornadas->juego3 == 3)
    <td>{!!Form::radio('j3', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[2]->local]->nombre!!}  </td>
    <td>{!!Form::radio('j3', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j3', '3',true,array('id'=>'3'))!!} {!! $equipos[$partidos[2]->visitante]->nombre!!}   </td>
	@else
    <td>{!!Form::radio('j3', '1',false,array('id'=>'1'))!!}   {!! $equipos[$partidos[2]->local]->nombre!!} </td>
    <td>{!!Form::radio('j3', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j3', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[2]->visitante]->nombre!!}   </td>
@endif
  </tr>
  
   <tr>
   @if (strtotime($partidos[3]->horario) < strtotime('now'))
	  @if ($jornadas->juego4 == 1)
    <td>{!!Form::radio('j1', '1',true,array('id'=>'1','disabled' ))!!} {!! $equipos[$partidos[3]->local]->nombre!!}  </td>
  <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled' ))!!}</td>
    <td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled' ))!!}   {!! $equipos[$partidos[3]->visitante]->nombre!!}  </td>
	@elseif ($jornadas->juego4 == 2)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!}  {!! $equipos[$partidos[3]->local]->nombre!!} </td>
    <td>{!!Form::radio('j1', '2',true,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled'))!!}  {!! $equipos[$partidos[3]->visitante]->nombre!!}  </td>
@elseif 	($jornadas->juego4 == 3)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!}  {!! $equipos[$partidos[3]->local]->nombre!!}   </td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',true,array('id'=>'3','disabled'))!!}  {!! $equipos[$partidos[3]->visitante]->nombre!!}  </td>
	@else
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!}  {!! $equipos[$partidos[3]->local]->nombre!!}   </td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled'))!!}  {!! $equipos[$partidos[3]->visitante]->nombre!!} </td>
@endif
   
   
   @elseif ($jornadas->juego4 == 1)
    <td>{!!Form::radio('j4', '1',true,array('id'=>'1'))!!}  {!! $equipos[$partidos[3]->local]->nombre!!}  </td>
    <td>{!!Form::radio('j4', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j4', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[3]->visitante]->nombre!!}  </td>
	@elseif ($jornadas->juego4 == 2)
    <td>{!!Form::radio('j4', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[3]->local]->nombre!!}  </td>
    <td>{!!Form::radio('j4', '2',true,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j4', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[3]->visitante]->nombre!!} </td>
@elseif 	($jornadas->juego4 == 3)
    <td>{!!Form::radio('j4', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[3]->local]->nombre!!}  </td>
    <td>{!!Form::radio('j4', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j4', '3',true,array('id'=>'3'))!!} {!! $equipos[$partidos[3]->visitante]->nombre!!}  </td>
	@else
    <td>{!!Form::radio('j4', '1',false,array('id'=>'1'))!!}   {!! $equipos[$partidos[3]->local]->nombre!!}  </td>
    <td>{!!Form::radio('j4', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j4', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[3]->visitante]->nombre!!}  </td>
@endif
  </tr>
  
   <tr>
   @if (strtotime($partidos[4]->horario) < strtotime('now'))
	  @if ($jornadas->juego5 == 1)
    <td>{!!Form::radio('j1', '1',true,array('id'=>'1','disabled' ))!!}   {!! $equipos[$partidos[4]->local]->nombre!!}     </td>
  <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled' ))!!}</td>
    <td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled' ))!!}  {!! $equipos[$partidos[4]->visitante]->nombre!!} </td>
	@elseif ($jornadas->juego5 == 2)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!}  {!! $equipos[$partidos[4]->local]->nombre!!}      </td>
    <td>{!!Form::radio('j1', '2',true,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[4]->visitante]->nombre!!}   </td>
@elseif 	($jornadas->juego5 == 3)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!}  {!! $equipos[$partidos[4]->local]->nombre!!}      </td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',true,array('id'=>'3','disabled'))!!}  {!! $equipos[$partidos[4]->visitante]->nombre!!} </td>
	@else
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!}   {!! $equipos[$partidos[4]->local]->nombre!!}    </td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[4]->visitante]->nombre!!}    </td>
@endif
   
   
   
   @elseif ($jornadas->juego5 == 1)
    <td>{!!Form::radio('j5', '1',true,array('id'=>'1'))!!}  {!! $equipos[$partidos[4]->local]->nombre!!}      </td>
    <td>{!!Form::radio('j5', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j5', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[4]->visitante]->nombre!!}   </td>
	@elseif ($jornadas->juego5 == 2)
    <td>{!!Form::radio('j5', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[4]->local]->nombre!!}     </td>
    <td>{!!Form::radio('j5', '2',true,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j5', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[4]->visitante]->nombre!!}   </td>
@elseif 	($jornadas->juego5 == 3)
    <td>{!!Form::radio('j5', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[4]->local]->nombre!!}     </td>
    <td>{!!Form::radio('j5', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j5', '3',true,array('id'=>'3'))!!} {!! $equipos[$partidos[4]->visitante]->nombre!!}   </td>
	@else
    <td>{!!Form::radio('j5', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[4]->local]->nombre!!}     </td>
    <td>{!!Form::radio('j5', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j5', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[4]->visitante]->nombre!!}  </td>
@endif
  </tr>
  
    <tr>
	@if (strtotime($partidos[5]->horario) < strtotime('now'))
	  @if ($jornadas->juego6 == 1)
    <td>{!!Form::radio('j1', '1',true,array('id'=>'1','disabled' ))!!}  {!! $equipos[$partidos[5]->local]->nombre!!}  </td>
  <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled' ))!!}</td>
    <td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled' ))!!}  {!! $equipos[$partidos[5]->visitante]->nombre!!}   </td>
	@elseif ($jornadas->juego6 == 2)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!}  {!! $equipos[$partidos[5]->local]->nombre!!}   </td>
    <td>{!!Form::radio('j1', '2',true,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled'))!!}  {!! $equipos[$partidos[5]->visitante]->nombre!!}  </td>
@elseif 	($jornadas->juego6 == 3)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!} {!! $equipos[$partidos[5]->local]->nombre!!}   </td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',true,array('id'=>'3','disabled'))!!}  {!! $equipos[$partidos[5]->visitante]->nombre!!}  </td>
	@else
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!} {!! $equipos[$partidos[5]->local]->nombre!!}    </td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[5]->visitante]->nombre!!}   </td>
@endif
	
	
   @elseif ($jornadas->juego6 == 1)
    <td>{!!Form::radio('j6', '1',true,array('id'=>'1'))!!}  {!! $equipos[$partidos[5]->local]->nombre!!}  </td>
    <td>{!!Form::radio('j6', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j6', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[5]->visitante]->nombre!!} </td>
	@elseif ($jornadas->juego6 == 2)
    <td>{!!Form::radio('j6', '1',false,array('id'=>'1'))!!} {!! $equipos[$partidos[5]->local]->nombre!!}    </td>
    <td>{!!Form::radio('j6', '2',true,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j6', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[5]->visitante]->nombre!!}   </td>
@elseif 	($jornadas->juego6 == 3)
    <td>{!!Form::radio('j6', '1',false,array('id'=>'1'))!!} {!! $equipos[$partidos[5]->local]->nombre!!}    </td>
    <td>{!!Form::radio('j6', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j6', '3',true,array('id'=>'3'))!!}  {!! $equipos[$partidos[5]->visitante]->nombre!!}   </td>
	@else
    <td>{!!Form::radio('j6', '1',false,array('id'=>'1'))!!} {!! $equipos[$partidos[5]->local]->nombre!!}   </td>
    <td>{!!Form::radio('j6', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j6', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[5]->visitante]->nombre!!}   </td>
@endif
  </tr>
  
  <tr>
  @if (strtotime($partidos[6]->horario) < strtotime('now'))
	  @if ($jornadas->juego7 == 1)
    <td>{!!Form::radio('j1', '1',true,array('id'=>'1','disabled' ))!!} {!! $equipos[$partidos[6]->local]->nombre!!}    </td>
  <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled' ))!!}</td>
    <td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled' ))!!}  {!! $equipos[$partidos[6]->visitante]->nombre!!}  </td>
	@elseif ($jornadas->juego7 == 2)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!} {!! $equipos[$partidos[6]->local]->nombre!!}     </td>
    <td>{!!Form::radio('j1', '2',true,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[6]->visitante]->nombre!!} </td>
@elseif 	($jornadas->juego7 == 3)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!} {!! $equipos[$partidos[6]->local]->nombre!!}   </td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',true,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[6]->visitante]->nombre!!}  </td>
	@else
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!}  {!! $equipos[$partidos[6]->local]->nombre!!}   </td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[6]->visitante]->nombre!!}  </td>
@endif
  
   @elseif ($jornadas->juego7 == 1)
    <td>{!!Form::radio('j7', '1',true,array('id'=>'1'))!!}  {!! $equipos[$partidos[6]->local]->nombre!!}  </td>
    <td>{!!Form::radio('j7', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j7', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[6]->visitante]->nombre!!}  </td>
	@elseif ($jornadas->juego7 == 2)
    <td>{!!Form::radio('j7', '1',false,array('id'=>'1'))!!} {!! $equipos[$partidos[6]->local]->nombre!!}   </td>
    <td>{!!Form::radio('j7', '2',true,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j7', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[6]->visitante]->nombre!!}  </td>
@elseif 	($jornadas->juego7 == 3)
    <td>{!!Form::radio('j7', '1',false,array('id'=>'1'))!!} {!! $equipos[$partidos[6]->local]->nombre!!}    </td>
    <td>{!!Form::radio('j7', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j7', '3',true,array('id'=>'3'))!!} {!! $equipos[$partidos[6]->visitante]->nombre!!}  </td>
	@else
    <td>{!!Form::radio('j7', '1',false,array('id'=>'1'))!!} {!! $equipos[$partidos[6]->local]->nombre!!}    </td>
    <td>{!!Form::radio('j7', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j7', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[6]->visitante]->nombre!!}  </td>
@endif
  </tr>
  
  
  <tr>
  @if (strtotime($partidos[7]->horario) < strtotime('now'))
	  @if ($jornadas->juego8 == 1)
    <td>{!!Form::radio('j1', '1',true,array('id'=>'1','disabled' ))!!} {!! $equipos[$partidos[7]->local]->nombre!!}    </td>
  <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled' ))!!}</td>
    <td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled' ))!!}{!! $equipos[$partidos[7]->visitante]->nombre!!} </td>
	@elseif ($jornadas->juego8 == 2)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!} {!! $equipos[$partidos[7]->local]->nombre!!}      </td>
    <td>{!!Form::radio('j1', '2',true,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled'))!!}  {!! $equipos[$partidos[7]->visitante]->nombre!!}  </td>
@elseif 	($jornadas->juego8 == 3)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!} {!! $equipos[$partidos[7]->local]->nombre!!}     </td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',true,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[7]->visitante]->nombre!!}  </td>
	@else
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!} {!! $equipos[$partidos[7]->local]->nombre!!}     </td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled'))!!}   {!! $equipos[$partidos[7]->visitante]->nombre!!}</td>
@endif
  
  
  
  
   @elseif ($jornadas->juego8 == 1)
    <td>{!!Form::radio('j8', '1',true,array('id'=>'1'))!!}  {!! $equipos[$partidos[7]->local]->nombre!!}     </td>
    <td>{!!Form::radio('j8', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j8', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[7]->visitante]->nombre!!}  </td>
	@elseif ($jornadas->juego8 == 2)
    <td>{!!Form::radio('j8', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[7]->local]->nombre!!}    </td>
    <td>{!!Form::radio('j8', '2',true,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j8', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[7]->visitante]->nombre!!}  </td>
@elseif 	($jornadas->juego8 == 3)
    <td>{!!Form::radio('j8', '1',false,array('id'=>'1'))!!} {!! $equipos[$partidos[7]->local]->nombre!!}      </td>
    <td>{!!Form::radio('j8', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j8', '3',true,array('id'=>'3'))!!} {!! $equipos[$partidos[7]->visitante]->nombre!!} </td>
	@else
    <td>{!!Form::radio('j8', '1',false,array('id'=>'1'))!!} {!! $equipos[$partidos[7]->local]->nombre!!}      </td>
    <td>{!!Form::radio('j8', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j8', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[7]->visitante]->nombre!!} </td>
@endif
  </tr>
  
  
  <tr>
  @if (strtotime($partidos[8]->horario) < strtotime('now'))
	  @if ($jornadas->juego9 == 1)
    <td>{!!Form::radio('j1', '1',true,array('id'=>'1','disabled' ))!!}  {!! $equipos[$partidos[8]->local]->nombre!!}   </td>
  <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled' ))!!}</td>
    <td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled' ))!!}  {!! $equipos[$partidos[8]->visitante]->nombre!!} </td>
	@elseif ($jornadas->juego9 == 2)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!} {!! $equipos[$partidos[8]->local]->nombre!!}  </td>
    <td>{!!Form::radio('j1', '2',true,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[8]->visitante]->nombre!!}  </td>
@elseif 	($jornadas->juego9 == 3)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!}   {!! $equipos[$partidos[8]->local]->nombre!!} </td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',true,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[8]->visitante]->nombre!!} </td>
	@else
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!} {!! $equipos[$partidos[8]->local]->nombre!!}   </td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[8]->visitante]->nombre!!}  </td>
@endif
  
  
   @elseif ($jornadas->juego9 == 1)
    <td>{!!Form::radio('j9', '1',true,array('id'=>'1'))!!}   {!! $equipos[$partidos[8]->local]->nombre!!} </td>
    <td>{!!Form::radio('j9', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j9', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[8]->visitante]->nombre!!}  </td>
	@elseif ($jornadas->juego9 == 2)
    <td>{!!Form::radio('j9', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[8]->local]->nombre!!} </td>
    <td>{!!Form::radio('j9', '2',true,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j9', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[8]->visitante]->nombre!!}</td>
@elseif 	($jornadas->juego9 == 3)
    <td>{!!Form::radio('j9', '1',false,array('id'=>'1'))!!} {!! $equipos[$partidos[8]->local]->nombre!!}  </td>
    <td>{!!Form::radio('j9', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j9', '3',true,array('id'=>'3'))!!} {!! $equipos[$partidos[8]->visitante]->nombre!!} </td>
	@else
    <td>{!!Form::radio('j9', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[8]->local]->nombre!!} </td>
    <td>{!!Form::radio('j9', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j9', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[8]->visitante]->nombre!!}  </td>
@endif
  </tr>
  

  
  

  
  
   
</table>
  Total {!!  $a !!}
  
  <br><br>

    <td>{!!Form::radio('j10', '1',false,array('id'=>'1','disabled' ))!!}</td>
    <td>{!!Form::radio('j10', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j10', '3',false,array('id'=>'3'))!!}</td>


<br><br><br><br>
{!!Form::submit('Actualizar') !!}
{!!Form::close()!!}

<nav>
  <ul class="pagination">
    
    <li class="active"><a href="{!!route('jornadas/showo',array(Auth::user()->id, 1))!!}">1 </a></li>
     <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 2))!!}">2<span class="sr-only">(current)</span> </a></li>
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
 