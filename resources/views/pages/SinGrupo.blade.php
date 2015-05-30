@extends('master')

@section('content')









GRUPOS
<br>

<br>

<br><br><br><br>



<a class="btn btn-success" href="{!!  URL::to('grupos/crear',Auth::user()->id)     !!}" role="button">Crear Grupo</a>

<a class="btn btn-success" href="{!!  URL::to('grupos/unirse',Auth::user()->id)     !!}" role="button">Unirse a Grupo</a>
@stop