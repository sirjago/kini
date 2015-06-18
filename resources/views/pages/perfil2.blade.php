


@extends('default')

@section('content')


<?php $z  =0; ?>

<br><br><br><br><br><br><br><br>
<label for="estado">Parent Category</label>
    <select name="estado" id="estado">
        @foreach($ListaEstados as $estat)
        <option value="{{ $z}}">{{ $estat }}</option>
         <?php $z  =$z+1; ?>
        @endforeach
    </select>
    <br/><br/>



@stop




