


@extends('default')

@section('content')

@foreach($errors->all() as $error)
<li>{!! $error!!}</li>
@endforeach

{!!Form::open(['route'=> 'users.store'])!!}
<br><br><br><br>
{!!Form::label('email')!!}<br>
{!!Form::text('email')!!}<br>
{!!Form::label('username')!!}<br>
{!!Form::text('username')!!}<br><br>
{!!Form::label('password')!!}<br>
{!!Form::password('password')!!}<br> <br>
{!!Form::submit('Crear usuario') !!}

{!!Form::close()!!}
@stop



