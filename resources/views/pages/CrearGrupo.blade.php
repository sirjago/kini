@extends('master')

@section('content')

@foreach($errors->all() as $error)
<li>{!! $error!!}</li>
@endforeach

CREAR GRUPO


{!!Form::open(['route'=> 'grupos/registrar'])!!}
{!!Form::label('Nombre del grupo')!!}<br>
{!!Form::text('nombre')!!}<br>


{!!Form::submit('Crear Grupo') !!}

{!!Form::close()!!}









@stop