<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
	protected $table='test';
    //

    public function category()
    {
    	return $this->belongsTo('App\TestCategory');
    }
    public function DiagnosticCenterAndTest()
    {
        echo 'ononon';
    	return $this->hasMany('App\DiagnosticCenterAndTest','test_id');	
    }
}
