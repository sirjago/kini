<?php namespace App\Http\Controllers;
use App\grupos;
use App\user;
use App\Record;
use Auth;
use DB;
use Input;
use Redirect;
use App\Http\Controllers\Controller;
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
        if(Auth::user()->id == $id) {
		$grupo = grupos::whereownerid($id)->first();
		 return  view('pages.CrearGrupo',['grupos' => $grupo]); 
		}
		return 'FAILEDO '  ;     


	
    }


     public function unirse($id)
    {
        if(Auth::user()->id== $id) {
		$grupo = grupos::whereownerid($id)->first();
		 return  view('pages.UnirseGrupo',['grupos' => $grupo]); 
		}
		return 'Failedo :(';     


	
    }
	
	public function join(UnirseGrupoRequest $request)
    {
      // if(Auth::user()->id== $id) {
         $clave = Input::get('clave');
		 $ClaveGrupo = grupos::whereClave($clave)->first();
		 if ($ClaveGrupo == null){
		 	return 'No existe el grupo';
		 }
		 


//Hace relacion de grupos y user (unir)
        //$grupete = grupos::whereownerid(Auth::user()->id)->first();
        $user = User::find(Auth::user()->id);
		$user->AssignGrupo($ClaveGrupo->id);

       //  return  view('pages.UnirseGrupo',['grupos' => $grupo]); 
		
       return Redirect::route('grupos.show',array(Auth::user()->id, 1));
		}
		//return 'Failedo :(';  
   // }


    public function register(CreateGrupoRequest $request)
    {
        $grupo = new Grupos;
		$grupo->nombre = Input::get('nombre');
		$grupo->ownerid = Auth::user()->id;
		//$grupo->clave = Input::get('clave');
		$grupo->clave = str_random(32);
		$grupo->save();

       //Hace relacion de grupos y user (crear)
        $grupete = grupos::whereownerid(Auth::user()->id)->first();
        $user = User::find(Auth::user()->id);
		$user->OwnerGrupo($grupete->id);
		


		return Redirect::route('grupos.show',array(Auth::user()->id, 1));
		//return Redirect::route('pages.grupos',Auth::user()->id);
    }
	

 public function salir($id)
    {
       
		$grupo = grupos::find($id);
		$grupo->delete();

		return Redirect::route('grupos.show',array(Auth::user()->id, 1));
		    


	
    }


    public function dejar($id,$grupo)
    {
       
		$user = User::find($id);
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
				return view('pages.ConGrupoTotal',['grupos' => $grupo,'miembros' => $miembro])->with('jor',$jor);	
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



}