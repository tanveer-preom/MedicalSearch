<?php namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {
	use Authenticatable, CanResetPassword;
	protected $fillable = ['name', 'email', 'password'];
	protected $hidden = ['password', 'remember_token'];
// Write your functions here

	  public function company()
    {
    	return $this->hasMany('App\Company');
    	return $this->hasMany('App\Company','user_id','id');
    }

}

