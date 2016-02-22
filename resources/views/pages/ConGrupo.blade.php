@extends('default')

@section('content')




<br><br><br>
<br>






<br>

<br>
Duenio GRUPOS
<br><br><br><br>







@if($jor==1)
<nav>
  <ul class="pagination">
    
    <li class="active" ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 1))!!}">1 </a></li>
     <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 2))!!}">2</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 3))!!}">3</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 4))!!}">4</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 5))!!}">5</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 6))!!}">6</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 7))!!}">7</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 8))!!}">8</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 9))!!}">9</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 10))!!}">10</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 11))!!}">11</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 12))!!}">12</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 13))!!}">13</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 14))!!}">14</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 15))!!}">15</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 16))!!}">16</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 17))!!}">17</a></li>
	 <li ><a href="{!!route('grupos.total',array(Auth::user()->id,$grupos->id, 18))!!}">Total</a></li>


	 
      
  </ul>
</nav>
	 @elseif ($jor==2)

<nav>
  <ul class="pagination">
    
     <li  ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 1))!!}">1 </a></li>
     <li class="active" ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 2))!!}">2</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 3))!!}">3</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 4))!!}">4</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 5))!!}">5</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 6))!!}">6</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 7))!!}">7</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 8))!!}">8</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 9))!!}">9</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 10))!!}">10</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 11))!!}">11</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 12))!!}">12</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 13))!!}">13</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 14))!!}">14</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 15))!!}">15</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 16))!!}">16</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 17))!!}">17</a></li>
	 <li ><a href="{!!route('grupos.total',array(Auth::user()->id,$grupos->id, 18))!!}">Total</a></li>

  </ul>
</nav>

	 @elseif ($jor==3)

<nav>
  <ul class="pagination">
    
     <li  ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 1))!!}">1 </a></li>
     <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 2))!!}">2</a></li>
	 <li class="active"><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 3))!!}">3</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 4))!!}">4</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 5))!!}">5</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 6))!!}">6</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 7))!!}">7</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 8))!!}">8</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 9))!!}">9</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 10))!!}">10</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 11))!!}">11</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 12))!!}">12</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 13))!!}">13</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 14))!!}">14</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 15))!!}">15</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 16))!!}">16</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 17))!!}">17</a></li>
	 <li ><a href="{!!route('grupos.total',array(Auth::user()->id, $grupos->id,18))!!}">Total</a></li>

  </ul>
</nav>

 @elseif ($jor==4)

<nav>
  <ul class="pagination">
    
     <li  ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 1))!!}">1 </a></li>
     <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 2))!!}">2</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 3))!!}">3</a></li>
	 <li class="active"><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 4))!!}">4</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id,5))!!}">5</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 6))!!}">6</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,7))!!}">7</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 8))!!}">8</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 9))!!}">9</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 10))!!}">10</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 11))!!}">11</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 12))!!}">12</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 13))!!}">13</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 14))!!}">14</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 15))!!}">15</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 16))!!}">16</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 17))!!}">17</a></li>
	 <li ><a href="{!!route('grupos.total',array(Auth::user()->id, $grupos->id,18))!!}">Total</a></li>

  </ul>
</nav>

 @elseif ($jor==5)

<nav>
  <ul class="pagination">
    
     <li  ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 1))!!}">1 </a></li>
     <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 2))!!}">2</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 3))!!}">3</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 4))!!}">4</a></li>
	 <li class="active"><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 5))!!}">5</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 6))!!}">6</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 7))!!}">7</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 8))!!}">8</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 9))!!}">9</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 10))!!}">10</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 11))!!}">11</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 12))!!}">12</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,13))!!}">13</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 14))!!}">14</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 15))!!}">15</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 16))!!}">16</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 17))!!}">17</a></li>
	 <li ><a href="{!!route('grupos.total',array(Auth::user()->id,$grupos->id, 18))!!}">Total</a></li>

  </ul>
</nav>

 @elseif ($jor==6)

