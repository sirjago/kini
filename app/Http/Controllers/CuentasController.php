<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\Saldo;
use App\user;
use Redirect;
use Illuminate\Http\Request;

class CuentasController extends Controller {
	
	public function __construct()
    {
        //$this->middleware('csrf');
        $this->middleware('auth', ['only' => 'show']);
	
    }

	
	
	public function home ()
	{
		
         
		
	}

	public function index ()
	{
		
	}

	public function store ()
	{
		return 'redone';
		
	}
	
	public function show ($id)
	{
			if(Auth::user()->id== $id) {
		$cuentas =  Saldo::whereUser_id($id)->get();
		   $res = DB::select('CALL quini.SaldoUser(?,@saldoto)',array($id) );
		  $saldox = DB::select('select @saldoto as saldoto');                    
         return   view('pages.cuentas',['cuentas' => $cuentas,'saldox' => $saldox  ]);
		//return 'redone';
		}
		return 'Failedox  not logged :(';
	}
	


		public function banco ($id)
	{
			if(Auth::user()->id== $id) {
		$user = User::find(Auth::user()->id);
	
         return   view('pages.bancos',['user' => $user ]);
		
		}
		return 'Failedox  not logged :(';
	}
	
	}



