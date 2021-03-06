<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Jenssegers\Date\Date;
use App\user;
use App\grupos;
use App\general;
use App\quiniela;
use App\estado;
use App\Saldo;
use App\deposito;
use Illuminate\Support\Collection;

Route::get('/lolo', function()
{
	
      
       $x =  DB::select('select fecha from general where id = 1');



$date = new Date($x[0]->fecha);
  
  if (strtotime($date) > strtotime('now'))
{
dd('hola');
	}
else {
	 dd('no mayor');

}
	
}
);


Route::get('/test', function()
{
	
$param1 = 1; 
$param2 = 1;
$total  =0;
$aciertox  =0;



 DB::select('CALL quini.TotalJornadaUser(?,?,@aciertox)',array($param1,$param2));
$results = DB::select('select @aciertox as aciertox');
dd($results[0]->aciertox);



}

	);


Route::get('api/dropdown', function(){
  $input = Input::get('option');
	$municipio= estado::whereEstadoId($input)->lists('municipio','municipio_id');;
	return Response::make($municipio);
});

Route::get('api/selected', function(){

  $idm= user::whereId(Auth::user()->id)->select('municipio')->first();
  return Response::make($idm);
});




Route::get('myroute','DropdownController@firstMethod');
Route::get('loadsubcat/{id}','DropdownController@secondMethod');
Route::get('verga','DropdownController@index');

Route::get('/myurl/', ['as' => 'items.duplicate', 'uses' => 'DropdownController@duplicate']);





Route::get('/', 'PagesController@home');

Route::get('about', 'PagesController@about');
Route::get('/register',array('as' =>'register','uses'=> 'PagesController@register'));
Route::get('user/{id}', 'PagesController@show');
Route::put('user/update/{user_id}/',array('as'=>'user/update','uses'=>'UsersController@update'));

Route::get('cuenta/show/{id}/', array('as' =>'cuentas.show','uses'=>'CuentasController@show'));
Route::get('cuenta/show/{id}/',['middleware' =>'auth', 'uses' =>'CuentasController@show']);
Route::get('cuenta/show/banco/{id}/', array('as' =>'bancos.show','uses'=>'CuentasController@banco'));
Route::put('cuenta/update/{user_id}/', array('as' =>'cuentas.update','uses'=>'CuentasController@update'));
Route::get('cuenta/retiro/{user_id}/', array('as' =>'cuentas.retiro','uses'=>'CuentasController@retiro'));
Route::get('cuenta/datos/', array('as' =>'cuentas.datos','uses'=>'CuentasController@datos'));
Route::post('cuenta/deposito/', array('as' =>'cuentas.deposito','uses'=>'CuentasController@deposito'));
Route::get('cuenta/notify/{id}/', array('as' =>'cuentas.notify','uses'=>'CuentasController@notify'));
Route::post('cuenta/solicitar/{id}/', array('as' =>'cuentas.solicitar','uses'=>'CuentasController@solicitud'));
Route::get('cuenta/solicitar/{id}/',['middleware' =>'auth', 'uses' =>'CuentasController@solicitud']);
Route::delete('cuenta/delete/{user_id}/{id}/', array('as' =>'cuentas.delete','uses'=>'CuentasController@delete'));

Route::post('jornadas/guardar/{jor}', array('as' =>'jornadas.guardar','uses'=>'JornadasController@guardar'));

Route::get('jornadas/edit/{id}/{jor}',array('as'=>'jornadas/edit','uses'=>'JornadasController@edit'));

Route::post('jornadas/edit/',array('as'=>'jornadas/edit','uses'=>'JornadasController@edit'));

Route::put('jornadas/{user_id}/{jor}',array('as'=>'jornadas/update','uses'=>'JornadasController@update'));

Route::get('jornadas/showo/{id}/{jor}',array('as'=>'jornadas/showo','uses'=>'JornadasController@show'));

Route::get('jornadas/showo/{id}/{jor}',['middleware' =>'auth', 'uses' =>'JornadasController@show']);

Route::delete('salir/{id}', array('as'=>'grupos/salir','uses'=>'GruposController@salir'));




Route::get('grupos/dejar/{id}/{grupo}', array('as'=>'grupos/dejar','uses'=>'GruposController@dejar'));
Route::get('grupos/general/{id}', array('as'=>'grupos.general','uses'=>'GruposController@general'));
Route::get('grupos/lobby', array('as'=>'grupos.lobby','uses'=>'GruposController@lobby'));
Route::get('grupos/crear/{id}', array('as'=>'grupos/crear','uses'=>'GruposController@create'));
Route::get('grupos/unirse/{id}', 'GruposController@unirse');

Route::get('grupos/total/{id}/{gpo}/{jor}', array('as' =>'grupos.total','uses'=>'GruposController@total'));
Route::get('privados/{id}/', array('as' =>'privados.grupos','uses'=>'GruposController@grupos'));
Route::get('grupos/{id}/{jor}', array('as' =>'grupos.show','uses'=>'GruposController@show'));
Route::get('grupos/{id}/{jor}', ['middleware' =>'auth','uses'=>'GruposController@show']);


Route::get('engrupos/{id}/{jor}', array('as' =>'engrupos.showall','uses'=>'GruposController@showAll'));
Route::get('engrupos/{id}/{jor}', ['middleware' =>'auth','uses'=>'GruposController@showAll']);

Route::get('grupos/muestra/{id}/{gpo}/{jor}', array('as' =>'grupos.muestra','uses'=>'GruposController@muestra'));
Route::get('grupos/muestra/{id}/{gpo}/{jor}', ['middleware' =>'auth','uses'=>'GruposController@muestra']);


Route::post('grupos/unircosto/{id}/{grupo}/{costo}', array('as' =>'grupos/unircosto','uses'=>'GruposController@unircosto'));


Route::post('grupos/registrar', array('as' =>'grupos/registrar','uses'=>'GruposController@register'));
Route::post('grupos/join', array('as' =>'grupos/join','uses'=>'GruposController@join'));
Route::post('grupos/privado', array('as' =>'grupos/privado','uses'=>'GruposController@privado'));
Route::resource('jornadas', 'JornadasController');

Route::resource('users', 'UsersController');




Route::get('login','SessionsController@create');
Route::get('logout',array('as' =>'logout','uses'=>'SessionsController@destroy'));
Route::resource('sessions', 'SessionsController');

Route::get('admin',function()
{
	return 'admin page';
});

Route::get('admin2',['middleware' =>'auth', 'uses' =>'SessionsController@create']);



Route::get('logged', function()
{
return 'logged';	
	
})->before('auth.basic');

