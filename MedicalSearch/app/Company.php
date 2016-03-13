<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	protected $table= 'company';
    //

    public function DiagnosticCenter()
    {
    	//return $this->belongsTo('App\DiagnosticCenter','company_id','company_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    	return $this->belongsTo('App\User','user_id','id');
    }

    public function diagCenter()
    {
        return $this->hasMany('App\DiagnosticCenter');
    }
  
}
