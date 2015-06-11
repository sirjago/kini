<?php namespace App\Http\Controllers;
use App\User;
use App\quiniela;
use App\partidos;
use App\equipos;
use App\resultados;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use  Carbon\Carbon;
use Jenssegers\Date\Date;
use Auth;
use Input;	
use View;

use Illuminate\Http\Request;

class JornadasController extends Controller {

public function __construct()
    {
        //$this->middleware('csrf');
        $this->middleware('auth', ['only' => 'show']);
	
    }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
	
	}

	
	public function guardar ($jor)
	{
		//$listarray = array ('j1','j2',);
		$equipos = equipos::all();
		$partidos = partidos::wherejornada($jor)->orderBy('juego', 'asc')->get();
	    $resultados = resultados::wherejornada($jor)->get();
		
		$jornada = new quiniela;		

       if($partidos[0]->horario > Carbon::now()){
       $jornada->juego1 =  Input::get('j1');
       }
             
       if($partidos[1]->horario > Carbon::now()){
       $jornada->juego2 =  Input::get('j2');
       }
		
        if($partidos[2]->horario > Carbon::now()){
      $jornada->juego3 =  Input::get('j3');
       }
		
		 if($partidos[3]->horario > Carbon::now()){
       $jornada->juego4 =  Input::get('j4');
       }
		
		if($partidos[4]->horario > Carbon::now()){
       $jornada->juego5 =  Input::get('j5');
       }
		 
		 if($partidos[5]->horario > Carbon::now()){
            $jornada->juego6 =  Input::get('j6');
       }
		 
 if($partidos[6]->horario > Carbon::now()){
            $jornada->juego7 =  Input::get('j7');
       }
		 
		 if($partidos[7]->horario > Carbon::now()){
           $jornada->juego8 =  Input::get('j8');
       }
		
		if($partidos[7]->horario > Carbon::now()){
          $jornada->juego9 =  Input::get('j9');
       }
		
		 
		
		
		
         $val = Input::get('RL');
if( $val == "default"){
$jornada->RL = null;}
else{ $jornada->RL =  Input::get('RL'); 
	
}
  $val2 = Input::get('RV');
if( $val2 == "default"){
$jornada->RV = null;}
else{ $jornada->RV =  Input::get('RV'); 
	
}


	
		$jornada->jornada =  $jor;
		$jornada->user_id = Auth::user()->id;
        $jornada->save();
		return view('pages.editjornadas',['jornadas' => $jornada,'partidos' => $partidos,'equipos' => $equipos,'resultados' => $resultados])->with('jor',$jor)->with('val',$val);
			//	}
	
	
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 
	 
	 
	 
	 
	 */
	



	public function show($id,$jor)
	{



			$equipos = equipos::all();
			$resultados = resultados::wherejornada($jor)->get();;
			$partidos = partidos::wherejornada($jor)->orderBy('juego', 'asc')->get();
		if(Auth::user()->id== $id) {
		$jornada = quiniela::whereUser_id($id)->whereJornada($jor)->first();
		if ($jornada <> null){
		 return view('pages.editjornadas',['jornadas' => $jornada,'partidos' => $partidos,'equipos' => $equipos,'resultados' => $resultados])->with('jor',$jor);
		} 	return  view('pages.jornadas',['jornadas' => $jornada,'partidos' => $partidos,'equipos' => $equipos,'resultados' => $resultados])->with('jor',$jor);
		}
		return 'Failedo :(';
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id,$jor)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */


	public function update($user_id,$jor)
	{
		$equipos = equipos::all();
			$partidos = partidos::wherejornada($jor)->orderBy('juego', 'asc')->get();
				$resultados = resultados::wherejornada($jor)->get();
	
		$jornada2 = quiniela::wherejornada($jor)->whereUser_id($user_id)->first();



       if($partidos[0]->horario > Carbon::now()){
       $jornada2->juego1 =  Input::get('j1');
       }
             
       if($partidos[1]->horario > Carbon::now()){
       $jornada2->juego2 =  Input::get('j2');
       }
		
        if($partidos[2]->horario > Carbon::now()){
      $jornada2->juego3 =  Input::get('j3');
       }
		
		 if($partidos[3]->horario > Carbon::now()){
       $jornada2->juego4 =  Input::get('j4');
       }
		
		if($partidos[4]->horario > Carbon::now()){
       $jornada2->juego5 =  Input::get('j5');
       }
		 
		 if($partidos[5]->horario > Carbon::now()){
            $jornada2->juego6 =  Input::get('j6');
       }
		 
 if($partidos[6]->horario > Carbon::now()){
            $jornada2->juego7 =  Input::get('j7');
       }
		 
		 if($partidos[7]->horario > Carbon::now()){
           $jornada2->juego8 =  Input::get('j8');
       }
		
		if($partidos[8]->horario > Carbon::now()){
          $jornada2->juego9 =  Input::get('j9');
       }
		



      /*  $jornada2->juego1 =  Input::get('j1');
		$jornada2->juego2 =  Input::get('j2');
		$jornada2->juego3 =  Input::get('j3');
		 $jornada2->juego4 =  Input::get('j4');
		$jornada2->juego5 =  Input::get('j5');
		$jornada2->juego6 =  Input::get('j6');
		 $jornada2->juego7 =  Input::get('j7');
		$jornada2->juego8 =  Input::get('j8');
		$jornada2->juego9 =  Input::get('j9');
*/



		
         $val = Input::get('RL');
if( $val ==  "default"){
$jornada2->RL = null;}
else{ $jornada2->RL =  Input::get('RL'); 
	
}
  $val2 = Input::get('RV');
if( $val2 == "default"){
$jornada2->RV = null;}
else{ $jornada2->RV =  Input::get('RV'); 
	
}




        $jornada2->save();
		return view('pages.editjornadas',['jornadas' => $jornada2, 'partidos' => $partidos,'equipos' => $equipos,'resultados' => $resultados])->with('jor',$jor)->with('val',$val);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
