@extends('master')

@section('content')



<li>{!! $jornadas!!}</li><br><br>
<li>{!! $partidos!!}</li><br><br>

<li>{!! $equipos[0]->nombre!!}</li><br><br>

<a class="btn btn-success" href="{{ URL::route('grupos.show',array(Auth::user()->id, 1)) }}" role="button">GRUPOS</a>



<br><br>

 

{!!   Form::model($jornadas, array('route' => array('jornadas/update', $jornadas->id,$jornadas->jornada), 'method' => 'PUT'))           !!}




<br>

<br>




 

Jornada: <li>{!! $jornadas->jornada!!}</li>
<br><br><br><br>
  <?php $a=0; ?>
<table style="width:80%">
  <tr>
    {{-- Radios para el primer partido analizando si ya es partido pasado --}}
 @if (strtotime($partidos[0]->horario) < strtotime('now'))
	 
 {{-- Radios alternativos para no perder el valor deshabilitado en el update --}}
	  @if ($jornadas->juego1 == 1)
    <td>{!!Form::radio('dj1', '1',true,array('id'=>'1','disabled' ))!!}  {!!Form::radio('j1', '1',true,array('id'=>'1','hidden' ))!!}   {!! $equipos[$partidos[0]->local]->nombre!!} {!! HTML::image($equipos[$partidos[0]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
  <td>{!!Form::radio('dj1', '2',false,array('id'=>'2','disabled' ))!!}  {!!Form::radio('j1', '2',false,array('id'=>'2','hidden' ))!!}</td>
    <td>{!!Form::radio('dj1', '3',false,array('id'=>'3','disabled' ))!!} {!!Form::radio('j1', '3',false,array('id'=>'3','hidden' ))!!} {!! $equipos[$partidos[0]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[0]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
	
   {{-- Valida que tenga datos de los resultados que vienen de la BD --}}
  @if (isset($resultados[0]))
  @if ($resultados[0]->resultado == $jornadas->juego1)
	 <td>{!!$resultados[0]->ML!!} - {!!$resultados[0]->MV!!} Acierto  </td> 
           <?php $a++; ?> 
       @else 
	 	 <td>{!!$resultados[0]->ML!!} - {!!$resultados[0]->MV!!}  Fallo  </td>
	 @endif
   @endif
	 
	 
	 
	@elseif ($jornadas->juego1 == 2)
    <td>{!!Form::radio('dj1', '1',false,array('id'=>'1','disabled'))!!}  {!!Form::radio('j1', '1',false,array('id'=>'1','hidden'))!!}  {!! $equipos[$partidos[0]->local]->nombre!!} {!! HTML::image($equipos[$partidos[0]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('dj1', '2',true,array('id'=>'2','disabled'))!!}{!!Form::radio('j1', '2',true,array('id'=>'2','hidden'))!!}</td>
	<td>{!!Form::radio('dj1', '3',false,array('id'=>'3','disabled'))!!} {!!Form::radio('j1', '3',false,array('id'=>'3','hidden'))!!} {!! $equipos[$partidos[0]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[0]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
	
  @if (isset($resultados[0]))
	@if ($resultados[0]->resultado == $jornadas->juego1)
	 <td>{!!$resultados[0]->ML!!} - {!!$resultados[0]->MV!!}  Acierto  </td>
  <?php $a++; ?> 
       @else 
	 	 <td>{!!$resultados[0]->ML!!} - {!!$resultados[0]->MV!!}  fallo  </td>
	 @endif
	  @endif
	
	
    @elseif 	($jornadas->juego1 == 3)
    <td>{!!Form::radio('dj1', '1',false,array('id'=>'1','disabled'))!!}   {!!Form::radio('j1', '1',false,array('id'=>'1','hidden'))!!} {!! $equipos[$partidos[0]->local]->nombre!!} {!! HTML::image($equipos[$partidos[0]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('dj1', '2',false,array('id'=>'2','disabled'))!!}   {!!Form::radio('j1', '2',false,array('id'=>'2','hidden'))!!}</td>
	<td>{!!Form::radio('dj1', '3',true,array('id'=>'3','disabled'))!!} {!!Form::radio('j1', '3',true,array('id'=>'3','hidden'))!!} {!! $equipos[$partidos[0]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[0]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>

@if (isset($resultados[0]))
	@if ($resultados[0]->resultado == $jornadas->juego1)
	 <td>{!!$resultados[0]->ML!!} - {!!$resultados[0]->MV!!}  Acierto  </td>
  <?php $a++; ?> 
       @else 
	 	 <td>{!!$resultados[0]->ML!!} - {!!$resultados[0]->MV!!}  fallo  </td>
	 @endif
   @endif
   
	 
	{{-- Radios para cuando user no ingreso partido y es partido caduco --}}
	@else
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!}     {!! $equipos[$partidos[0]->local]->nombre!!} {!! HTML::image($equipos[$partidos[0]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled'))!!}   {!! $equipos[$partidos[0]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[0]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
	
  @if (isset($resultados[0]))
	@if ($resultados[0]->resultado == $jornadas->juego1)
	 <td>{!!$resultados[0]->ML!!} - {!!$resultados[0]->MV!!}  Acierto  </td>
       @else 
	 	 <td>{!!$resultados[0]->ML!!} - {!!$resultados[0]->MV!!}  fallo</td>
	 @endif
	 @endif
	
	
    @endif
	
	{{-- Radios para cuando el partido es vigente y puede ser actualizado --}}
	
@elseif ($jornadas->juego1 == 1)
    <td>{!!Form::radio('j1', '1',true,array('id'=>'1'))!!}  {!! $equipos[$partidos[0]->local]->nombre!!} {!! HTML::image($equipos[$partidos[0]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[0]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[0]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@elseif ($jornadas->juego1 == 2)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[0]->local]->nombre!!} {!! HTML::image($equipos[$partidos[0]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j1', '2',true,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[0]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[0]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@elseif 	($jornadas->juego1 == 3)
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[0]->local]->nombre!!}  {!! HTML::image($equipos[$partidos[0]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j1', '3',true,array('id'=>'3'))!!} {!! $equipos[$partidos[0]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[0]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
@else
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[0]->local]->nombre!!} {!! HTML::image($equipos[$partidos[0]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[0]->visitante]->nombre!!}   {!! HTML::image($equipos[$partidos[0]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
@endif

 </tr>


{{-- Radios para el juego 2--}}

  <tr>
  @if (strtotime($partidos[1]->horario) < strtotime('now'))

	  @if ($jornadas->juego2 == 1)
    <td>{!!Form::radio('dj2', '1',true,array('id'=>'1','disabled' ))!!}  {!!Form::radio('j2', '1',true,array('id'=>'1','hidden' ))!!}   {!! $equipos[$partidos[1]->local]->nombre!!} {!! HTML::image($equipos[$partidos[1]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
  <td>{!!Form::radio('dj2', '2',false,array('id'=>'2','disabled' ))!!}  {!!Form::radio('j2', '2',false,array('id'=>'2','hidden' ))!!}</td>
    <td>{!!Form::radio('dj2', '3',false,array('id'=>'3','disabled' ))!!} {!!Form::radio('j2', '3',false,array('id'=>'3','hidden' ))!!} {!! $equipos[$partidos[1]->visitante]->nombre!!}{!! HTML::image($equipos[$partidos[1]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
  
   @if (isset($resultados[1]))
  @if ($resultados[1]->resultado == $jornadas->juego2)
   <td>{!!$resultados[1]->ML!!} - {!!$resultados[1]->MV!!}  Acierto  </td> 
           <?php $a++; ?> 
       @else 
     <td>{!!$resultados[1]->ML!!} - {!!$resultados[1]->MV!!} fallo  </td>
   @endif
   @endif
   
   
  @elseif ($jornadas->juego2 == 2)
    <td>{!!Form::radio('dj2', '1',false,array('id'=>'1','disabled'))!!}  {!!Form::radio('j2', '1',false,array('id'=>'1','hidden'))!!}  {!! $equipos[$partidos[1]->local]->nombre!!}  {!! HTML::image($equipos[$partidos[1]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('dj2', '2',true,array('id'=>'2','disabled'))!!}{!!Form::radio('j2', '2',true,array('id'=>'2','hidden'))!!}</td>
  <td>{!!Form::radio('dj2', '3',false,array('id'=>'3','disabled'))!!} {!!Form::radio('j2', '3',false,array('id'=>'3','hidden'))!!} {!! $equipos[$partidos[1]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[1]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
  
     @if (isset($resultados[1]))
  @if ($resultados[1]->resultado == $jornadas->juego2)
   <td>{!!$resultados[1]->ML!!} - {!!$resultados[1]->MV!!} Acierto  </td>
  <?php $a++; ?> 
       @else 
     <td>{!!$resultados[1]->ML!!} - {!!$resultados[1]->MV!!} fallo  </td>
   @endif
   @endif
  
  
    @elseif   ($jornadas->juego2 == 3)
    <td>{!!Form::radio('dj2', '1',false,array('id'=>'1','disabled'))!!}   {!!Form::radio('j2', '1',false,array('id'=>'1','hidden'))!!} {!! $equipos[$partidos[1]->local]->nombre!!} {!! HTML::image($equipos[$partidos[1]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
    <td>{!!Form::radio('dj2', '2',false,array('id'=>'2','disabled'))!!}   {!!Form::radio('j2', '2',false,array('id'=>'2','hidden'))!!}</td>
  <td>{!!Form::radio('dj2', '3',true,array('id'=>'3','disabled'))!!} {!!Form::radio('j2', '3',true,array('id'=>'3','hidden'))!!} {!! $equipos[$partidos[1]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[1]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
  
     @if (isset($resultados[1]))
  @if ($resultados[1]->resultado == $jornadas->juego2)
   <td>{!!$resultados[1]->ML!!} - {!!$resultados[1]->MV!!} Acierto  </td>
  <?php $a++; ?> 
       @else 
     <td>{!!$resultados[1]->ML!!} - {!!$resultados[1]->MV!!} fallo  </td>
   @endif
   @endif
  
  @else
    <td>{!!Form::radio('j2', '1',false,array('id'=>'1','disabled'))!!}     {!! $equipos[$partidos[1]->local]->nombre!!} {!! HTML::image($equipos[$partidos[1]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
    <td>{!!Form::radio('j2', '2',false,array('id'=>'2','disabled'))!!}</td>
  <td>{!!Form::radio('j2', '3',false,array('id'=>'3','disabled'))!!}   {!! $equipos[$partidos[1]->visitante]->nombre!!}   {!! HTML::image($equipos[$partidos[1]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
  
   @if (isset($resultados[1]))
  @if ($resultados[1]->resultado == $jornadas->juego2)
   <td>{!!$resultados[1]->ML!!} - {!!$resultados[1]->MV!!} Acierto  </td>
       @else 
     <td>{!!$resultados[1]->ML!!} - {!!$resultados[1]->MV!!} fallo</td>
   @endif
   @endif
  
  
    @endif
  
  
  
@elseif ($jornadas->juego2 == 1)
    <td>{!!Form::radio('j2', '1',true,array('id'=>'1'))!!}  {!! $equipos[$partidos[1]->local]->nombre!!} {!! HTML::image($equipos[$partidos[1]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j2', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j2', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[1]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[1]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
@elseif ($jornadas->juego2 == 2)
    <td>{!!Form::radio('j2', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[1]->local]->nombre!!} {!! HTML::image($equipos[$partidos[1]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j2', '2',true,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j2', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[1]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[1]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@elseif   ($jornadas->juego2 == 3)
    <td>{!!Form::radio('j2', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[1]->local]->nombre!!} {!! HTML::image($equipos[$partidos[1]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j2', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j12', '3',true,array('id'=>'3'))!!} {!! $equipos[$partidos[1]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[1]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@else
    <td>{!!Form::radio('j2', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[1]->local]->nombre!!} {!! HTML::image($equipos[$partidos[1]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j2', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j2', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[1]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[1]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@endif

  </tr>
  
  {{-- Radios para el juego 3--}}
  <tr>
  @if (strtotime($partidos[2]->horario) < strtotime('now'))


	  {{-- Radios alternativos para no perder el valor deshabilitado en el update --}}
    @if ($jornadas->juego3 == 1)
    <td>{!!Form::radio('dj3', '1',true,array('id'=>'1','disabled' ))!!}  {!!Form::radio('j3', '1',true,array('id'=>'1','hidden' ))!!}   {!! $equipos[$partidos[2]->local]->nombre!!} {!! HTML::image($equipos[$partidos[2]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}   </td>
  <td>{!!Form::radio('dj3', '2',false,array('id'=>'2','disabled' ))!!}  {!!Form::radio('j3', '2',false,array('id'=>'2','hidden' ))!!}</td>
    <td>{!!Form::radio('dj3', '3',false,array('id'=>'3','disabled' ))!!} {!!Form::radio('j3', '3',false,array('id'=>'3','hidden' ))!!} {!! $equipos[$partidos[2]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[2]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
  
 @if (isset($resultados[2]))
  @if ($resultados[2]->resultado == $jornadas->juego3)
   <td>{!!$resultados[2]->ML!!} - {!!$resultados[2]->MV!!} Acierto  </td> 
           <?php $a++; ?> 
       @else 
     <td>{!!$resultados[2]->ML!!} - {!!$resultados[2]->MV!!} fallo  </td>
   @endif
   @endif
   
   
  @elseif ($jornadas->juego3 == 2)
    <td>{!!Form::radio('dj3', '1',false,array('id'=>'1','disabled'))!!}  {!!Form::radio('j3', '1',false,array('id'=>'1','hidden'))!!}  {!! $equipos[$partidos[2]->local]->nombre!!} {!! HTML::image($equipos[$partidos[2]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('dj3', '2',true,array('id'=>'2','disabled'))!!}{!!Form::radio('j3', '2',true,array('id'=>'2','hidden'))!!}</td>
  <td>{!!Form::radio('dj3', '3',false,array('id'=>'3','disabled'))!!} {!!Form::radio('j3', '3',false,array('id'=>'3','hidden'))!!} {!! $equipos[$partidos[2]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[2]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
  
   @if (isset($resultados[2]))
  @if ($resultados[2]->resultado == $jornadas->juego3)
   <td>{!!$resultados[2]->ML!!} - {!!$resultados[2]->MV!!} Acierto  </td>
  <?php $a++; ?> 
       @else 
     <td>{!!$resultados[2]->ML!!} - {!!$resultados[2]->MV!!} fallo  </td>
   @endif
   @endif
  
  
    @elseif   ($jornadas->juego3 == 3)
    <td>{!!Form::radio('dj3', '1',false,array('id'=>'1','disabled'))!!}   {!!Form::radio('j3', '1',false,array('id'=>'1','hidden'))!!} {!! $equipos[$partidos[2]->local]->nombre!!} {!! HTML::image($equipos[$partidos[2]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
    <td>{!!Form::radio('dj3', '2',false,array('id'=>'2','disabled'))!!}   {!!Form::radio('j3', '2',false,array('id'=>'2','hidden'))!!}</td>
  <td>{!!Form::radio('dj3', '3',true,array('id'=>'3','disabled'))!!} {!!Form::radio('j3', '3',true,array('id'=>'3','hidden'))!!} {!! $equipos[$partidos[2]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[2]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
  
   @if (isset($resultados[2]))
  @if ($resultados[2]->resultado == $jornadas->juego3)
   <td>{!!$resultados[2]->ML!!} - {!!$resultados[2]->MV!!} Acierto  </td>
  <?php $a++; ?> 
       @else 
     <td>{!!$resultados[2]->ML!!} - {!!$resultados[2]->MV!!} fallo  </td>
   @endif
  @endif


  {{-- Radios para cuando user no ingreso partido y es partido caduco --}}
  @else
    <td>{!!Form::radio('j3', '1',false,array('id'=>'1','disabled'))!!}     {!! $equipos[$partidos[2]->local]->nombre!!} {!! HTML::image($equipos[$partidos[2]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j3', '2',false,array('id'=>'2','disabled'))!!}</td>
  <td>{!!Form::radio('j3', '3',false,array('id'=>'3','disabled'))!!}   {!! $equipos[$partidos[2]->visitante]->nombre!!}{!! HTML::image($equipos[$partidos[2]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
  
  @if (isset($resultados[2]))
  @if ($resultados[2]->resultado == $jornadas->juego3)
   <td>{!!$resultados[2]->ML!!} - {!!$resultados[2]->MV!!} Acierto  </td>
       @else 
     <td>{!!$resultados[2]->ML!!} - {!!$resultados[2]->MV!!} fallo</td>
   @endif
   @endif
   
  
  
    @endif
  
  {{-- Radios para cuando el partido es vigente y puede ser actualizado --}}
  
@elseif ($jornadas->juego3 == 1)
    <td>{!!Form::radio('j3', '1',true,array('id'=>'1'))!!}  {!! $equipos[$partidos[2]->local]->nombre!!} {!! HTML::image($equipos[$partidos[2]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j3', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j3', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[2]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[2]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
@elseif ($jornadas->juego3 == 2)
    <td>{!!Form::radio('j3', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[2]->local]->nombre!!} {!! HTML::image($equipos[$partidos[2]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j3', '2',true,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j3', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[2]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[2]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@elseif   ($jornadas->juego3 == 3)
    <td>{!!Form::radio('j3', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[2]->local]->nombre!!} {!! HTML::image($equipos[$partidos[2]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j3', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j3', '3',true,array('id'=>'3'))!!} {!! $equipos[$partidos[2]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[2]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@else
    <td>{!!Form::radio('j3', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[2]->local]->nombre!!} {!! HTML::image($equipos[$partidos[2]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j3', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j3', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[2]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[2]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@endif

  </tr>



  {{-- Radios para el juego 4--}}
   <tr>
   @if (strtotime($partidos[3]->horario) < strtotime('now'))


	   {{-- Radios alternativos para no perder el valor deshabilitado en el update --}}
    @if ($jornadas->juego4 == 1)
    <td>{!!Form::radio('dj4', '1',true,array('id'=>'1','disabled' ))!!}  {!!Form::radio('j4', '1',true,array('id'=>'1','hidden' ))!!}   {!! $equipos[$partidos[3]->local]->nombre!!}  {!! HTML::image($equipos[$partidos[3]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
  <td>{!!Form::radio('dj4', '2',false,array('id'=>'2','disabled' ))!!}  {!!Form::radio('j4', '2',false,array('id'=>'2','hidden' ))!!}</td>
    <td>{!!Form::radio('dj4', '3',false,array('id'=>'3','disabled' ))!!} {!!Form::radio('j4', '3',false,array('id'=>'3','hidden' ))!!} {!! $equipos[$partidos[3]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[3]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
  
  @if (isset($resultados[3]))
  @if ($resultados[3]->resultado == $jornadas->juego4)
   <td>{!!$resultados[3]->ML!!} - {!!$resultados[3]->MV!!} Acierto  </td> 
           <?php $a++; ?> 
       @else 
     <td>{!!$resultados[3]->ML!!} - {!!$resultados[3]->MV!!} fallo  </td>
   @endif
   @endif
   
   
   
  @elseif ($jornadas->juego4 == 2)
    <td>{!!Form::radio('dj4', '1',false,array('id'=>'1','disabled'))!!}  {!!Form::radio('j4', '1',false,array('id'=>'1','hidden'))!!}  {!! $equipos[$partidos[3]->local]->nombre!!}  {!! HTML::image($equipos[$partidos[3]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('dj4', '2',true,array('id'=>'2','disabled'))!!}{!!Form::radio('j4', '2',true,array('id'=>'2','hidden'))!!}</td>
  <td>{!!Form::radio('dj4', '3',false,array('id'=>'3','disabled'))!!} {!!Form::radio('j4', '3',false,array('id'=>'3','hidden'))!!} {!! $equipos[$partidos[3]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[3]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    @if (isset($resultados[3]))
  @if ($resultados[3]->resultado == $jornadas->juego4)
   <td>{!!$resultados[3]->ML!!} - {!!$resultados[3]->MV!!} Acierto  </td>
  <?php $a++; ?> 
       @else 
     <td>{!!$resultados[3]->ML!!} - {!!$resultados[3]->MV!!} fallo  </td>
   @endif
   @endif
  
  
    @elseif   ($jornadas->juego4 == 3)
    <td>{!!Form::radio('dj4', '1',false,array('id'=>'1','disabled'))!!}   {!!Form::radio('j4', '1',false,array('id'=>'1','hidden'))!!} {!! $equipos[$partidos[3]->local]->nombre!!} {!! HTML::image($equipos[$partidos[3]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('dj4', '2',false,array('id'=>'2','disabled'))!!}   {!!Form::radio('j4', '2',false,array('id'=>'2','hidden'))!!}</td>
  <td>{!!Form::radio('dj4', '3',true,array('id'=>'3','disabled'))!!} {!!Form::radio('j4', '3',true,array('id'=>'3','hidden'))!!} {!! $equipos[$partidos[3]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[3]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    @if (isset($resultados[3]))
  @if ($resultados[3]->resultado == $jornadas->juego4)
   <td>{!!$resultados[3]->ML!!} - {!!$resultados[3]->MV!!} Acierto  </td>
  <?php $a++; ?> 
       @else 
     <td>{!!$resultados[3]->ML!!} - {!!$resultados[3]->MV!!} fallo  </td>
   @endif
     @endif

  {{-- Radios para cuando user no ingreso partido y es partido caduco --}}
  @else
    <td>{!!Form::radio('j4', '1',false,array('id'=>'1','disabled'))!!}     {!! $equipos[$partidos[3]->local]->nombre!!} {!! HTML::image($equipos[$partidos[3]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
    <td>{!!Form::radio('j4', '2',false,array('id'=>'2','disabled'))!!}</td>
  <td>{!!Form::radio('j4', '3',false,array('id'=>'3','disabled'))!!}   {!! $equipos[$partidos[3]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[3]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    @if (isset($resultados[3]))
  @if ($resultados[3]->resultado == $jornadas->juego4)
   <td>{!!$resultados[3]->ML!!} - {!!$resultados[3]->MV!!} Acierto  </td>
       @else 
     <td>{!!$resultados[3]->ML!!} - {!!$resultados[3]->MV!!} fallo</td>
   @endif
     @endif
   
  
  
    @endif
  
  {{-- Radios para cuando el partido es vigente y puede ser actualizado --}}
  
@elseif ($jornadas->juego4 == 1)
    <td>{!!Form::radio('j4', '1',true,array('id'=>'1'))!!}  {!! $equipos[$partidos[3]->local]->nombre!!} {!! HTML::image($equipos[$partidos[3]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j4', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j4', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[3]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[3]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@elseif ($jornadas->juego4 == 2)
    <td>{!!Form::radio('j4', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[3]->local]->nombre!!} {!! HTML::image($equipos[$partidos[3]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j4', '2',true,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j4', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[3]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[3]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
@elseif   ($jornadas->juego4 == 3)
    <td>{!!Form::radio('j4', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[3]->local]->nombre!!} {!! HTML::image($equipos[$partidos[3]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j4', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j4', '3',true,array('id'=>'3'))!!} {!! $equipos[$partidos[3]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[3]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
@else
    <td>{!!Form::radio('j4', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[3]->local]->nombre!!} {!! HTML::image($equipos[$partidos[3]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j4', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j4', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[3]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[3]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@endif

  </tr>


  {{-- Radios para el juego 5--}}
   <tr>
   @if (strtotime($partidos[4]->horario) < strtotime('now'))


	   {{-- Radios alternativos para no perder el valor deshabilitado en el update --}}
    @if ($jornadas->juego5 == 1)
    <td>{!!Form::radio('dj5', '1',true,array('id'=>'1','disabled' ))!!}  {!!Form::radio('j5', '1',true,array('id'=>'1','hidden' ))!!}   {!! $equipos[$partidos[4]->local]->nombre!!}  {!! HTML::image($equipos[$partidos[4]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
  <td>{!!Form::radio('dj5', '2',false,array('id'=>'2','disabled' ))!!}  {!!Form::radio('j5', '2',false,array('id'=>'2','hidden' ))!!}</td>
    <td>{!!Form::radio('dj5', '3',false,array('id'=>'3','disabled' ))!!} {!!Form::radio('j5', '3',false,array('id'=>'3','hidden' ))!!} {!! $equipos[$partidos[4]->visitante]->nombre!!}   {!! HTML::image($equipos[$partidos[4]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
  
  @if (isset($resultados[4]))
  @if ($resultados[4]->resultado == $jornadas->juego5)
   <td>{!!$resultados[4]->ML!!} - {!!$resultados[4]->MV!!} Acierto  </td> 
           <?php $a++; ?> 
       @else 
     <td>{!!$resultados[4]->ML!!} - {!!$resultados[4]->MV!!}  fallo  </td>
   @endif
   @endif
   
   
  @elseif ($jornadas->juego5 == 2)
    <td>{!!Form::radio('dj5', '1',false,array('id'=>'1','disabled'))!!}  {!!Form::radio('j5', '1',false,array('id'=>'1','hidden'))!!}  {!! $equipos[$partidos[4]->local]->nombre!!} {!! HTML::image($equipos[$partidos[4]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}   </td>
    <td>{!!Form::radio('dj5', '2',true,array('id'=>'2','disabled'))!!}{!!Form::radio('j5', '2',true,array('id'=>'2','hidden'))!!}</td>
  <td>{!!Form::radio('dj5', '3',false,array('id'=>'3','disabled'))!!} {!!Form::radio('j5', '3',false,array('id'=>'3','hidden'))!!} {!! $equipos[$partidos[4]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[4]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
  
  @if (isset($resultados[4]))
  @if ($resultados[4]->resultado == $jornadas->juego5)
   <td>{!!$resultados[4]->ML!!} - {!!$resultados[4]->MV!!} Acierto  </td>
  <?php $a++; ?> 
       @else 
     <td>{!!$resultados[4]->ML!!} - {!!$resultados[4]->MV!!}  fallo  </td>
   @endif
   @endif
  
  
    @elseif   ($jornadas->juego5 == 3)
    <td>{!!Form::radio('dj5', '1',false,array('id'=>'1','disabled'))!!}   {!!Form::radio('j5', '1',false,array('id'=>'1','hidden'))!!} {!! $equipos[$partidos[4]->local]->nombre!!} {!! HTML::image($equipos[$partidos[4]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
    <td>{!!Form::radio('dj5', '2',false,array('id'=>'2','disabled'))!!}   {!!Form::radio('j5', '2',false,array('id'=>'2','hidden'))!!}</td>
  <td>{!!Form::radio('dj5', '3',true,array('id'=>'3','disabled'))!!} {!!Form::radio('j5', '3',true,array('id'=>'3','hidden'))!!} {!! $equipos[$partidos[4]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[4]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    
    @if (isset($resultados[4]))
  @if ($resultados[4]->resultado == $jornadas->juego5)
   <td>{!!$resultados[4]->ML!!} - {!!$resultados[4]->MV!!}  Acierto  </td>
  <?php $a++; ?> 
       @else 
     <td>{!!$resultados[4]->ML!!} - {!!$resultados[4]->MV!!}  fallo  </td>
   @endif
    @endif
   
  {{-- Radios para cuando user no ingreso partido y es partido caduco --}}
  @else
    <td>{!!Form::radio('j5', '1',false,array('id'=>'1','disabled'))!!}     {!! $equipos[$partidos[4]->local]->nombre!!} {!! HTML::image($equipos[$partidos[4]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
    <td>{!!Form::radio('j5', '2',false,array('id'=>'2','disabled'))!!}</td>
  <td>{!!Form::radio('j5', '3',false,array('id'=>'3','disabled'))!!}   {!! $equipos[$partidos[4]->visitante]->nombre!!}{!! HTML::image($equipos[$partidos[4]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}   </td>
   @if (isset($resultados[4]))
  @if ($resultados[4]->resultado == $jornadas->juego5)
   <td>{!!$resultados[4]->ML!!} - {!!$resultados[4]->MV!!}  Acierto  </td>
       @else 
     <td> {!!$resultados[4]->ML!!} - {!!$resultados[4]->MV!!} fallo</td>
   @endif
   @endif
  
  
    @endif
  
  {{-- Radios para cuando el partido es vigente y puede ser actualizado --}}
  
@elseif ($jornadas->juego5 == 1)
    <td>{!!Form::radio('j5', '1',true,array('id'=>'1'))!!}  {!! $equipos[$partidos[4]->local]->nombre!!} {!! HTML::image($equipos[$partidos[4]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j5', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j5', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[4]->visitante]->nombre!!}{!! HTML::image($equipos[$partidos[4]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@elseif ($jornadas->juego5 == 2)
    <td>{!!Form::radio('j5', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[4]->local]->nombre!!}  {!! HTML::image($equipos[$partidos[4]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j5', '2',true,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j5', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[4]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[4]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@elseif   ($jornadas->juego5 == 3)
    <td>{!!Form::radio('j5', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[4]->local]->nombre!!} {!! HTML::image($equipos[$partidos[4]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
    <td>{!!Form::radio('j5', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j5', '3',true,array('id'=>'3'))!!} {!! $equipos[$partidos[4]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[4]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@else
    <td>{!!Form::radio('j5', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[4]->local]->nombre!!}  {!! HTML::image($equipos[$partidos[4]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j5', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j5', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[4]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[4]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@endif
  </tr>

  {{-- Radios para el juego 6--}}
  
    <tr>
	@if (strtotime($partidos[5]->horario) < strtotime('now'))



	 {{-- Radios alternativos para no perder el valor deshabilitado en el update --}}
    @if ($jornadas->juego6 == 1)
    <td>{!!Form::radio('dj6', '1',true,array('id'=>'1','disabled' ))!!}  {!!Form::radio('j6', '1',true,array('id'=>'1','hidden' ))!!}   {!! $equipos[$partidos[5]->local]->nombre!!} {!! HTML::image($equipos[$partidos[5]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
  <td>{!!Form::radio('dj6', '2',false,array('id'=>'2','disabled' ))!!}  {!!Form::radio('j6', '2',false,array('id'=>'2','hidden' ))!!}</td>
    <td>{!!Form::radio('dj6', '3',false,array('id'=>'3','disabled' ))!!} {!!Form::radio('j6', '3',false,array('id'=>'3','hidden' ))!!} {!! $equipos[$partidos[5]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[5]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
  
@if (isset($resultados[5]))
  @if ($resultados[5]->resultado == $jornadas->juego6)
   <td>{!!$resultados[5]->ML!!} - {!!$resultados[5]->MV!!}   Acierto  </td> 
           <?php $a++; ?> 
       @else 
     <td> {!!$resultados[5]->ML!!} - {!!$resultados[5]->MV!!} fallo  </td>
   @endif
   @endif
   
   
   
  @elseif ($jornadas->juego6 == 2)
    <td>{!!Form::radio('dj6', '1',false,array('id'=>'1','disabled'))!!}  {!!Form::radio('j6', '1',false,array('id'=>'1','hidden'))!!}  {!! $equipos[$partidos[5]->local]->nombre!!} {!! HTML::image($equipos[$partidos[5]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('dj6', '2',true,array('id'=>'2','disabled'))!!}{!!Form::radio('j6', '2',true,array('id'=>'2','hidden'))!!}</td>
  <td>{!!Form::radio('dj6', '3',false,array('id'=>'3','disabled'))!!} {!!Form::radio('j6', '3',false,array('id'=>'3','hidden'))!!} {!! $equipos[$partidos[5]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[5]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
  
  @if (isset($resultados[5]))
  @if ($resultados[5]->resultado == $jornadas->juego6)
   <td>  {!!$resultados[5]->ML!!} - {!!$resultados[5]->MV!!} Acierto  </td>
  <?php $a++; ?> 
       @else 
     <td>{!!$resultados[5]->ML!!} - {!!$resultados[5]->MV!!} fallo  </td>
   @endif
   @endif
  
  
    @elseif   ($jornadas->juego6 == 3)
    <td>{!!Form::radio('dj6', '1',false,array('id'=>'1','disabled'))!!}   {!!Form::radio('j6', '1',false,array('id'=>'1','hidden'))!!} {!! $equipos[$partidos[5]->local]->nombre!!}  {!! HTML::image($equipos[$partidos[5]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('dj6', '2',false,array('id'=>'2','disabled'))!!}   {!!Form::radio('j6', '2',false,array('id'=>'2','hidden'))!!}</td>
  <td>{!!Form::radio('dj6', '3',true,array('id'=>'3','disabled'))!!} {!!Form::radio('j6', '3',true,array('id'=>'3','hidden'))!!} {!! $equipos[$partidos[5]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[5]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
 
  @if (isset($resultados[5]))
  @if ($resultados[5]->resultado == $jornadas->juego6)
   <td>{!!$resultados[5]->ML!!} - {!!$resultados[5]->MV!!} Acierto  </td>
  <?php $a++; ?> 
       @else 
     <td>{!!$resultados[5]->ML!!} - {!!$resultados[5]->MV!!} fallo  </td>
   @endif
   @endif
   
  {{-- Radios para cuando user no ingreso partido y es partido caduco --}}
  @else
    <td>{!!Form::radio('j6', '1',false,array('id'=>'1','disabled'))!!}     {!! $equipos[$partidos[5]->local]->nombre!!} {!! HTML::image($equipos[$partidos[5]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}   </td>
    <td>{!!Form::radio('j6', '2',false,array('id'=>'2','disabled'))!!}</td>
  <td>{!!Form::radio('j6', '3',false,array('id'=>'3','disabled'))!!}   {!! $equipos[$partidos[5]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[5]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
  
  @if (isset($resultados[5]))
  @if ($resultados[5]->resultado == $jornadas->juego6)
   <td>{!!$resultados[5]->ML!!} - {!!$resultados[5]->MV!!} Acierto  </td>
       @else 
     <td>{!!$resultados[5]->ML!!} - {!!$resultados[5]->MV!!} fallo</td>
   @endif
   @endif
  
  
    @endif
  
  {{-- Radios para cuando el partido es vigente y puede ser actualizado --}}
  
@elseif ($jornadas->juego6 == 1)
    <td>{!!Form::radio('j6', '1',true,array('id'=>'1'))!!}  {!! $equipos[$partidos[5]->local]->nombre!!} {!! HTML::image($equipos[$partidos[5]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j6', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j6', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[5]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[5]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@elseif ($jornadas->juego6 == 2)
    <td>{!!Form::radio('j6', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[5]->local]->nombre!!} {!! HTML::image($equipos[$partidos[5]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
    <td>{!!Form::radio('j6', '2',true,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j6', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[5]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[5]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}   </td>
@elseif   ($jornadas->juego6 == 3)
    <td>{!!Form::radio('j6', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[5]->local]->nombre!!} {!! HTML::image($equipos[$partidos[5]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
    <td>{!!Form::radio('j6', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j6', '3',true,array('id'=>'3'))!!} {!! $equipos[$partidos[5]->visitante]->nombre!!}{!! HTML::image($equipos[$partidos[5]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}   </td>
@else
    <td>{!!Form::radio('j6', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[5]->local]->nombre!!} {!! HTML::image($equipos[$partidos[5]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j6', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j6', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[5]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[5]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
@endif
  </tr>
  
{{-- Radios para el juego 7--}}

  <tr>
  @if (strtotime($partidos[6]->horario) < strtotime('now'))


	  {{-- Radios alternativos para no perder el valor deshabilitado en el update --}}
    @if ($jornadas->juego7 == 1)
    <td>{!!Form::radio('dj7', '1',true,array('id'=>'1','disabled' ))!!}  {!!Form::radio('j7', '1',true,array('id'=>'1','hidden' ))!!}   {!! $equipos[$partidos[6]->local]->nombre!!}   {!! HTML::image($equipos[$partidos[6]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
  <td>{!!Form::radio('dj7', '2',false,array('id'=>'2','disabled' ))!!}  {!!Form::radio('j7', '2',false,array('id'=>'2','hidden' ))!!}</td>
    <td>{!!Form::radio('dj7', '3',false,array('id'=>'3','disabled' ))!!} {!!Form::radio('j7', '3',false,array('id'=>'3','hidden' ))!!} {!! $equipos[$partidos[6]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[6]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
  
   {{-- Valida que tenga datos de los resultados que vienen de la BD --}}
  @if (isset($resultados[6]))
  @if ($resultados[6]->resultado == $jornadas->juego7)
   <td>{!!$resultados[6]->ML!!} - {!!$resultados[6]->MV!!} Acierto  </td> 
           <?php $a++; ?> 
       @else 
     <td>  {!!$resultados[6]->ML!!} - {!!$resultados[6]->MV!!} fallo  </td>
   @endif
   @endif
   
   
   
  @elseif ($jornadas->juego7 == 2)
    <td>{!!Form::radio('dj7', '1',false,array('id'=>'1','disabled'))!!}  {!!Form::radio('j7', '1',false,array('id'=>'1','hidden'))!!}  {!! $equipos[$partidos[6]->local]->nombre!!}  {!! HTML::image($equipos[$partidos[6]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('dj7', '2',true,array('id'=>'2','disabled'))!!}{!!Form::radio('j7', '2',true,array('id'=>'2','hidden'))!!}</td>
  <td>{!!Form::radio('dj7', '3',false,array('id'=>'3','disabled'))!!} {!!Form::radio('j7', '3',false,array('id'=>'3','hidden'))!!} {!! $equipos[$partidos[6]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[6]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
  
  @if (isset($resultados[6]))
  @if ($resultados[6]->resultado == $jornadas->juego7)
   <td>{!!$resultados[6]->ML!!} - {!!$resultados[6]->MV!!} Acierto  </td>
  <?php $a++; ?> 
       @else 
     <td>{!!$resultados[6]->ML!!} - {!!$resultados[6]->MV!!} fallo  </td>
   @endif
    @endif
  
  
    @elseif   ($jornadas->juego7 == 3)
    <td>{!!Form::radio('dj7', '1',false,array('id'=>'1','disabled'))!!}   {!!Form::radio('j7', '1',false,array('id'=>'1','hidden'))!!} {!! $equipos[$partidos[6]->local]->nombre!!} {!! HTML::image($equipos[$partidos[6]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('dj7', '2',false,array('id'=>'2','disabled'))!!}   {!!Form::radio('j7', '2',false,array('id'=>'2','hidden'))!!}</td>
  <td>{!!Form::radio('dj7', '3',true,array('id'=>'3','disabled'))!!} {!!Form::radio('j7', '3',true,array('id'=>'3','hidden'))!!} {!! $equipos[$partidos[6]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[6]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>

@if (isset($resultados[6]))
  @if ($resultados[6]->resultado == $jornadas->juego7)
   <td>{!!$resultados[6]->ML!!} - {!!$resultados[6]->MV!!} Acierto  </td>
  <?php $a++; ?> 
       @else 
     <td>{!!$resultados[6]->ML!!} - {!!$resultados[6]->MV!!} fallo  </td>
   @endif
   @endif
   
   
  {{-- Radios para cuando user no ingreso partido y es partido caduco --}}
  @else
    <td>{!!Form::radio('j7', '1',false,array('id'=>'1','disabled'))!!}     {!! $equipos[$partidos[6]->local]->nombre!!}  {!! HTML::image($equipos[$partidos[6]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j7', '2',false,array('id'=>'2','disabled'))!!}</td>
  <td>{!!Form::radio('j7', '3',false,array('id'=>'3','disabled'))!!}   {!! $equipos[$partidos[6]->visitante]->nombre!!}{!! HTML::image($equipos[$partidos[6]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
  
  @if (isset($resultados[6]))
  @if ($resultados[6]->resultado == $jornadas->juego7)
   <td>{!!$resultados[6]->ML!!} - {!!$resultados[6]->MV!!} Acierto  </td>
       @else 
     <td>{!!$resultados[6]->ML!!} - {!!$resultados[6]->MV!!} fallo</td>
   @endif
   @endif
  
  
    @endif
  
  {{-- Radios para cuando el partido es vigente y puede ser actualizado --}}
  
@elseif ($jornadas->juego7 == 1)
    <td>{!!Form::radio('j7', '1',true,array('id'=>'1'))!!}  {!! $equipos[$partidos[6]->local]->nombre!!} {!! HTML::image($equipos[$partidos[6]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j7', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j7', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[6]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[6]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
@elseif ($jornadas->juego7 == 2)
    <td>{!!Form::radio('j7', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[6]->local]->nombre!!}  {!! HTML::image($equipos[$partidos[6]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j7', '2',true,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j7', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[6]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[6]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@elseif   ($jornadas->juego7 == 3)
    <td>{!!Form::radio('j7', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[6]->local]->nombre!!} {!! HTML::image($equipos[$partidos[6]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j7', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j7', '3',true,array('id'=>'3'))!!} {!! $equipos[$partidos[6]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[6]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@else
    <td>{!!Form::radio('j7', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[6]->local]->nombre!!}{!! HTML::image($equipos[$partidos[6]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j7', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j7', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[6]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[6]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@endif

  </tr>
  
  {{-- Radios para el juego 8--}}
  <tr>
  @if (strtotime($partidos[7]->horario) < strtotime('now'))

  {{-- Radios alternativos para no perder el valor deshabilitado en el update --}}
    @if ($jornadas->juego8 == 1)
    <td>{!!Form::radio('dj8', '1',true,array('id'=>'1','disabled' ))!!}  {!!Form::radio('j8', '1',true,array('id'=>'1','hidden' ))!!}   {!! $equipos[$partidos[7]->local]->nombre!!} {!! HTML::image($equipos[$partidos[7]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
  <td>{!!Form::radio('dj8', '2',false,array('id'=>'2','disabled' ))!!}  {!!Form::radio('j8', '2',false,array('id'=>'2','hidden' ))!!}</td>
    <td>{!!Form::radio('dj8', '3',false,array('id'=>'3','disabled' ))!!} {!!Form::radio('j8', '3',false,array('id'=>'3','hidden' ))!!} {!! $equipos[$partidos[7]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[7]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
  
   {{-- Valida que tenga datos de los resultados que vienen de la BD --}}
  @if (isset($resultados[7]))
  @if ($resultados[7]->resultado == $jornadas->juego8)
   <td>{!!$resultados[7]->ML!!} - {!!$resultados[7]->MV!!}  Acierto  </td> 
           <?php $a++; ?> 
       @else 
     <td>{!!$resultados[7]->ML!!} - {!!$resultados[7]->MV!!}  fallo  </td>
   @endif
   @endif
   
   
   
  @elseif ($jornadas->juego8 == 2)
    <td>{!!Form::radio('dj8', '1',false,array('id'=>'1','disabled'))!!}  {!!Form::radio('j8', '1',false,array('id'=>'1','hidden'))!!}  {!! $equipos[$partidos[7]->local]->nombre!!} {!! HTML::image($equipos[$partidos[7]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('dj8', '2',true,array('id'=>'2','disabled'))!!}{!!Form::radio('j8', '2',true,array('id'=>'2','hidden'))!!}</td>
  <td>{!!Form::radio('dj8', '3',false,array('id'=>'3','disabled'))!!} {!!Form::radio('j8', '3',false,array('id'=>'3','hidden'))!!} {!! $equipos[$partidos[7]->visitante]->nombre!!}{!! HTML::image($equipos[$partidos[7]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
  
  @if (isset($resultados[7]))
  @if ($resultados[7]->resultado == $jornadas->juego8)
   <td>{!!$resultados[7]->ML!!} - {!!$resultados[7]->MV!!}  Acierto  </td>
  <?php $a++; ?> 
       @else 
     <td>{!!$resultados[7]->ML!!} - {!!$resultados[7]->MV!!}  fallo  </td>
   @endif
    @endif
  
  
    @elseif   ($jornadas->juego8 == 3)
    <td>{!!Form::radio('dj8', '1',false,array('id'=>'1','disabled'))!!}   {!!Form::radio('j8', '1',false,array('id'=>'1','hidden'))!!} {!! $equipos[$partidos[7]->local]->nombre!!} {!! HTML::image($equipos[$partidos[7]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('dj8', '2',false,array('id'=>'2','disabled'))!!}   {!!Form::radio('j8', '2',false,array('id'=>'2','hidden'))!!}</td>
  <td>{!!Form::radio('dj8', '3',true,array('id'=>'3','disabled'))!!} {!!Form::radio('j8', '3',true,array('id'=>'3','hidden'))!!} {!! $equipos[$partidos[7]->visitante]->nombre!!}{!! HTML::image($equipos[$partidos[7]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>

@if (isset($resultados[7]))
  @if ($resultados[7]->resultado == $jornadas->juego8)
   <td>{!!$resultados[7]->ML!!} - {!!$resultados[7]->MV!!}  Acierto  </td>
  <?php $a++; ?> 
       @else 
     <td>{!!$resultados[7]->ML!!} - {!!$resultados[7]->MV!!}  fallo  </td>
   @endif
   @endif
   
   
  {{-- Radios para cuando user no ingreso partido y es partido caduco --}}
  @else
    <td>{!!Form::radio('j8', '1',false,array('id'=>'1','disabled'))!!}     {!! $equipos[$partidos[7]->local]->nombre!!} {!! HTML::image($equipos[$partidos[7]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j8', '2',false,array('id'=>'2','disabled'))!!}</td>
  <td>{!!Form::radio('j8', '3',false,array('id'=>'3','disabled'))!!}   {!! $equipos[$partidos[7]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[7]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
  
  @if (isset($resultados[7]))
  @if ($resultados[7]->resultado == $jornadas->juego8)
   <td>{!!$resultados[7]->ML!!} - {!!$resultados[7]->MV!!}  Acierto  </td>
       @else 
     <td>{!!$resultados[7]->ML!!} - {!!$resultados[7]->MV!!}  fallo</td>
   @endif
   @endif
  
  
    @endif
  
  {{-- Radios para cuando el partido es vigente y puede ser actualizado --}}
  
@elseif ($jornadas->juego8 == 1)
    <td>{!!Form::radio('j8', '1',true,array('id'=>'1'))!!}  {!! $equipos[$partidos[7]->local]->nombre!!}  {!! HTML::image($equipos[$partidos[7]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j8', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j8', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[7]->visitante]->nombre!!}{!! HTML::image($equipos[$partidos[7]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@elseif ($jornadas->juego8 == 2)
    <td>{!!Form::radio('j8', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[7]->local]->nombre!!} {!! HTML::image($equipos[$partidos[7]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j8', '2',true,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j8', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[7]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[7]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@elseif   ($jornadas->juego8 == 3)
    <td>{!!Form::radio('j8', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[7]->local]->nombre!!} {!! HTML::image($equipos[$partidos[7]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j8', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j8', '3',true,array('id'=>'3'))!!} {!! $equipos[$partidos[7]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[7]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@else
    <td>{!!Form::radio('j8', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[7]->local]->nombre!!}  {!! HTML::image($equipos[$partidos[7]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j8', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j8', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[7]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[7]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@endif
  </tr>
  
  {{-- Radios para el juego 9--}}
  <tr>
  @if (strtotime($partidos[8]->horario) < strtotime('now'))


	  {{-- Radios alternativos para no perder el valor deshabilitado en el update --}}
    @if ($jornadas->juego9 == 1)
    <td>{!!Form::radio('dj9', '1',true,array('id'=>'1','disabled' ))!!}  {!!Form::radio('j9', '1',true,array('id'=>'1','hidden' ))!!}   {!! $equipos[$partidos[8]->local]->nombre!!} {!! HTML::image($equipos[$partidos[8]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
  <td>{!!Form::radio('dj9', '2',false,array('id'=>'2','disabled' ))!!}  {!!Form::radio('j9', '2',false,array('id'=>'2','hidden' ))!!}</td>
    <td>{!!Form::radio('dj9', '3',false,array('id'=>'3','disabled' ))!!} {!!Form::radio('j9', '3',false,array('id'=>'3','hidden' ))!!} {!! $equipos[$partidos[8]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[8]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
  
   {{-- Valida que tenga datos de los resultados que vienen de la BD --}}

  @if (isset($resultados[8]))
  @if ($resultados[8]->resultado == $jornadas->juego9)
   <td>{!!$resultados[8]->ML!!} - {!!$resultados[8]->MV!!}  Acierto  </td> 
           <?php $a++; ?> 
       @else 
     <td>{!!$resultados[8]->ML!!} - {!!$resultados[8]->MV!!} fallo  </td>
   @endif
   @endif
   
   
   
  @elseif ($jornadas->juego9 == 2)
    <td>{!!Form::radio('dj9', '1',false,array('id'=>'1','disabled'))!!}  {!!Form::radio('j9', '1',false,array('id'=>'1','hidden'))!!}  {!! $equipos[$partidos[8]->local]->nombre!!} {!! HTML::image($equipos[$partidos[8]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('dj9', '2',true,array('id'=>'2','disabled'))!!}{!!Form::radio('j9', '2',true,array('id'=>'2','hidden'))!!}</td>
  <td>{!!Form::radio('dj9', '3',false,array('id'=>'3','disabled'))!!} {!!Form::radio('j9', '3',false,array('id'=>'3','hidden'))!!} {!! $equipos[$partidos[8]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[8]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
  
  @if (isset($resultados[8]))
  @if ($resultados[8]->resultado == $jornadas->juego9)
   <td>{!!$resultados[8]->ML!!} - {!!$resultados[8]->MV!!} Acierto  </td>
  <?php $a++; ?> 
       @else 
     <td>{!!$resultados[8]->ML!!} - {!!$resultados[8]->MV!!} fallo  </td>
   @endif
    @endif
  
  
    @elseif   ($jornadas->juego9 == 3)
    <td>{!!Form::radio('dj9', '1',false,array('id'=>'1','disabled'))!!}   {!!Form::radio('j9', '1',false,array('id'=>'1','hidden'))!!} {!! $equipos[$partidos[8]->local]->nombre!!} {!! HTML::image($equipos[$partidos[8]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('dj9', '2',false,array('id'=>'2','disabled'))!!}   {!!Form::radio('j9', '2',false,array('id'=>'2','hidden'))!!}</td>
  <td>{!!Form::radio('dj9', '3',true,array('id'=>'3','disabled'))!!} {!!Form::radio('j9', '3',true,array('id'=>'3','hidden'))!!} {!! $equipos[$partidos[8]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[8]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>

@if (isset($resultados[8]))
  @if ($resultados[8]->resultado == $jornadas->juego9)
   <td>{!!$resultados[8]->ML!!} - {!!$resultados[8]->MV!!} Acierto  </td>
  <?php $a++; ?> 
       @else 
     <td> {!!$resultados[8]->ML!!} - {!!$resultados[8]->MV!!} fallo  </td>
   @endif
   @endif
   
   
  {{-- Radios para cuando user no ingreso partido y es partido caduco --}}
  @else
    <td>{!!Form::radio('j9', '1',false,array('id'=>'1','disabled'))!!}     {!! $equipos[$partidos[8]->local]->nombre!!} {!! HTML::image($equipos[$partidos[8]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j9', '2',false,array('id'=>'2','disabled'))!!}</td>
  <td>{!!Form::radio('j9', '3',false,array('id'=>'3','disabled'))!!}   {!! $equipos[$partidos[8]->visitante]->nombre!!}{!! HTML::image($equipos[$partidos[8]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
  
  @if (isset($resultados[8]))
  @if ($resultados[8]->resultado == $jornadas->juego9)
   <td>{!!$resultados[8]->ML!!} - {!!$resultados[8]->MV!!} Acierto  </td>
       @else 
     <td>{!!$resultados[8]->ML!!} - {!!$resultados[8]->MV!!} fallo</td>
   @endif
   @endif
  
  
    @endif
  
  {{-- Radios para cuando el partido es vigente y puede ser actualizado --}}
  
@elseif ($jornadas->juego9 == 1)
    <td>{!!Form::radio('j9', '1',true,array('id'=>'1'))!!}  {!! $equipos[$partidos[8]->local]->nombre!!}{!! HTML::image($equipos[$partidos[8]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j9', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j9', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[8]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[8]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
@elseif ($jornadas->juego9 == 2)
    <td>{!!Form::radio('j9', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[8]->local]->nombre!!} {!! HTML::image($equipos[$partidos[8]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j9', '2',true,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j9', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[8]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[8]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@elseif   ($jornadas->juego9 == 3)
    <td>{!!Form::radio('j9', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[8]->local]->nombre!!} {!! HTML::image($equipos[$partidos[8]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
    <td>{!!Form::radio('j9', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j9', '3',true,array('id'=>'3'))!!} {!! $equipos[$partidos[8]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[8]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
@else
    <td>{!!Form::radio('j9', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[8]->local]->nombre!!}  {!! HTML::image($equipos[$partidos[8]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j9', '2',false,array('id'=>'2'))!!}</td>
  <td>{!!Form::radio('j9', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[8]->visitante]->nombre!!}   {!! HTML::image($equipos[$partidos[8]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
@endif


  </tr>
  

  
  

  
  
   
</table>
  <br><br>
Total de aciertos de la jornada {!!  $a !!}
  

  <br><br>




  

<br><br><br><br>
{!!Form::submit('Actualizar') !!}<br><br>
{!!Form::close()!!}

@if($jor==1)
<nav>
  <ul class="pagination">
    
    <li class="active"  ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 1))!!}">1 </a></li>
     <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 2))!!}">2<span class="sr-only">(current)</span> </a></li>
	 <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 3))!!}">3</a></li>
	 <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 4))!!}">4</a></li>
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

   @elseif ($jor==2)
<nav>
  <ul class="pagination">
    
    <li  ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 1))!!}">1 </a></li>
     <li class="active" ><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 2))!!}">2<span class="sr-only">(current)</span> </a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 3))!!}">3</a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 4))!!}">4</a></li>
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

@elseif ($jor==3)
<nav>
  <ul class="pagination">
    
    <li  ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 1))!!}">1 </a></li>
     <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 2))!!}">2<span class="sr-only">(current)</span> </a></li>
   <li class="active" ><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 3))!!}">3</a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 4))!!}">4</a></li>
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

@elseif ($jor==4)
<nav>
  <ul class="pagination">
    
    <li   ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 1))!!}">1 </a></li>
     <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 2))!!}">2<span class="sr-only">(current)</span> </a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 3))!!}">3</a></li>
   <li class="active"><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 4))!!}">4</a></li>
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

@elseif ($jor==5)
<nav>
  <ul class="pagination">
    
    <li   ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 1))!!}">1 </a></li>
     <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 2))!!}">2<span class="sr-only">(current)</span> </a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 3))!!}">3</a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 4))!!}">4</a></li>
   <li class="active"><a href="{!!route('jornadas/showo',array(Auth::user()->id, 5))!!}">5</a></li>
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

@elseif ($jor==6)
<nav>
  <ul class="pagination">
    
    <li   ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 1))!!}">1 </a></li>
     <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 2))!!}">2<span class="sr-only">(current)</span> </a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 3))!!}">3</a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 4))!!}">4</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 5))!!}">5</a></li>
   <li class="active"><a href="{!!route('jornadas/showo',array(Auth::user()->id, 6))!!}">6</a></li>
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

@elseif ($jor==7)
<nav>
  <ul class="pagination">
    
    <li   ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 1))!!}">1 </a></li>
     <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 2))!!}">2<span class="sr-only">(current)</span> </a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 3))!!}">3</a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 4))!!}">4</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 5))!!}">5</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 6))!!}">6</a></li>
   <li class="active"><a href="{!!route('jornadas/showo',array(Auth::user()->id, 7))!!}">7</a></li>
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

@elseif ($jor==8)
<nav>
  <ul class="pagination">
    
    <li   ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 1))!!}">1 </a></li>
     <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 2))!!}">2<span class="sr-only">(current)</span> </a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 3))!!}">3</a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 4))!!}">4</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 5))!!}">5</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 6))!!}">6</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 7))!!}">7</a></li>
   <li class="active"><a href="{!!route('jornadas/showo',array(Auth::user()->id, 8))!!}">8</a></li>
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

@elseif ($jor==9)
<nav>
  <ul class="pagination">
    
    <li   ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 1))!!}">1 </a></li>
     <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 2))!!}">2<span class="sr-only">(current)</span> </a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 3))!!}">3</a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 4))!!}">4</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 5))!!}">5</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 6))!!}">6</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 7))!!}">7</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 8))!!}">8</a></li>
   <li class="active"><a href="{!!route('jornadas/showo',array(Auth::user()->id, 9))!!}">9</a></li>
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

@elseif ($jor==10)
<nav>
  <ul class="pagination">
    
    <li   ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 1))!!}">1 </a></li>
     <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 2))!!}">2<span class="sr-only">(current)</span> </a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 3))!!}">3</a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 4))!!}">4</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 5))!!}">5</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 6))!!}">6</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 7))!!}">7</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 8))!!}">8</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 9))!!}">9</a></li>
   <li class="active"><a href="{!!route('jornadas/showo',array(Auth::user()->id, 10))!!}">10</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 11))!!}">11</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 12))!!}">12</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 13))!!}">13</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 14))!!}">14</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 15))!!}">15</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 16))!!}">16</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 17))!!}">17</a></li>
   

  </ul>
</nav>

@elseif ($jor==11)
<nav>
  <ul class="pagination">
    
    <li  ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 1))!!}">1 </a></li>
     <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 2))!!}">2<span class="sr-only">(current)</span> </a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 3))!!}">3</a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 4))!!}">4</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 5))!!}">5</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 6))!!}">6</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 7))!!}">7</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 8))!!}">8</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 9))!!}">9</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 10))!!}">10</a></li>
   <li class="active"><a href="{!!route('jornadas/showo',array(Auth::user()->id, 11))!!}">11</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 12))!!}">12</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 13))!!}">13</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 14))!!}">14</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 15))!!}">15</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 16))!!}">16</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 17))!!}">17</a></li>
   

  </ul>
</nav>


@elseif ($jor==12)
<nav>
  <ul class="pagination">
    
    <li  ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 1))!!}">1 </a></li>
     <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 2))!!}">2<span class="sr-only">(current)</span> </a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 3))!!}">3</a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 4))!!}">4</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 5))!!}">5</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 6))!!}">6</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 7))!!}">7</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 8))!!}">8</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 9))!!}">9</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 10))!!}">10</a></li>
   <li ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 11))!!}">11</a></li>
   <li class="active" ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 12))!!}">12</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 13))!!}">13</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 14))!!}">14</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 15))!!}">15</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 16))!!}">16</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 17))!!}">17</a></li>
   

  </ul>
</nav>

@elseif ($jor==13)
<nav>
  <ul class="pagination">
    
    <li  ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 1))!!}">1 </a></li>
     <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 2))!!}">2<span class="sr-only">(current)</span> </a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 3))!!}">3</a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 4))!!}">4</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 5))!!}">5</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 6))!!}">6</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 7))!!}">7</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 8))!!}">8</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 9))!!}">9</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 10))!!}">10</a></li>
   <li ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 11))!!}">11</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 12))!!}">12</a></li>
   <li class="active"><a href="{!!route('jornadas/showo',array(Auth::user()->id, 13))!!}">13</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 14))!!}">14</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 15))!!}">15</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 16))!!}">16</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 17))!!}">17</a></li>
   

  </ul>
</nav>

@elseif ($jor==14)
<nav>
  <ul class="pagination">
    
    <li  ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 1))!!}">1 </a></li>
     <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 2))!!}">2<span class="sr-only">(current)</span> </a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 3))!!}">3</a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 4))!!}">4</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 5))!!}">5</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 6))!!}">6</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 7))!!}">7</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 8))!!}">8</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 9))!!}">9</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 10))!!}">10</a></li>
   <li ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 11))!!}">11</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 12))!!}">12</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 13))!!}">13</a></li>
   <li class="active"><a href="{!!route('jornadas/showo',array(Auth::user()->id, 14))!!}">14</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 15))!!}">15</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 16))!!}">16</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 17))!!}">17</a></li>
   

  </ul>
</nav>


@elseif ($jor==15)
<nav>
  <ul class="pagination">
    
    <li  ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 1))!!}">1 </a></li>
     <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 2))!!}">2<span class="sr-only">(current)</span> </a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 3))!!}">3</a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 4))!!}">4</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 5))!!}">5</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 6))!!}">6</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 7))!!}">7</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 8))!!}">8</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 9))!!}">9</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 10))!!}">10</a></li>
   <li ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 11))!!}">11</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 12))!!}">12</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 13))!!}">13</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 14))!!}">14</a></li>
   <li class="active"><a href="{!!route('jornadas/showo',array(Auth::user()->id, 15))!!}">15</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 16))!!}">16</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 17))!!}">17</a></li>
   

  </ul>
</nav>

@elseif ($jor==16)
<nav>
  <ul class="pagination">
    
    <li  ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 1))!!}">1 </a></li>
     <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 2))!!}">2<span class="sr-only">(current)</span> </a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 3))!!}">3</a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 4))!!}">4</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 5))!!}">5</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 6))!!}">6</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 7))!!}">7</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 8))!!}">8</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 9))!!}">9</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 10))!!}">10</a></li>
   <li ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 11))!!}">11</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 12))!!}">12</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 13))!!}">13</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 14))!!}">14</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 15))!!}">15</a></li>
   <li class="active"><a href="{!!route('jornadas/showo',array(Auth::user()->id, 16))!!}">16</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 17))!!}">17</a></li>
   

  </ul>
</nav>

@elseif ($jor==17)
<nav>
  <ul class="pagination">
    
    <li  ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 1))!!}">1 </a></li>
     <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 2))!!}">2<span class="sr-only">(current)</span> </a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 3))!!}">3</a></li>
   <li><a  href="{!!route('jornadas/showo',array(Auth::user()->id, 4))!!}">4</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 5))!!}">5</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 6))!!}">6</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 7))!!}">7</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 8))!!}">8</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 9))!!}">9</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 10))!!}">10</a></li>
   <li ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 11))!!}">11</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 12))!!}">12</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 13))!!}">13</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 14))!!}">14</a></li>
   <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 15))!!}">15</a></li>
   <li ><a href="{!!route('jornadas/showo',array(Auth::user()->id, 16))!!}">16</a></li>
   <li class="active"><a href="{!!route('jornadas/showo',array(Auth::user()->id, 17))!!}">17</a></li>
   

  </ul>
</nav>


   @endif

@stop
 