<nav>
  <ul class="pagination">
    
     <li  ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 1))!!}">1 </a></li>
     <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 2))!!}">2</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 3))!!}">3</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,4))!!}">4</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 5))!!}">5</a></li>
	 <li class="active"><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 6))!!}">6</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,7))!!}">7</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 8))!!}">8</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 9))!!}">9</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 10))!!}">10</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,11))!!}">11</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 12))!!}">12</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 13))!!}">13</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,14))!!}">14</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 15))!!}">15</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 16))!!}">16</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 17))!!}">17</a></li>
	 <li ><a href="{!!route('grupos.total',array(Auth::user()->id,$grupos->id, 18))!!}">Total</a></li>

  </ul>
</nav>

 @elseif ($jor==7)

<nav>
  <ul class="pagination">
    
     <li  ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 1))!!}">1 </a></li>
     <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 2))!!}">2</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 3))!!}">3</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 4))!!}">4</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 5))!!}">5</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id,6))!!}">6</a></li>
	 <li class="active"><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 7))!!}">7</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 8))!!}">8</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 9))!!}">9</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 10))!!}">10</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,11))!!}">11</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 12))!!}">12</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 13))!!}">13</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 14))!!}">14</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 15))!!}">15</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 16))!!}">16</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 17))!!}">17</a></li>
	 <li ><a href="{!!route('grupos.total',array(Auth::user()->id,$grupos->id, 18))!!}">Total</a></li>

  </ul>
</nav>

 @elseif ($jor==8)

<nav>
  <ul class="pagination">
    
     <li  ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 1))!!}">1 </a></li>
     <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 2))!!}">2</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 3))!!}">3</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 4))!!}">4</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 5))!!}">5</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 6))!!}">6</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 7))!!}">7</a></li>
	 <li class="active"><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 8))!!}">8</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 9))!!}">9</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 10))!!}">10</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 11))!!}">11</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 12))!!}">12</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 13))!!}">13</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 14))!!}">14</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 15))!!}">15</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 16))!!}">16</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 17))!!}">17</a></li>
	 <li ><a href="{!!route('grupos.total',array(Auth::user()->id,$grupos->id, 18))!!}">Total</a></li>

  </ul>
</nav>


	 @elseif ($jor==9)

<nav>
  <ul class="pagination">
    
     <li  ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 1))!!}">1 </a></li>
     <li  ><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,2))!!}">2</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,3))!!}">3</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 4))!!}">4</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 5))!!}">5</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 6))!!}">6</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,7))!!}">7</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 8))!!}">8</a></li>
	 <li class="active"><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 9))!!}">9</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 10))!!}">10</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 11))!!}">11</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 12))!!}">12</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 13))!!}">13</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 14))!!}">14</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 15))!!}">15</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 16))!!}">16</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,17))!!}">17</a></li>
	 <li ><a href="{!!route('grupos.total',array(Auth::user()->id, $grupos->id,18))!!}">Total</a></li>

  </ul>
</nav>

	 @elseif ($jor==10)

<nav>
  <ul class="pagination">
    
     <li  ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 1))!!}">1 </a></li>
     <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 2))!!}">2</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 3))!!}">3</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 4))!!}">4</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 5))!!}">5</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 6))!!}">6</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 7))!!}">7</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 8))!!}">8</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 9))!!}">9</a></li>
	 <li class="active" ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 10))!!}">10</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 11))!!}">11</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 12))!!}">12</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 13))!!}">13</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 14))!!}">14</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 15))!!}">15</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 16))!!}">16</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 17))!!}">17</a></li>
	 <li ><a href="{!!route('grupos.total',array(Auth::user()->id,$grupos->id, 18))!!}">Total</a></li>

  </ul>
</nav>

 @elseif ($jor==11)

<nav>
  <ul class="pagination">
    
     <li  ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 1))!!}">1 </a></li>
     <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 2))!!}">2</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 3))!!}">3</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 4))!!}">4</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 5))!!}">5</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 6))!!}">6</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 7))!!}">7</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 8))!!}">8</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 9))!!}">9</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,10))!!}">10</a></li>
	 <li class="active"><a href="{!!route('grupos.muestra',array(Auth::user()->id, 11))!!}">11</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 12))!!}">12</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,13))!!}">13</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 14))!!}">14</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 15))!!}">15</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 16))!!}">16</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 17))!!}">17</a></li>
	 <li ><a href="{!!route('grupos.total',array(Auth::user()->id, $grupos->id,18))!!}">Total</a></li>

  </ul>
