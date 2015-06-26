<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\GuardarBancoRequest;

use Auth;
use DB;
use App\Saldo;
use App\user;
use Input;
use Redirect;

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
		if(Auth::check()) {
			if(Auth::user()->id== $id) {
				
		$user = User::find(Auth::user()->id);
	
         return   view('pages.bancos',['user' => $user ]);
			
		}
		return 'Failedox  not logged :(';
			}else return Redirect::to('/login');
	}



public function update($user_id,GuardarBancoRequest $request)
	{


	$cuenta = user::whereId($user_id)->first();

       $cuenta->nombrecompleto =  Input::get('completo');
         $temp =  Input::get('tipo');
         $cuenta->tipocuenta =  Input::get('tipo');
        // $cuenta->tipocuenta = Input::old('tipo', $user->tipo);
         $temp1 =  Input::get('banco');
         
        

         if ( $temp == "1"){
         	 $cuenta->cuentaclabe = Input::get('clabehidden');
         	 //$cuenta->cuentaclabe = Input::get('bank');
         	 $cuenta->cuentatarjeta = Input::get('cuentahidden');
         	}
         	 else $cuenta->cuentatarjeta = Input::get('cuentahidden');
         	  $cuenta->cuentaclabe = Input::get('clabehidden');

              if ( $temp1 == "10"){
         	 $cuenta->otrobanco = Input::get('otro');
            $cuenta->banco = "10";
         	}
         	  else $cuenta->banco = Input::get('banco');


        $cuenta->save();
        //return 'lolo';

     // return Redirect::to(bancos.show',array(Auth::user()->id)); 
     return Redirect::route('bancos.show',array(Auth::user()->id));
	}


	public function retiro ($id)
	{
			if(Auth::user()->id== $id) {
		$user =  User::whereId($id)->get();
		   $res = DB::select('CALL quini.SaldoUser(?,@saldoto)',array($id) );
		  $saldox = DB::select('select @saldoto as saldoto');                    
         return   view('pages.retiros',['user' => $user,'saldox' => $saldox  ]);
		//return 'redone';
		}
		return 'Failedox  not logged :(';
	}




	}



