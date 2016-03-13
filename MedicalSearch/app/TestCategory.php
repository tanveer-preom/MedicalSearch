<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestCategory extends Model
{
    //
    protected $table='test_category';

    public funtion Test()
    {
    	return $this->hasMany('App\Test');
    }
}