</nav>

 @elseif ($jor==12)

<nav>
  <ul class="pagination">
    
     <li  ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 1))!!}">1 </a></li>
     <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 2))!!}">2</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 3))!!}">3</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,4))!!}">4</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 5))!!}">5</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 6))!!}">6</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,7))!!}">7</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,8))!!}">8</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,9))!!}">9</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 10))!!}">10</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,11))!!}">11</a></li>
	 <li class="active"><a href="{!!route('grupos.muestra',array(Auth::user()->id, 12))!!}">12</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,13))!!}">13</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 14))!!}">14</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 15))!!}">15</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 16))!!}">16</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 17))!!}">17</a></li>
	 <li ><a href="{!!route('grupos.total',array(Auth::user()->id,$grupos->id, 18))!!}">Total</a></li>

  </ul>
</nav>

 @elseif ($jor==13)

<nav>
  <ul class="pagination">
    
     <li  ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 1))!!}">1 </a></li>
     <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 2))!!}">2</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 3))!!}">3</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 4))!!}">4</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 5))!!}">5</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 6))!!}">6</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 7))!!}">7</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 8))!!}">8</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 9))!!}">9</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 10))!!}">10</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 11))!!}">11</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 12))!!}">12</a></li>
	 <li class="active"><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 13))!!}">13</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 14))!!}">14</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 15))!!}">15</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 16))!!}">16</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 17))!!}">17</a></li>
	 <li ><a href="{!!route('grupos.total',array(Auth::user()->id,$grupos->id, 18))!!}">Total</a></li>

  </ul>
</nav>

 @elseif ($jor==14)

<nav>
  <ul class="pagination">
    
     <li  ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 1))!!}">1 </a></li>
     <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 2))!!}">2</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 3))!!}">3</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 4))!!}">4</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 5))!!}">5</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 6))!!}">6</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 7))!!}">7</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,8))!!}">8</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 9))!!}">9</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 10))!!}">10</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 11))!!}">11</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 12))!!}">12</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,13))!!}">13</a></li>
	 <li class="active"><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 14))!!}">14</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 15))!!}">15</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 16))!!}">16</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 17))!!}">17</a></li>
	 <li ><a href="{!!route('grupos.total',array(Auth::user()->id,$grupos->id, 18))!!}">Total</a></li>

  </ul>
</nav>

 @elseif ($jor==15)

<nav>
  <ul class="pagination">
    
     <li  ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 1))!!}">1 </a></li>
     <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 2))!!}">2</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 3))!!}">3</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 4))!!}">4</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 5))!!}">5</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 6))!!}">6</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 7))!!}">7</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 8))!!}">8</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 9))!!}">9</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,10))!!}">10</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 11))!!}">11</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 12))!!}">12</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 13))!!}">13</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 14))!!}">14</a></li>
	 <li class="active"><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 15))!!}">15</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 16))!!}">16</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 17))!!}">17</a></li>
	 <li ><a href="{!!route('grupos.total',array(Auth::user()->id,$grupos->id, 18))!!}">Total</a></li>

  </ul>
</nav>

 @elseif ($jor==16)

<nav>
  <ul class="pagination">
    
     <li  ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 1))!!}">1 </a></li>
     <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 2))!!}">2</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 3))!!}">3</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 4))!!}">4</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 5))!!}">5</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 6))!!}">6</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 7))!!}">7</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 8))!!}">8</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 9))!!}">9</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 10))!!}">10</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 11))!!}">11</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 12))!!}">12</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 13))!!}">13</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,14))!!}">14</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 15))!!}">15</a></li>
	 <li class="active"><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 16))!!}">16</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 17))!!}">17</a></li>
	 <li ><a href="{!!route('grupos.total',array(Auth::user()->id,$grupos->id, 18))!!}">Total</a></li>

  </ul>
</nav>

 @elseif ($jor==17)

