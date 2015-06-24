<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\Saldo;
use App\user;
use Input;
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

public function update($user_id)
	{

	$cuenta = user::whereId($user_id)->first();



     
       $cuenta->nombrecompleto =  Input::get('completo');
         $temp =  Input::get('tipo');
         $cuenta->tipocuenta =  Input::get('tipo');
         $temp1 =  Input::get('banco');
         $cuenta->municipio =  Input::get('itemselect');
        

         if ( $temp == "1"){
         	 $cuenta->cuentaclabe = Input::get('clabe');}
         	 else $cuenta->cuentatarjeta = Input::get('cuenta');

              if ( $temp1 == "10"){
         	 $cuenta->otrobanco = Input::get('otro');}
         	  else $cuenta->banco = Input::get('banco');


        


       
        $cuenta->save();
        return 'lolo';
	}

	}



