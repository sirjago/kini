<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Response;
use Input;
use Flash;
use Redirect;
use App\user;
use App\estado;
use Hash;
use Auth;
use DB;
use View;

class DropdownController extends Controller {



public function firstMethod(){
    $categories = DB::table('estados')->get();
    return View::make('pages.perfil2',['categories' => $categories]);
}
    

    public function secondMethod($id){
    $subcategories = DB::table('estados')->Select('municipio')->where('Estado_ID', $id)->get();
    return View::make('pages.perfil3', ['subcategories' => $subcategories]);
}
    
	
	public function index ()
	{
	$estados = DB::table('estados')->get();
$estados_pack = [];
foreach($estados as $estado):
   $municipios = DB::table('estados')->where('estado_ID',$estado->Estado_id)->lists('municipio');
   $estados_pack[$estado->estado] = $municipios;
endforeach;
$jsonified = json_encode($estados_pack);
$data = ['estados' => $jsonified];
return View::make('pages.perfil3',$data);
	}

	
	
	public function register ()
	{
			
		
	
		
	}
	
	public function store (CreateUserRequest $Request)
	{
		
		
	
	}


	  public function duplicate()
    {
        $userx = Input::get('option');
        $items = estado::where('estado_id', '=', $userx)->lists('Municipio', 'Municipio_id');
        return Response($items);
    }
	
	
	}



