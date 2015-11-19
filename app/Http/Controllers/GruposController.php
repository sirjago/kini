<?php namespace App\Http\Controllers;
use App\grupos;
use App\user;
use App\Record;
use Auth;
use App\retiro;
use App\saldo;
use DB;
use Carbon\Carbon;
use Input;
use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use App\Http\Requests\CreateGrupoRequest;
use App\Http\Requests\UnirseGrupoRequest;

class GruposController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id,$jor)
    {
       if(Auth::user()->id == $id) 
       {
		//$grupo = grupos::whereownerid($id)->first();
		$grupo =  User::find($id)->grupos;
		
	
		if (!$grupo->isEmpty())
		 {
				$miembro = Grupos::find($grupo->first()->id)->users;
			if($grupo->first()->pivot->owner == 1)
			{
				return view('pages.ConGrupo',['grupos' => $grupo,'miembros' => $miembro])->with('jor',$jor);	
			}
		           return view('pages.grupos',['grupos' => $grupo,'miembros' => $miembro])->with('jor',$jor);	
		  }  
		  return  view('pages.singrupo',['grupos' => $grupo]); 

		}
		return 'Failed' ;
    }

	
	 public function create($id)
    {
    		if(Auth::check()) {
        if(Auth::user()->id == $id) {
		$grupo = grupos::whereownerid($id)->first();

		$res = DB::select('CALL quini.SaldoUser(?,@saldoto)',array($id) );
		  $saldox = DB::select('select @saldoto as saldoto');  
		  
		 return  view('pages.CrearGrupo',['grupos' => $grupo,'saldox' => $saldox]); 
		}
		return 'FAILEDO '  ; 
		}
		else return Redirect::to('/login');    


	
    }


     public function unirse($id)
    {
        if(Auth::user()->id== $id) {
		$grupo = grupos::whereownerid($id)->first();
		// traigo saldo

		 $res = DB::select('CALL quini.SaldoUser(?,@saldoto)',array($id) );
		  $saldox = DB::select('select @saldoto as saldoto');    

		 return  view('pages.UnirseGrupo',['grupos' => $grupo,'saldox' => $saldox]); 
		}
		return 'Failedo :(';     


	
    }
	
	public function join(UnirseGrupoRequest $request)
    {
      // if(Auth::user()->id== $id) {
         $clave = Input::get('clave');
		 $ClaveGrupo = grupos::whereClave($clave)->first();

		 // traigo saldo

		  $res = DB::select('CALL quini.SaldoUser(?,@saldoto)',array(Auth::user()->id) );
		  $saldox = DB::select('select @saldoto as saldoto');   

		 if ($ClaveGrupo == null){
		 	return 'No existe el grupo';
		 }
		 
		 // valida tener saldo para ingresar al grupo

		 if($ClaveGrupo->costo < $saldox[0]->saldoto){

         //Hace relacion de grupos y user (unir)
        
        $user = User::find(Auth::user()->id);
		$user->AssignGrupo($ClaveGrupo->id);

     //Descuenta saldo al crearlo
		    $solicitud =  New saldo;
        	$solicitud->abono = 0;
            $solicitud->cargo = $ClaveGrupo->costo;
            $solicitud->user_id = Auth::user()->id;
            $solicitud->referencia = "unido grupo";
            $solicitud->banco = "NA";
            $convert_date = date("Y-m-d", strtotime(  Carbon::now()));
            $solicitud->fecha  =  $convert_date;
            $solicitud->save();
		
       return Redirect::route('grupos.show',array(Auth::user()->id, 1));
   }
    else {

return  'No tienes saldo suficiente para ingresar al grupo'    ;
   }

		}
	

