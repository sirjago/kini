


@extends('default')

@section('content')

@foreach($errors->all() as $error)
<li>{!! $error!!}</li>
@endforeach
<br><br><br><br>

<li>{!! $user!!}</li>

<br><br><br><br>
<li>{!! $user->estado !!}</li>
{!!Form::open()!!}
<br><br><br><br>
{!!Form::label('Nombre')!!}<br>
{!!Form::text('Nombre',$user->nombre)!!}<br><br>
{!!Form::label('username')!!}<br>
{!!Form::text('username',$user->username)!!}<br><br>
{!!Form::label('Apellido')!!}<br>
{!!Form::text('apellido',$user->apellido)!!}<br> <br>
{!!Form::label('Fecha de nacimiento')!!}<br>
{!!Form::text('fecha',$user->fecha)!!}<br> <br>
{!!Form::label('Estado')!!}<br>

@if($user->estado ==0)
<select id="userselect" name="userselect">
    <option>Select User</option>
    @foreach ($users as $usr)
  <option value="{{ $usr->estado_id }}">{{ $usr->estado}}</option>
   
    @endforeach
   </select>
<br> <br>

{!!Form::label('Ciudad')!!}<br>
   <select id="itemselect" name="itemselect">
       <option>Please choose user first</option>
 </select><br> <br>


@else
<select id="userselect" name="userselect">
    <option>Selecciona tu estado</option>
    @foreach ($users as $usr)


    @if($user->estado == $usr->estado_id)
  <option value="{{ $usr->estado_id }}" Selected="selected">{{ $usr->estado}} </option>
      @else
      <option value="{{ $usr->estado_id }}">{{ $usr->estado}}</option>
    @endif

   @endforeach

   </select>
<br> <br>
{!!Form::label('Ciudad')!!}<br>
 

   <select id="itemselect" name="itemselect" >
       <option>Selecciona tu ciudad</option>

 </select>

 
@endif






<br> <br>
{!!Form::label('Hincha de')!!}<br>
{!! Form::select('Equipo Nacional')!!}<br> <br>
{!!Form::label('Equipo Internacional Favorito')!!}<br>
{!!Form::text('Internacional',$user->Internacional)!!}<br> <br>


{!! Form::select('Estado', $ListaEstados, 4,array('id' => 'estat'))!!}
<br>
{!!Form::label('Ciudad')!!}<br>
{!! Form::select('Estado', $Municipios, 4,array('id' => 'estat'))!!}


{!!Form::close()!!}





@stop




