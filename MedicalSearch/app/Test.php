<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
	protected $table='test';
    //

    public function description()
    {
    	return $this->belongsTo('App\TestCategory','foreign_key','category_id');
    }
}
