


@extends('default')

@section('content')
<br><br><br><br>
<a class="btn btn-success" href="{{ URL::route('cuentas.datos') }}" role="button">Depositar</a>

<a class="btn btn-success" href="{{ URL::route('cuentas.notify',array(Auth::user()->id)) }}" role="button">Aviso de Deposito</a>

<a class="btn btn-success" href="{{ URL::route('cuentas.retiro',array(Auth::user()->id)) }}" role="button">Retirar</a>

<a class="btn btn-success" href="{{ URL::route('cuentas.show',array(Auth::user()->id)) }}" role="button">Mis cuentas</a>



@foreach($errors->all() as $error)
<li>{!! $error!!}</li>
@endforeach
<br><br><br><br>

<li>{!! $user!!}</li>

{!!   Form::model($user, array('route' => array('cuentas.update', Auth::user()->id), 'method' => 'PUT'))           !!}
<br><br><br><br>
<br>
{!!Form::label('Nombre Completo')!!}<br>
{!!Form::text('completo',$user->nombrecompleto,array("size" => '50',"maxlength" => '100'))!!}<br><br>
{!!Form::label('Tipo de cuenta o deposito')!!}<br>
{!! Form::select('tipo',  array('default' => 'Seleccion el tipo de cuenta','1' => 'BANCO/TRANSF.ELECTRONICA','2' => 'SALDAZO', '3' => 'TARJETA DEBITO','4' => 'TARJETA CREDITO'),$user->tipocuenta ,array('id' => 'account','onChange' => 'changebank();'))!!} 



<script type="text/javascript">
function changebank()
{
    if (document.getElementById("account").value === "1") {

         document.getElementById("bank").removeAttribute('disabled') ;
         document.getElementById("bank2").value = "";
         document.getElementById("bank2").setAttribute("disabled", true);
             document.getElementById("Equipo").removeAttribute('disabled') ;
         document.getElementById("Equipo").selectedIndex =  0;

      
    } else {
          
       document.getElementById("bank2").removeAttribute('disabled') ;
         document.getElementById("bank").value = "";
         document.getElementById("bank").setAttribute("disabled", true);
         document.getElementById("Equipo").removeAttribute('disabled') ;
         document.getElementById("Equipo").selectedIndex =  0;
       if (document.getElementById("account").value === "2") { 
         document.getElementById("Equipo").selectedIndex =  1;
document.getElementById("Equipo").setAttribute("disabled", true);

       }



    }
}
</script>

@if($user->cuentaclabe == null)
{!!Form::hidden('clabehidden','null',array("id" => 'bankhidden'))!!}
@else {!!Form::hidden('clabehidden',$user->cuentaclabe,array("id" => 'bankhidden'))!!}

@endif

@if($user->cuentatarjeta == null)
{!!Form::hidden('cuentahidden','null',array("id" => 'bank2hidden'))!!}
@else {!!Form::hidden('cuentahidden',$user->cuentatarjeta,array("id" => 'bank2hidden'))!!}

@endif




<br>
@if($user->tipocuenta == null)
{!!Form::label('CLABE')!!}<br>
{!!Form::text('clabe',$user->cuentaclabe,array("id" => 'bank',"size" => '18',"maxlength" => '18', 'disabled','onBlur' => 'changeFields();'))!!}<br> 
{!!Form::label('No. de Cuenta/Tarjeta')!!}<br>
{!!Form::text('cuenta',$user->cuentatarjeta,array("id" => 'bank2',"size" => '16',"maxlength" => '16', 'disabled','onBlur' => 'changeFields();'))!!}<br> <br>
@elseif($user->tipocuenta == 1)
{!!Form::label('CLABE')!!}<br>
{!!Form::text('clabe',$user->cuentaclabe,array("id" => 'bank',"size" => '18',"maxlength" => '18','onBlur' => 'changeFields();'))!!}<br> 
{!!Form::label('No. de Tarjeta')!!}<br>
{!!Form::text('cuenta',null,array("id" => 'bank2',"size" => '16',"maxlength" => '16', 'disabled','onBlur' => 'changeFields();'))!!}<br> <br>
@else
{!!Form::label('CLABE')!!}<br>
{!!Form::text('clabe',null,array("id" => 'bank',"size" => '18',"maxlength" => '18', 'disabled','onBlur' => 'changeFields();'))!!}<br> 
{!!Form::label('No. de Cuenta/Tarjeta')!!}<br>
{!!Form::text('cuenta',$user->cuentatarjeta,array("id" => 'bank2',"size" => '16',"maxlength" => '16','onBlur' => 'changeFields();'))!!}<br> <br>
@endif









 
 
  



