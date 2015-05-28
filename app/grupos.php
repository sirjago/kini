<?php namespace App;
use App\user;

use Illuminate\Database\Eloquent\Model;

class grupos extends Model {

	public function users(){

			return $this->BelongstoMany('App\user','grupo_user')->withPivot('owner');
		
	
	}

}
