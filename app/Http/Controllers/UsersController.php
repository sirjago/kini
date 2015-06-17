<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use Input;
use Flash;
use Redirect;
use App\user;
use Hash;
use Auth;


class UsersController extends Controller {


    
    
	
	public function index ()
	{
	
    $user = User::find(Auth::user()->id);
    $estado = Estado::whereestadoId($user->estado)->WhereMunicipioId($user->municipio)->first();
	return view('pages.perfil',['user' => $user]);
	}

	
	
	public function register ()
	{
			
		
		return view('pages.register');
		
	}
	
	public function store (CreateUserRequest $Request)
	{
		
		
		
		$user = new User;
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->email = Input::get('email');
		$user->save();
		
		//return Redirect::route('sessions.create');
		
        Auth::attempt(Input::only('email','password'))  ; 
        flash::overlay('Bienvenido a formar para de la comunidad Quini.MX','BIENVENIDO'); 
     return Redirect::route('jornadas/showo',array(Auth::user()->id,1));
 
	}
	
	
	}