<nav>
  <ul class="pagination">
    
     <li  ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 1))!!}">1 </a></li>
     <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 2))!!}">2</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 3))!!}">3</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 4))!!}">4</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 5))!!}">5</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 6))!!}">6</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 7))!!}">7</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 8))!!}">8</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 9))!!}">9</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 10))!!}">10</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 11))!!}">11</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 12))!!}">12</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 13))!!}">13</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 14))!!}">14</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 15))!!}">15</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 16))!!}">16</a></li>
	 <li class="active"><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 17))!!}">17</a></li>
	 <li ><a href="{!!route('grupos.total',array(Auth::user()->id,$grupos->id, 18))!!}">Total</a></li>

  </ul>
</nav>

 @elseif ($jor==18)

<nav>
  <ul class="pagination">
    
     <li  ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 1))!!}">1 </a></li>
     <li><a href="{!!route('grupos.muestra',array(Auth::user()->id, $grupos->id,2))!!}">2</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 3))!!}">3</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 4))!!}">4</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 5))!!}">5</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 6))!!}">6</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 7))!!}">7</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 8))!!}">8</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 9))!!}">9</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 10))!!}">10</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 11))!!}">11</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 12))!!}">12</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 13))!!}">13</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 14))!!}">14</a></li>
	 <li ><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 15))!!}">15</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 16))!!}">16</a></li>
	 <li><a href="{!!route('grupos.muestra',array(Auth::user()->id,$grupos->id, 17))!!}">17</a></li>
	 <li class="active" ><a href="{!!route('grupos.total',array(Auth::user()->id,$grupos->id, 18))!!}">Total</a></li>

  </ul>
</nav>

@endif

Jornada: <li>{!! $jor !!}</li>



Miembros:<li>{!! $miembros !!}</li><br><br>
{{-- Variables --}}
<?php $z  =0; ?>
<?php $y  =0; ?>
<?php $arrai =Array(); ?>
<?php $param2 = $jor ; ?>

{{-- Call a SP y asginacion de valors a arrays--}}
@foreach ($miembros as $miembro)
<?php $aciertox  =0; ?>
<?php $param1 = $miembro->id ; ?>

<?php DB::select('CALL quini.TotalJornadaUser(?,?,@aciertox,@desempatex)',array($param2,$param1)); ?>
<?php $results = DB::select('select @aciertox as aciertox'); ?>
<?php $results2 = DB::select('select @desempatex as desempatex'); ?>
<li>{!! $miembro->username !!}</li> <li>Aciertos {!!$results[0]->aciertox!!} </li> <br> 


<?php $arrai[$z] = Collect($results[0]->aciertox); ?>
<?php $usernam [$z] =Collect( $miembro->username ); ?>
<?php $arrai2 [$z] =Collect( $results2[0]->desempatex ); ?>
<?php $z  =$z+1; ?>

@endforeach

{{-- SORT de ambos arrays --}}

<?php

array_multisort($arrai2, SORT_DESC ,$usernam,$arrai );

var_dump($arrai);
var_dump($usernam);
var_dump($arrai2);
?>

<?php $arrai= new Illuminate\Support\Collection($arrai);?>

{{-- Formato para mostrar datos --}}
@foreach ($arrai as $arra)

@if    ($arrai[$y] <> $arrai2[$y])
   
{!!$arrai[$y]->first()!!} {!!$usernam[$y]->first()!!}{!! HTML::image('images/copa2.png', 'Criterio de Desempate', array( 'width' => 25, 'height' => 25 )) !!}<br>  
@else
   {!!$arrai[$y]->first()!!} {!!$usernam[$y]->first()!!}<br>  
@endif


<?php $y  =$y+1; ?>
@endforeach
<br> <br> <br> <br> 
@foreach ($arrai as $arra)

{!! $arra!!} <br> 


@endforeach




@foreach ($usernam as $usr)
{!! $usr!!} <br> 

@endforeach














<a class="btn btn-success" href="{{ URL::route('jornadas/showo',array(Auth::user()->id, 1)) }}" role="button">QUINIELA</a>






{!! Form::open(array( 'method' => 'DELETE', 'route' => array('grupos/salir', $miembros[0]->pivot->grupos_id))) !!}
                      
                        {!! Form::submit('DESHACER GRUPO', array('class' => 'btn btn-success')) !!}
@stop