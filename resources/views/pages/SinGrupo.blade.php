@extends('master')

@section('content')






<a class="btn btn-success" href="{{ URL::route('grupos.show',array(Auth::user()->id, 1)) }}" role="button">GRUPOST</a>


GRUPOSX
<br>

<br>
<a class="btn btn-success" href="{{  URL::route('grupos/crear',Auth::user()->id)  }}" role="button">CrearBERGOTA Grupo</a>
<br><br><br><br>

{!!Auth::user()->id!!}



<a class="btn btn-success" href="{!!  URL::to('grupos/unirse',Auth::user()->id)     !!}" role="button">Unirse a Grupo</a>
@stop