<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\equipos;
use Input;
use Flash;
use Redirect;
use App\user;
use App\estado;
use Hash;
use Auth;
use DB;

class UsersController extends Controller {


    
    
	
	public function index ()
	{
	// Agregar validacion si esta loggeado seguir sino ir al login.
			if(Auth::check()) {
		$equipos =  array('' => 'Selecciona tu equipo') + DB::table('hinchaequipo')->lists('equipo','id');
			$inter =  array('' => 'Selecciona Equipo ') + DB::table('fanequipo')->lists('equipo','id');
    $user = User::find(Auth::user()->id);
     $estado = estado::whereEstadoId($user->estado)->whereMunicipioId($user->municipio)->first();
       $ListaEstados =  array('' => 'Selecciona tu estado') +  DB::table('estados')->distinct()->lists('estado','estado_id');
         $ListaMunicipios =   DB::table('estados')->distinct()->lists('Municipio','Municipio_id');
         $Municipios = estado::whereEstadoId($user->estado)->lists('Municipio','Municipio_id');
$users = DB::table('estados')->distinct()->get(['estado_id','estado']);

	return view('pages.perfil',['user' => $user,'estado' => $estado,'ListaEstados' => $ListaEstados,'users' => $users,'Municipios' => $Municipios,'equipos' => $equipos,'inter' => $inter]);
	}
	else return Redirect::to('/login');

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
	

public function update($user_id)
	{
		
		$record = user::whereId($user_id)->first();



     
       $record->nombre =  Input::get('nombre');
         $record->apellido =  Input::get('apellido');
         $record->estado =  Input::get('userselect');
         $record->municipio =  Input::get('itemselect');
         // $birthdate =  Input::get('date');
         $record->equipo =  Input::get('EquipoNacional');
         $record->inter =  Input::get('EquipoInter');

           $convert_date = date("Y-m-d", strtotime(Input::get('date')));
           $record->fecha =  $convert_date;




         if ( $record->inter == 27){
         	 $record->internacional = Input::get('Otro');}


       
        $record->save();

$equipos =  array('' => 'Selecciona tu equipo') + DB::table('hinchaequipo')->lists('equipo','id');
			$inter =  array('' => 'Selecciona Equipo ') + DB::table('fanequipo')->lists('equipo','id');
    $user = User::find(Auth::user()->id);
     $estado = estado::whereEstadoId($user->estado)->whereMunicipioId($user->municipio)->first();
       $ListaEstados =  array('' => 'Selecciona tu estado') +  DB::table('estados')->distinct()->lists('estado','estado_id');
         $ListaMunicipios =   DB::table('estados')->distinct()->lists('Municipio','Municipio_id');
         $Municipios = estado::whereEstadoId($user->estado)->lists('Municipio','Municipio_id');
$users = DB::table('estados')->distinct()->get(['estado_id','estado']);

 flash::overlay('Tus datos se han actualizado','Guardando...'); 
	return view('pages.perfil',['user' => $user,'estado' => $estado,'ListaEstados' => $ListaEstados,'users' => $users,'Municipios' => $Municipios,'equipos' => $equipos,'inter' => $inter]);
	

		//return view('pages.perfil');
	}



	
	}



