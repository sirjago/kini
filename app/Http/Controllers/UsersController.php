<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use Input;
use Redirect;
use App\user;
use Hash;


class UsersController extends Controller {


    
    
	
	public function index ()
	{
	
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
		return Redirect::route('users.index');
		
	}
	
	
	}



