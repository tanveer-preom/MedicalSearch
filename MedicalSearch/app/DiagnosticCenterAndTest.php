<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiagnosticCenterAndTest extends Model
{
    //
    protected $table='diagnostic_center_and_test';

    
    public function test()
    {
    	return $this->belongsTo('App\Test','test_id');
    }
    public function DiagnosticCenter()
    {
    	return $this->belongsTo('App\DiagnosticCenter','diagnostic_center_id');
    }
}
