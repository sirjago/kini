@extends('master')

@section('content')

<?php $z  =1; ?>


Quiniela General

@foreach ($Record as $reco)
<li>{!! $z !!} {!! $reco->username !!}   {!! $reco->totali !!}</li>
<?php $z  =$z+1; ?>
@endforeach

<a class="btn btn-success" href="{{ URL::route('jornadas/showo',array(Auth::user()->id, 1)) }}" role="button">QUINIELA</a>

@stop