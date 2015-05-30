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

//::select('select @aciertox as aciertox');
//$results = DB::select('call quini.TotalJornadaUser(?,?,@aciertox)',array($param1, $param2, $aciertox));
 //dd($search);


     
    
//return grupo_user::all();
//	return grupos::all()->users;
	//return User::find(2)->grupos;
	//$grupod= User::find(1)->grupos;
	//$grupete =  User::find(1)->grupos;
      //  $user = User::find(1);
	
	//	dd($user();
//dd($grupod->first()->pivot->owner);

	
 //return grupos::find(14)->users;
    // return grupos::all();
//dd(User::find(1)->grupos(1));

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


Route::get('grupos/{id}', array('as' =>'grupos.show','uses'=>'GruposController@show'));
Route::get('grupos/{id}', ['middleware' =>'auth','uses'=>'GruposController@show']);
Route::get('grupos/unirse/{id}', 'GruposController@unirse');
Route::get('grupos/crear/{id}', 'GruposController@create');
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

