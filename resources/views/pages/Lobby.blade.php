@extends('master')

@section('content')





<li>{!! $grupos!!}</li>



Lobby
<br>

<br>




<a class="btn btn-success" href="{!!  URL::to('grupos/unirse',Auth::user()->id)     !!}" role="button">Unirse a Grupo</a><br><br><br><br>

<a class="btn btn-success" href="{{ URL::route('jornadas/showo',array(Auth::user()->id, 1)) }}" role="button">QUINIELA</a>

@stop