public function unircosto($id,$grupo,$costo)
    {
       if(Auth::user()->id== $id) {
         


        $user = User::find($id);
		$user->AssignGrupo($grupo);
        if($costo != 0){

        	$solicitud =  New saldo;
        	$solicitud->abono = 0;
            $solicitud->cargo = $costo;
            $solicitud->user_id = $id;
            $solicitud->referencia = "grupo creado";
            $solicitud->banco = "NA";
            $convert_date = date("Y-m-d", strtotime(  Carbon::now()));
            $solicitud->fecha  =  $convert_date;

 $solicitud->save();
        }
       //  return  view('pages.UnirseGrupo',['grupos' => $grupo]); 
		
       //return Redirect::route('grupos.show',array(Auth::user()->id, 1));

		}

}


    public function register(CreateGrupoRequest $request)
    {
    		if(Auth::check()) {
			
        $grupo = new Grupos;
        //$fech =  Input::get('limite');
        
         $fech = (Input::has('limite')) ? true : false;
        $coop =  (Input::has('cooperacha')) ? true : false;
         $part =  (Input::has('participantes')) ? true : false;
        $grupo->costo = Input::get('limite');
		$grupo->nombre = Input::get('nombre');
		if ($fech == true) {
			$grupo->caducidad = date("Y-m-d", strtotime(Input::get('fechalimite')));
		 
		}
		if ($coop == true) {
			$grupo->costo = Input::get('costo');

			//Descuenta saldo al crearlo
		    $solicitud =  New saldo;
        	$solicitud->abono = 0;
            $solicitud->cargo = $grupo->costo;
            $solicitud->user_id = Auth::user()->id;
            $solicitud->referencia = "unido a grupo";
            $solicitud->banco = "NA";
            $convert_date = date("Y-m-d", strtotime(  Carbon::now()));
            $solicitud->fecha  =  $convert_date;
            $solicitud->save();
		
		}

         if ($part == true) {
			$grupo->miembros = Input::get('miembros');
		}


		$grupo->ownerid = Auth::user()->id;
		
		$grupo->tipo_grupo = 1;
		$grupo->clave = str_random(32);
		$grupo->save();

       //Hace relacion de grupos y user (crear)
        $grupete = grupos::whereownerid(Auth::user()->id)->first();
        $user = User::find(Auth::user()->id);
		$user->OwnerGrupo($grupete->id);

		


		return Redirect::route('grupos.show',array(Auth::user()->id, 1));
	}
		else return Redirect::to('/login');
		//return Redirect::route('pages.grupos',Auth::user()->id);
    }
	

 public function salir($id)
    {
       //encuentra grupo
		$grupo = grupos::find($id);
		

//Abona saldo al deshacer el grupo
		if($grupo->costo > 0)
        {
		    $solicitud =  New saldo;
        	$solicitud->abono = $grupo->costo;
            $solicitud->cargo = 0;
            $solicitud->user_id = Auth::user()->id;
            $solicitud->referencia = "grupo deshecho";
            $solicitud->banco = "NA";
            $convert_date = date("Y-m-d", strtotime(  Carbon::now()));
            $solicitud->fecha  =  $convert_date;
            $solicitud->save();
         }
//Borra grupo

		$grupo->delete();

		return Redirect::route('grupos.show',array(Auth::user()->id, 1));
		    


	
    }


    public function dejar($id,$grupo)
    {
       
		$user = User::find($id);

        $gru = grupos::find($grupo);

//Abona saldo al deshacer el grupo
        if($gru->costo > 0)
        {
		    $solicitud =  New saldo;
        	$solicitud->abono = $gru->costo;
            $solicitud->cargo = 0;
            $solicitud->user_id = Auth::user()->id;
            $solicitud->referencia = "grupo abandonado";
            $solicitud->banco = "NA";
            $convert_date = date("Y-m-d", strtotime(  Carbon::now()));
            $solicitud->fecha  =  $convert_date;
            $solicitud->save();
        }

	    $user->removeGrupo($grupo);
		    

        return Redirect::route('grupos.show',array(Auth::user()->id, 1));
	
    }


     public function total($id,$jor)
    {
       
		 if(Auth::user()->id == $id) 
       {
	
		$grupo =  User::find($id)->grupos;
		
	
		if (!$grupo->isEmpty())
		 {
				$miembro = Grupos::find($grupo->first()->id)->users;
			if($grupo->first()->pivot->owner == 1)
			{
				return view('pages.ConGruposTotal',['grupos' => $grupo,'miembros' => $miembro])->with('jor',$jor);	
			}
		           return view('pages.gruposTotal',['grupos' => $grupo,'miembros' => $miembro])->with('jor',$jor);	
		  }  
		  return  view('pages.singrupo',['grupos' => $grupo]); 

		}
		return 'Failed' ;
	
    }




    public function general($id)
    {
      $general = DB::select('CALL quini.QuinielaGeneral');
      		
		 $user = User::all();
       return view('pages.General',['Record' => $general,'user' => $user]);	
      
	
    }


        public function lobby()
    {
     
     if(Auth::check()) {
$grupos = Collection::make(DB::select('CALL quini.LobbyActivos'));
$integrante =  Collection::make(DB::table('grupo_user')->get());


   $res = DB::select('CALL quini.SaldoUser(?,@saldoto)',array(Auth::user()->id) );
		  $saldox = DB::select('select @saldoto as saldoto');   
    	// $grupos = DB::select('CALL quini.LobbyActivos');
     // $grupos =grupos::where('tipo_grupo',1)->orWhere(function ($query) {  $query->where('tipo_grupo',2)->where('caducidad', '=', NULL)->orWhere('caducidad', '<', strtotime('now'));
           // })->get();		
		 
       return view('pages.lobby',['grupos' => $grupos,'integrante' => $integrante,'saldox' => $saldox]);	
      
	}
    }



    public function privado()
    {
        if(Auth::check()) 
        {
       // traigo el grupo
         $clave = Input::get('clave');
         $ClaveGrupo = grupos::whereClave($clave)->first();
        
        // traigo el num de participantes 
         $integrante =  Collection::make(DB::table('grupo_user')->get());

         //Verifico que exista el grupo

         if ($ClaveGrupo == null)
         {
            return 'No existe el grupo';
         }
         
         // traigo saldo

          $res = DB::select('CALL quini.SaldoUser(?,@saldoto)',array(Auth::user()->id) );
          $saldox = DB::select('select @saldoto as saldoto');   

         
    
        
       return view('pages.privado',['grupo' => $ClaveGrupo,'integrante' => $integrante,'saldox' => $saldox]);
        }
    }
   



}