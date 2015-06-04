@extends('master')

@section('content')




UNIRSE GRUPO

@foreach($errors->all() as $error)
<li>{!! $error!!}</li>
@endforeach


{!!Form::open(['route'=> 'grupos/join'])!!}
{!!Form::label('Ingresa la clave del grupo a unirte')!!}<br>
{!!Form::text('clave')!!}<br>


{!!Form::submit('Unirte a Grupo') !!}

{!!Form::close()!!}

@stop