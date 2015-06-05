@extends('master')

@section('content')
<?php  use Jenssegers\Date\Date;   ?>
<?php  Date::setLocale('es');  ?>
<?php $a=0; ?>

<li>{!! $jornadas!!}</li>
<li>{!! $jor!!}</li>
<li>{!! $equipos[0]->nombre!!}</li>
<li>{!! $resultados[0]->resultado!!}</li>
<a class="btn btn-success" href="{{ URL::route('grupos.show',array(Auth::user()->id, $jor)) }}" role="button">GRUPOS</a>

{!!Form::open(array('route' =>array('jornadas.guardar', $jor)))!!}




<br>

<br>

<br><br><br><br>

<table style="width:80%">
    <?php $date = new Date($partidos[0]->horario);?>
  <tr>
  @if (strtotime($partidos[0]->horario) < strtotime('now'))
	
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!} {!! $equipos[$partidos[0]->local]->nombre!!}  {!! HTML::image($equipos[$partidos[0]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[0]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[0]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>


{{-- Valida que tenga datos de los resultados que vienen de la BD --}}
  @if (isset($resultados[0]))
  
     <td>{!!$resultados[0]->ML!!} - {!!$resultados[0]->MV!!}  Fallo  </td>
   
   @endif



@else     
	
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1'))!!} {!! $equipos[$partidos[0]->local]->nombre!!}  {!! HTML::image($equipos[$partidos[0]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2'))!!}</td>		
    <td>{!!Form::radio('j1', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[0]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[0]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
	  <td>{!! $date->format('l j H:i')  !!}</td>
   @endif
  </tr>
  
  
  
    <?php $date = new Date($partidos[1]->horario);?>
  <tr>
       @if (strtotime($partidos[1]->horario) < strtotime('now'))
	
    <td>{!!Form::radio('j2', '1',false,array('id'=>'1','disabled'))!!}{!! $equipos[$partidos[1]->local]->nombre!!}  {!! HTML::image($equipos[$partidos[1]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j2', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j2', '3',false,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[1]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[1]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>

{{-- Valida que tenga datos de los resultados que vienen de la BD --}}
  @if (isset($resultados[1]))
  
     <td>{!!$resultados[1]->ML!!} - {!!$resultados[1]->MV!!}  Fallo  </td>
   
   @endif

@else     
	
    <td>{!!Form::radio('j2', '1',false,array('id'=>'1'))!!}{!! $equipos[$partidos[1]->local]->nombre!!} {!! HTML::image($equipos[$partidos[1]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
    <td>{!!Form::radio('j2', '2',false,array('id'=>'2'))!!}</td>		
    <td>{!!Form::radio('j2', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[1]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[1]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
	  <td>{!! $date->format('l j H:i')  !!}</td>
   @endif
  </tr>
  
    <?php $date = new Date($partidos[2]->horario);?>
  <tr>
   @if (strtotime($partidos[2]->horario) < strtotime('now'))
	
    <td>{!!Form::radio('j3', '1',false,array('id'=>'1','disabled'))!!}{!! $equipos[$partidos[2]->local]->nombre!!}   {!! HTML::image($equipos[$partidos[2]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j3', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j3', '3',false,array('id'=>'3','disabled'))!!}{!! $equipos[$partidos[2]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[2]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>

{{-- Valida que tenga datos de los resultados que vienen de la BD --}}
  @if (isset($resultados[2]))
  
     <td>{!!$resultados[2]->ML!!} - {!!$resultados[2]->MV!!}  Fallo  </td>
   
   @endif


@else     
	
    <td>{!!Form::radio('j3', '1',false,array('id'=>'1'))!!} {!! $equipos[$partidos[2]->local]->nombre!!} {!! HTML::image($equipos[$partidos[2]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j3', '2',false,array('id'=>'2'))!!}</td>		
    <td>{!!Form::radio('j3', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[2]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[2]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}      </td>
 <td>{!! $date->format('l j H:i')  !!}</td>
	 @endif
  </tr>
  
  
    <?php $date = new Date($partidos[3]->horario);?>
   <tr>
   @if (strtotime($partidos[3]->horario) < strtotime('now'))
	
    <td>{!!Form::radio('j4', '1',false,array('id'=>'1','disabled'))!!} {!! $equipos[$partidos[3]->local]->nombre!!} {!! HTML::image($equipos[$partidos[3]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j4', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j4', '3',false,array('id'=>'3','disabled'))!!}   {!! $equipos[$partidos[3]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[3]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>

{{-- Valida que tenga datos de los resultados que vienen de la BD --}}
  @if (isset($resultados[3]))
  
     <td>{!!$resultados[3]->ML!!} - {!!$resultados[3]->MV!!}  Fallo  </td>
   
   @endif


@else     
	
    <td>{!!Form::radio('j4', '1',false,array('id'=>'1'))!!} {!! $equipos[$partidos[3]->local]->nombre!!} {!! HTML::image($equipos[$partidos[3]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j4', '2',false,array('id'=>'2'))!!}</td>		
    <td>{!!Form::radio('j4', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[3]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[3]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
	 <td>{!! $date->format('l j H:i')  !!}</td>
   @endif
  </tr>
  
    <?php $date = new Date($partidos[4]->horario);?>
   <tr>
      @if (strtotime($partidos[4]->horario) < strtotime('now'))
	
    <td>{!!Form::radio('j5', '1',false,array('id'=>'1','disabled'))!!} {!! $equipos[$partidos[4]->local]->nombre!!} {!! HTML::image($equipos[$partidos[4]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j5', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j5', '3',false,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[4]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[4]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
{{-- Valida que tenga datos de los resultados que vienen de la BD --}}
  @if (isset($resultados[4]))
  
     <td>{!!$resultados[4]->ML!!} - {!!$resultados[4]->MV!!}  Fallo  </td>
   
   @endif


@else     
	
    <td>{!!Form::radio('j5', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[4]->local]->nombre!!} {!! HTML::image($equipos[$partidos[4]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j5', '2',false,array('id'=>'2'))!!}</td>		
    <td>{!!Form::radio('j5', '3',false,array('id'=>'3'))!!}   {!! $equipos[$partidos[4]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[4]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
	 <td>{!! $date->format('l j H:i')  !!}</td>
   @endif
    
  </tr>
  
    <?php $date = new Date($partidos[5]->horario);?>
   <tr>
    @if (strtotime($partidos[5]->horario) < strtotime('now'))
	
    <td>{!!Form::radio('j6', '1',false,array('id'=>'1','disabled'))!!}  {!! $equipos[$partidos[5]->local]->nombre!!} {!! HTML::image($equipos[$partidos[5]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j6', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j6', '3',false,array('id'=>'3','disabled'))!!}  {!! $equipos[$partidos[5]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[5]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>

{{-- Valida que tenga datos de los resultados que vienen de la BD --}}
  @if (isset($resultados[5]))
  
     <td>{!!$resultados[5]->ML!!} - {!!$resultados[5]->MV!!}  Fallo  </td>
   
   @endif


@else     
	
    <td>{!!Form::radio('j6', '1',false,array('id'=>'1'))!!} {!! $equipos[$partidos[5]->local]->nombre!!}{!! HTML::image($equipos[$partidos[5]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j6', '2',false,array('id'=>'2'))!!}</td>		
    <td>{!!Form::radio('j6', '3',false,array('id'=>'3'))!!}   {!! $equipos[$partidos[5]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[5]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
	  <td>{!! $date->format('l j H:i')  !!}</td>
   @endif
  </tr>
  
    <?php $date = new Date($partidos[6]->horario);?>
   <tr>
    @if (strtotime($partidos[6]->horario) < strtotime('now'))
	
    <td>{!!Form::radio('j7', '1',false,array('id'=>'1','disabled'))!!} {!! $equipos[$partidos[6]->local]->nombre!!}  {!! HTML::image($equipos[$partidos[6]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}  </td>
    <td>{!!Form::radio('j7', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j7', '3',false,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[6]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[6]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}   </td>

{{-- Valida que tenga datos de los resultados que vienen de la BD --}}
  @if (isset($resultados[6]))
  
     <td>{!!$resultados[6]->ML!!} - {!!$resultados[6]->MV!!}  Fallo  </td>
   
   @endif

@else     
	
    <td>{!!Form::radio('j7', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[6]->local]->nombre!!} {!! HTML::image($equipos[$partidos[6]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j7', '2',false,array('id'=>'2'))!!}</td>		
    <td>{!!Form::radio('j7', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[6]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[6]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
	  <td>{!! $date->format('l j H:i')  !!}</td>
   @endif
  </tr>
  
    <?php $date = new Date($partidos[7]->horario);?>
   <tr>
    @if (strtotime($partidos[7]->horario) < strtotime('now'))
	
    <td>{!!Form::radio('j8', '1',false,array('id'=>'1','disabled'))!!}  {!! $equipos[$partidos[7]->local]->nombre!!} {!! HTML::image($equipos[$partidos[7]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j8', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j8', '3',false,array('id'=>'3','disabled'))!!}{!! $equipos[$partidos[7]->visitante]->nombre!!}{!! HTML::image($equipos[$partidos[7]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>

{{-- Valida que tenga datos de los resultados que vienen de la BD --}}
  @if (isset($resultados[7]))
  
     <td>{!!$resultados[7]->ML!!} - {!!$resultados[7]->MV!!}  Fallo  </td>
   
   @endif

@else     
	
    <td>{!!Form::radio('j8', '1',false,array('id'=>'1'))!!}   {!! $equipos[$partidos[7]->local]->nombre!!}{!! HTML::image($equipos[$partidos[7]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!}</td>
    <td>{!!Form::radio('j8', '2',false,array('id'=>'2'))!!}</td>		
    <td>{!!Form::radio('j8', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[7]->visitante]->nombre!!}  {!! HTML::image($equipos[$partidos[7]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
	  <td>{!! $date->format('l j H:i')  !!}</td>
   @endif
  </tr>
    <?php $date = new Date($partidos[8]->horario);?>
   <tr>
     @if (strtotime($partidos[8]->horario) < strtotime('now'))
	
    <td>{!!Form::radio('j9', '1',false,array('id'=>'1','disabled'))!!} {!! $equipos[$partidos[8]->local]->nombre!!} {!! HTML::image($equipos[$partidos[8]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j9', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j9', '3',false,array('id'=>'3','disabled'))!!}  {!! $equipos[$partidos[8]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[8]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
 
{{-- Valida que tenga datos de los resultados que vienen de la BD --}}
  @if (isset($resultados[8]))
  
     <td>{!!$resultados[8]->ML!!} - {!!$resultados[8]->MV!!}  Fallo  </td>
   
   @endif


@else     
	
    <td>{!!Form::radio('j9', '1',false,array('id'=>'1'))!!} {!! $equipos[$partidos[8]->local]->nombre!!}  {!! HTML::image($equipos[$partidos[8]->local]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
    <td>{!!Form::radio('j9', '2',false,array('id'=>'2'))!!}</td>		
    <td>{!!Form::radio('j9', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[8]->visitante]->nombre!!} {!! HTML::image($equipos[$partidos[8]->visitante]->logourl, 'alt', array( 'width' => 25, 'height' => 25 )) !!} </td>
	 <td>{!! $date->format('l j H:i')  !!}</td>
   @endif
  </tr>
</table>







{!!Form::submit('Guardar') !!}
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
 

