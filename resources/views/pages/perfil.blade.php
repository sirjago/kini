


@extends('default')

@section('content')




@foreach($errors->all() as $error)
<li>{!! $error!!}</li>
@endforeach
<br><br><br><br>

<li>{!! $user!!}</li>


<br><br><br><br>
<li>{!! $user->estado !!}</li>

{!!   Form::model($user, array('route' => array('user/update', Auth::user()->id), 'method' => 'PUT'))           !!}
<br><br><br><br>
{!!Form::label('username')!!}<br>
{!!Form::text('username',$user->username)!!}<br><br>
{!!Form::label('Nombre ')!!}{!!Form::label('Apellido')!!}<br>
{!!Form::text('nombre',$user->nombre)!!}

{!!Form::text('apellido',$user->apellido)!!}<br> <br>
{!!Form::label('Fecha de nacimiento')!!}<br>
{!! Form::text('date', $user->fecha, array('id' => 'datepicker')) !!}<br> <br>
{!!Form::label('Estado')!!}<br>

@if($user->estado ==0)
<select id="userselect" name="userselect">
    <option>Selecciona tu estado</option>
    @foreach ($users as $usr)
  <option value="{{ $usr->estado_id }}">{{ $usr->estado}}</option>
   
    @endforeach
   </select>
<br> <br>

{!!Form::label('Ciudad')!!}<br>
   <select id="itemselect" name="itemselect">
       <option>Selecciona tu ciudad</option>
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

@if($user->municipio ==0)

<br> <br>
{!!Form::label('Ciudad')!!}<br>
 

   <select id="itemselect" name="itemselect" >
       <option>Selecciona tu ciudad</option>

 </select>
 @else
<br>{!!Form::label('Ciudad')!!}<br>
{!! Form::select('itemselect', $Municipios, $user->municipio,array('id' => 'itemselect'))!!}

 @endif

 
@endif






<br> <br>
{!!Form::label('Hincha de')!!}<br>
@if($user->equipo ==0)
{!! Form::select('EquipoNacional',$equipos)!!}<br> <br>
@else
{!! Form::select('EquipoNacional',$equipos,$user->equipo)!!}<br> <br>
@endif




{!!Form::label('Equipo Internacional Favorito')!!}<br>

@if($user->inter == 0)
{!! Form::select('EquipoInter',$inter,null,array('id' => 'EquipoInt','onChange' => 'changetextbox();') )!!}<br> <br>

<script type="text/javascript">
function changetextbox()
{
    if (document.getElementById("EquipoInt").value === "27") {
        //document.getElementById("otro").setAttribute("disabled", true);
        document.getElementById("otro").removeAttribute('disabled') ;
    } else {
      
        document.getElementById("otro").setAttribute("disabled", true);
    }
}
</script>




@else
{!! Form::select('EquipoInter',$inter,$user->inter,array('id' => 'EquipoInt','onChange' => 'changetextbox();'))!!}<br> <br>
<script type="text/javascript">
function changetextbox()
{
    if (document.getElementById("EquipoInt").value === "27") {
        
        document.getElementById("otro").removeAttribute('disabled') ;
    } else {
       document.getElementById("otro").value = '';
        document.getElementById("otro").setAttribute("disabled", false);


    }
}
</script>



@endif




@if($user->internacional == null)
{!!Form::label('Otro Equipo')!!}<br>
{!!Form::text('otro',null,array('id' => 'otro', 'disabled'))!!}<br><br>
@else
{!!Form::label('Otro Equipo')!!}<br>
{!!Form::text('otro',$user->internacional,array('id' => 'otro'))!!}<br><br>
@endif










<br><br><br><br>
{!!Form::submit('Actualizar') !!}<br><br>


{!!Form::close()!!}






@stop