{!!Form::label('Banco')!!}<br>

@if($user->banco == 0)
{!! Form::select('banco', array('default' => 'Selecciona tu banco','Banamex' => 'Banamex','BBVA BANCOMER' => 'BBVA BANCOMER', 'BANORTE' => 'BANORTE','HSBC' => 'HSBC','SANTANDER' => 'SANTANDER','SCOTIABANK' => 'SCOTIABANK','BANCOPPEL' => 'BANCOPPEL','BANCO AZTECA' => 'BANCO AZTECA','10' => 'OTRO BANCO'),null,array('id' => 'Equipo','onChange' => 'changetextbox();','onBlur' => 'changeFields();'))!!}
<br> <br>

<script type="text/javascript">
function changetextbox()
{
    if (document.getElementById("Equipo").value === "10") {
        //document.getElementById("otro").setAttribute("disabled", true);
        document.getElementById("otro").removeAttribute('disabled') ;
    } else {
      
        document.getElementById("otro").setAttribute("disabled", true);
    }
}
</script>




@else
{!! Form::select('banco', array('default' => 'Selecciona tu banco','Banamex' => 'Banamex','BBVA BANCOMER' => 'BBVA BANCOMER', 'BANORTE' => 'BANORTE','HSBC' => 'HSBC','SANTANDER' => 'SANTANDER','SCOTIABANK' => 'SCOTIABANK','BANCOPPEL' => 'BANCOPPEL','BANCO AZTECA' => 'BANCO AZTECA','10' => 'OTRO BANCO'),$user->banco,array('id' => 'Equipo','onChange' => 'changetextbox();','onBlur' => 'changeFields();'))!!}
<br> <br>
<script type="text/javascript">
function changetextbox()
{
    if (document.getElementById("Equipo").value === "10") {
        
       

    } else {
       document.getElementById("bank").value = '';
       


    }
}
</script>



@endif




@if($user->banco == null)
{!!Form::label('Otro Banco')!!}<br>
{!!Form::text('otro',null,array('id' => 'otro', 'disabled'))!!}<br><br>
@elseif($user->banco == '10')
{!!Form::label('Otro Banco')!!}<br>
{!!Form::text('otro',$user->otrobanco,array('id' => 'otro'))!!}<br><br>
@else
{!!Form::label('Otro Banco')!!}<br>
{!!Form::text('otro',null,array('id' => 'otro', 'disabled'))!!}<br><br>
@endif










<br><br><br><br>
{!!Form::submit('Actualizar',array('id' => 'accountr')) !!}<br><br>


@foreach($errors->all() as $error)
<li>{!! $error!!}</li>
@endforeach



<script type="text/javascript">
function changeFields()
{
    if (document.getElementById("account").value === "1") {
           document.getElementById("bank2hidden").value = '0000000000000000';
           document.getElementById("bankhidden").value = document.getElementById("bank").value;
           if( document.getElementById("bank").value === ""){
            document.getElementById("bankhidden").value = "";
           }
           else {document.getElementById("bankhidden").value = document.getElementById("bank").value;}

    } else {
       document.getElementById("bankhidden").value = '000000000000000000';
       document.getElementById("bank2hidden").value =  document.getElementById("bank2").value;
       

     if( document.getElementById("bank2").value === ""){
      document.getElementById("bank2hidden").value = "";
       }
           else {    document.getElementById("bank2hidden").value = document.getElementById("bank2").value;}

    }
}
</script>

{!!Form::close()!!}






@stop




