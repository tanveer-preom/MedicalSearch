<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiagnosticCenter extends Model
{
    //
    protected $table='diagnostic_center';

      public function company()
    {
    	return $this->belongsTo('App\Company');
    }
    public function DiagnosticCenterAndTest()
    {
    	return $this->hasMany('App\DiagnosticCenterAndTest','diagnostic_center_id');
    }



}
