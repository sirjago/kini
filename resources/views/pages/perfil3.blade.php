


@extends('default')

@section('content')
<?php $y  =0; ?>




<br><br><br><br><br><br><br><br><br><br><br><br>
<select id="userselect" name="userselect">
    <option>Select User</option>
    @foreach ($users as $user)
      <option value="{{ $user->estado_id }}">{{ $user->estado}}</option>
    @endforeach
   </select>


   <select id="itemselect" name="itemselect">
       <option>Please choose user first</option>

 </select>
  






@stop





