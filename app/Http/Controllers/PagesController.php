<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Redirect;
use Illuminate\Http\Request;

class PagesController extends Controller {
	
	
	
	public function home ()
	{
		
         
			return view('pages.home');
	}

	public function index ()
	{
		 $lessons = ['My first lesson', 'My second lesson', 'My third lesson'];
         
			return view('pages.home', compact('lessons'));
	}

	public function about ()
	{
		return view('pages.about');
		
	}
	
	public function register ()
	{

		if(Auth::check()) return Redirect::to('/admin');
		return view('pages.register');
		
	}
	public function store ()
	{
		return 'redone';
		
	}
	
	public function show ()
	{
		return 'redone';
		
	}
	
	
	}



