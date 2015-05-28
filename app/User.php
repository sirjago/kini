<?php namespace App;
use App\Role;
use App\grupos;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
public $timestamps = false;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['username', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function roles(){
		return $this->belongsToMany('App\Role');
	}
	
	public function hasRole($name){
		foreach ($this->roles as $role){
			if ($role->name == $name )return true;
		}
		return false;
	}
	
	
		public function assignRole($role){

			return $this->roles()->attach($role);
		
	
	}
	
	public function removeRole($role){

			return $this->roles()->detach($role);
		
	
	}
	
	public function jornada(){

			return $this->belongsToMany('App\Jornadas');
		
	
	}
	

public function grupos(){

			return $this->belongsToMany('App\Grupos', 'grupo_user')->withPivot('owner');
		
	
	}

	
	public function OwnerGrupo($grupo){

			return $this->grupos()->attach($grupo,array('owner' => 1));
		
	
	}



	public function assignGrupo($grupo){

			return $this->grupos()->attach($grupo);
		
	
	}
	
	
	public function removeGrupo($grupo){

			return $this->grupos()->detach($grupo);
		
	
	}

}
