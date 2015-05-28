@extends('master')

@section('content')




UNIRSE GRUPO

{!!Form::open(['route'=> 'grupos/join'])!!}
{!!Form::label('Ingresa la clave del grupo a unirte')!!}<br>
{!!Form::text('clave')!!}<br>


{!!Form::submit('Unirte a Grupo') !!}

{!!Form::close()!!}

@stop