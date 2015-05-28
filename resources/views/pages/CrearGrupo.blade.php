@extends('master')

@section('content')
CREAR GRUPO


{!!Form::open(['route'=> 'grupos/registrar'])!!}
{!!Form::label('Nombre del grupo')!!}<br>
{!!Form::text('nombre')!!}<br>


{!!Form::submit('Crear Grupo') !!}

{!!Form::close()!!}









@stop