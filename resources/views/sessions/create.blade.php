
@extends('master')

@section('content')

{!!Form::open(['route'=> 'sessions.store'])!!}
{!!Form::label('email')!!}<br>
{!!Form::email('email')!!}<br>


{!!Form::label('password')!!}<br>
{!!Form::password('password')!!}<br> <br>


{!!Form::submit('Login') !!}


{!!Form::close()!!}
@stop