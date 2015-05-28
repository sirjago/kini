@extends('master')

@section('content')



<li>{!! $jornadas!!}</li>
<li>{!! $jor!!}</li>
<li>{!! $equipos[0]->nombre!!}</li>



{!!Form::open(array('route' =>array('jornadas.guardar', $jor)))!!}




<br>

<br>

<br><br><br><br>

<table style="width:80%">
  <tr>
  @if (strtotime($partidos[0]->horario) < strtotime('now'))
	
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1','disabled'))!!} {!! $equipos[$partidos[0]->local]->nombre!!}</td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j1', '3',false,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[0]->visitante]->nombre!!}  </td>
@else     
	
    <td>{!!Form::radio('j1', '1',false,array('id'=>'1'))!!} {!! $equipos[$partidos[0]->local]->nombre!!}</td>
    <td>{!!Form::radio('j1', '2',false,array('id'=>'2'))!!}</td>		
    <td>{!!Form::radio('j1', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[0]->visitante]->nombre!!}    </td>
	 @endif
  </tr>
  
  
  
  
  <tr>
       @if (strtotime($partidos[1]->horario) < strtotime('now'))
	
    <td>{!!Form::radio('j2', '1',false,array('id'=>'1','disabled'))!!}{!! $equipos[$partidos[1]->local]->nombre!!}</td>
    <td>{!!Form::radio('j2', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j2', '3',false,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[1]->visitante]->nombre!!} </td>
@else     
	
    <td>{!!Form::radio('j2', '1',false,array('id'=>'1'))!!}{!! $equipos[$partidos[1]->local]->nombre!!}</td>
    <td>{!!Form::radio('j2', '2',false,array('id'=>'2'))!!}</td>		
    <td>{!!Form::radio('j2', '3',false,array('id'=>'3'))!!} {!! $equipos[$partidos[1]->visitante]->nombre!!}  </td>
	 @endif
  </tr>
  
  
  <tr>
   @if (strtotime($partidos[2]->horario) < strtotime('now'))
	
    <td>{!!Form::radio('j3', '1',false,array('id'=>'1','disabled'))!!}{!! $equipos[$partidos[2]->local]->nombre!!}</td>
    <td>{!!Form::radio('j3', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j3', '3',false,array('id'=>'3','disabled'))!!}{!! $equipos[$partidos[2]->visitante]->nombre!!} </td>
@else     
	
    <td>{!!Form::radio('j3', '1',false,array('id'=>'1'))!!} {!! $equipos[$partidos[2]->local]->nombre!!}</td>
    <td>{!!Form::radio('j3', '2',false,array('id'=>'2'))!!}</td>		
    <td>{!!Form::radio('j3', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[2]->visitante]->nombre!!}       </td>
	 @endif
  </tr>
  
  
  
   <tr>
   @if (strtotime($partidos[3]->horario) < strtotime('now'))
	
    <td>{!!Form::radio('j4', '1',false,array('id'=>'1','disabled'))!!} {!! $equipos[$partidos[3]->local]->nombre!!}</td>
    <td>{!!Form::radio('j4', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j4', '3',false,array('id'=>'3','disabled'))!!}   {!! $equipos[$partidos[3]->visitante]->nombre!!}  </td>
@else     
	
    <td>{!!Form::radio('j4', '1',false,array('id'=>'1'))!!} {!! $equipos[$partidos[3]->local]->nombre!!} </td>
    <td>{!!Form::radio('j4', '2',false,array('id'=>'2'))!!}</td>		
    <td>{!!Form::radio('j4', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[3]->visitante]->nombre!!}    </td>
	 @endif
  </tr>
  
   <tr>
      @if (strtotime($partidos[4]->horario) < strtotime('now'))
	
    <td>{!!Form::radio('j5', '1',false,array('id'=>'1','disabled'))!!} {!! $equipos[$partidos[4]->local]->nombre!!} </td>
    <td>{!!Form::radio('j5', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j5', '3',false,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[4]->visitante]->nombre!!}   </td>
@else     
	
    <td>{!!Form::radio('j5', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[4]->local]->nombre!!} </td>
    <td>{!!Form::radio('j5', '2',false,array('id'=>'2'))!!}</td>		
    <td>{!!Form::radio('j5', '3',false,array('id'=>'3'))!!}   {!! $equipos[$partidos[4]->visitante]->nombre!!}  </td>
	 @endif
  </tr>
  
   <tr>
    @if (strtotime($partidos[5]->horario) < strtotime('now'))
	
    <td>{!!Form::radio('j6', '1',false,array('id'=>'1','disabled'))!!}  {!! $equipos[$partidos[5]->local]->nombre!!} </td>
    <td>{!!Form::radio('j6', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j6', '3',false,array('id'=>'3','disabled'))!!}  {!! $equipos[$partidos[5]->visitante]->nombre!!}   </td>
@else     
	
    <td>{!!Form::radio('j6', '1',false,array('id'=>'1'))!!} {!! $equipos[$partidos[5]->local]->nombre!!} </td>
    <td>{!!Form::radio('j6', '2',false,array('id'=>'2'))!!}</td>		
    <td>{!!Form::radio('j6', '3',false,array('id'=>'3'))!!}   {!! $equipos[$partidos[5]->visitante]->nombre!!}  </td>
	 @endif
  </tr>
  
   <tr>
    @if (strtotime($partidos[6]->horario) < strtotime('now'))
	
    <td>{!!Form::radio('j7', '1',false,array('id'=>'1','disabled'))!!} {!! $equipos[$partidos[6]->local]->nombre!!} </td>
    <td>{!!Form::radio('j7', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j7', '3',false,array('id'=>'3','disabled'))!!} {!! $equipos[$partidos[6]->visitante]->nombre!!}    </td>
@else     
	
    <td>{!!Form::radio('j7', '1',false,array('id'=>'1'))!!}  {!! $equipos[$partidos[6]->local]->nombre!!} </td>
    <td>{!!Form::radio('j7', '2',false,array('id'=>'2'))!!}</td>		
    <td>{!!Form::radio('j7', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[6]->visitante]->nombre!!}   </td>
	 @endif
  </tr>
  
   <tr>
    @if (strtotime($partidos[7]->horario) < strtotime('now'))
	
    <td>{!!Form::radio('j8', '1',false,array('id'=>'1','disabled'))!!}  {!! $equipos[$partidos[7]->local]->nombre!!} </td>
    <td>{!!Form::radio('j8', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j8', '3',false,array('id'=>'3','disabled'))!!}{!! $equipos[$partidos[7]->visitante]->nombre!!} </td>
@else     
	
    <td>{!!Form::radio('j8', '1',false,array('id'=>'1'))!!}   {!! $equipos[$partidos[7]->local]->nombre!!} </td>
    <td>{!!Form::radio('j8', '2',false,array('id'=>'2'))!!}</td>		
    <td>{!!Form::radio('j8', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[7]->visitante]->nombre!!}   </td>
	 @endif
  </tr>
  
   <tr>
     @if (strtotime($partidos[8]->horario) < strtotime('now'))
	
    <td>{!!Form::radio('j9', '1',false,array('id'=>'1','disabled'))!!} {!! $equipos[$partidos[8]->local]->nombre!!}  </td>
    <td>{!!Form::radio('j9', '2',false,array('id'=>'2','disabled'))!!}</td>
	<td>{!!Form::radio('j9', '3',false,array('id'=>'3','disabled'))!!}  {!! $equipos[$partidos[8]->visitante]->nombre!!}  </td>
@else     
	
    <td>{!!Form::radio('j9', '1',false,array('id'=>'1'))!!} {!! $equipos[$partidos[8]->local]->nombre!!}   </td>
    <td>{!!Form::radio('j9', '2',false,array('id'=>'2'))!!}</td>		
    <td>{!!Form::radio('j9', '3',false,array('id'=>'3'))!!}  {!! $equipos[$partidos[8]->visitante]->nombre!!}   </td>
	 @endif
  </tr>
</table>







{!!Form::submit('Guardar') !!}
{!!Form::close()!!}

<nav>
  <ul class="pagination">
    
    <li class="active"><a href="{!!route('jornadas/showo',array(Auth::user()->id, 1))!!}">1 <span class="sr-only">(current)</span></a></li>
     <li><a href="{!!route('jornadas/showo',array(Auth::user()->id, 2))!!}">2 </a></li>
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
 

