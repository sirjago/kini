<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
  <div class="container">
   <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">QUINI.mx</a>
  </div>
  
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ URL::route('grupos.lobby')}}">Lobby <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        
      </ul>
	  


<ul class="nav navbar-nav navbar-right">
  @if(Auth::user())
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{Auth::user()->username}} <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ URL::route('users.index')}}">Mis Datos</a></li>
            <li><a href="{{ URL::route('jornadas/showo',array(Auth::user()->id, 1)) }}">Mi Quiniela</a></li>
            <li><a href="{{ URL::route('cuentas.show',array(Auth::user()->id)) }}">Mis Cuentas</a></li>
            <li class="divider"></li>
            <li><a href="{{ URL::route('engrupos.showall',array(Auth::user()->id, 1)) }}">Grupos Privados</a></li>
             <li><a href="{{ URL::route('privados.grupos',array(Auth::user()->id)) }}"> PrivaTT</a></li>
            <li><a href="#">Quinielas Generales</a></li>
            <li class="divider"></li>
            <li><a href="{{ URL::route('logout')}}">Logout</a></li>
          </ul>
        </li>
@else
<li><a href="{{ URL::route('register')}}">REGISTRATE</a></li>
<li><a href="/quini/public/login">INGRESO</a></li>

        @endif
      </ul>


	  
</nav>