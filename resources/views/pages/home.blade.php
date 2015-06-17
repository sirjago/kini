@extends('default')

@section('content')



<div class="jumbotron">
        <h1>Bienvenido a Quini</h1>
        <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>To see the difference between static and fixed top navbars, just scroll.</p>
        
@if(Auth::guest())
        <p>
        	
          <a class="btn btn-lg btn-primary" href="{{ URL::route('register')}}" role="button">Registrate! &raquo;</a>
        </p>
@endif
      </div>


@stop


