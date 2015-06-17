


@extends('default')

@section('content')

@foreach($errors->all() as $error)
<li>{!! $error!!}</li>
@endforeach
<br><br><br><br>

<li>{!! $user!!}</li>

{!!Form::open()!!}
<br><br><br><br>
{!!Form::label('Nombre')!!}<br>
{!!Form::text('Nombre',$user->nombre)!!}<br>
{!!Form::label('username')!!}<br>
{!!Form::text('username',$user->username)!!}<br><br>
{!!Form::label('Apellido')!!}<br>
{!!Form::text('apellido',$user->apellido)!!}<br> <br>
{!!Form::label('Fecha de nacimiento')!!}<br>
{!!Form::text('fecha',$user->fecha)!!}<br> <br>
{!!Form::label('Estado')!!}<br>
{!! Form::select('Estado')!!}<br> <br>
{!!Form::label('Ciudad')!!}<br>
{!! Form::select('Municipio')!!}<br> <br>
{!! Form::select('Equipo Nacional')!!}<br> <br>
{!!Form::label('Equipo Internacional')!!}<br>
{!!Form::text('Internacional',$user->Internacional)!!}<br> <br>

{!!Form::close()!!}
@stop



