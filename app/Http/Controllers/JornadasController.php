<?php namespace App\Http\Controllers;
use App\User;
use App\quiniela;
use App\partidos;
use App\equipos;
use App\resultados;
use App\Http\Requests;
use App\Http\Controllers\Controller;
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
				//foreach ($listarray as $val)
				//{print $val;
		$jornada = new quiniela;
        $jornada->juego1 =  Input::get('j1');
		$jornada->juego2 =  Input::get('j2');
		$jornada->juego3 =  Input::get('j3');
		 $jornada->juego4 =  Input::get('j4');
		$jornada->juego5 =  Input::get('j5');
		$jornada->juego6 =  Input::get('j6');
		 $jornada->juego7 =  Input::get('j7');
		$jornada->juego8 =  Input::get('j8');
		$jornada->juego9 =  Input::get('j9');
		$jornada->jornada =  $jor;
		$jornada->user_id = Auth::user()->id;
        $jornada->save();
		return view('pages.editjornadas',['jornadas' => $jornada,'partidos' => $partidos,'equipos' => $equipos,'resultados' => $resultados]);
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
	public function update($id,$jor)
	{
		$equipos = equipos::all();
			$partidos = partidos::wherejornada($jor)->orderBy('juego', 'asc')->get();
				$resultados = resultados::wherejornada($jor)->get();
	
		$jornada = quiniela::find($id);
        $jornada->juego1 =  Input::get('j1');
		$jornada->juego2 =  Input::get('j2');
		$jornada->juego3 =  Input::get('j3');
		 $jornada->juego4 =  Input::get('j4');
		$jornada->juego5 =  Input::get('j5');
		$jornada->juego6 =  Input::get('j6');
		 $jornada->juego7 =  Input::get('j7');
		$jornada->juego8 =  Input::get('j8');
		$jornada->juego9 =  Input::get('j9');
        $jornada->save();
		return view('pages.editjornadas',['jornadas' => $jornada, 'partidos' => $partidos,'equipos' => $equipos,'resultados' => $resultados]);
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
