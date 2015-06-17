<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JornadasController;
use Illuminate\Http\Request;
use Redirect;
use Session;
use Flash;
use Auth;
use Input;		

class  SessionsController extends Controller {
	public function create(){
		
		//	if(Auth::check()) return Redirect::route('jornadas/showo',array(Auth::user()->id,1));
		if(Auth::check()) return Redirect::to('/admin');
		
		return  view ('sessions.create');
	}
	
	
	public function store(){
		
		if(Auth::attempt(Input::only('email','password')))
		{
		//	return "Welcome " . Auth::user()->id;
		
	
	return Redirect::route('jornadas/showo',array(Auth::user()->id,1));
		}
		return 'Failed :(';
	}
	
	
	public function destroy() {
		
		Auth::logout();
		return Redirect::route('sessions.create');
	}
	
}