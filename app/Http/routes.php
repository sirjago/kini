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

use App\user;
use App\grupos;

Route::get('/lolo', function()
{
	//user::first()->roles()->attach(3);
	$user = User::first();
	$user->removeRole(3);
	//$user->assignRole(1);
	
/* 	if ($user->hasRole('owner'))return 'you are the owner';
	return 'you are not'; */
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





Route::get('/', 'PagesController@home');

Route::get('about', 'PagesController@about');
Route::get('register', 'PagesController@register');
Route::get('user/{id}', 'PagesController@show');

Route::post('jornadas/guardar/{jor}', array('as' =>'jornadas.guardar','uses'=>'JornadasController@guardar'));

Route::get('jornadas/edit/{id}/{jor}',array('as'=>'jornadas/edit','uses'=>'JornadasController@edit'));

Route::post('jornadas/edit/',array('as'=>'jornadas/edit','uses'=>'JornadasController@edit'));

Route::put('jornadas/{id}/{jor}',array('as'=>'jornadas/update','uses'=>'JornadasController@update'));

Route::get('jornadas/showo/{id}/{jor}',array('as'=>'jornadas/showo','uses'=>'JornadasController@show'));

Route::get('jornadas/showo/{id}/{jor}',['middleware' =>'auth', 'uses' =>'JornadasController@show']);

Route::delete('salir/{id}', array('as'=>'grupos/salir','uses'=>'GruposController@salir'));

Route::get('grupos/dejar/{id}/{grupo}', array('as'=>'grupos/dejar','uses'=>'GruposController@dejar'));

Route::get('grupos/crear/{id}', array('as'=>'grupos/crear','uses'=>'GruposController@create'));
Route::get('grupos/unirse/{id}', 'GruposController@unirse');


Route::get('grupos/{id}/{jor}', array('as' =>'grupos.show','uses'=>'GruposController@show'));
Route::get('grupos/{id}/{jor}', ['middleware' =>'auth','uses'=>'GruposController@show']);


//Route::get('grupos/crear/{ido}', array('as' =>'grupos.create','uses'=>'GruposController@create'));
//Route::get('grupos/crear/{id}', ['middleware' =>'auth','uses'=>'GruposController@create']);
//Route::post('grupos/registrar', 'GruposController@register');
Route::post('grupos/registrar', array('as' =>'grupos/registrar','uses'=>'GruposController@register'));
Route::post('grupos/join', array('as' =>'grupos/join','uses'=>'GruposController@join'));

Route::resource('jornadas', 'JornadasController');

Route::resource('users', 'UsersController');




Route::get('login','SessionsController@create');
Route::get('logout','SessionsController@destroy');
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

