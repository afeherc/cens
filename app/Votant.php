<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Votant extends Model {

	protected $guarded = [];

	public function poblacion()
	{
		return $this->belongsTo('App\Poblacion');
	}

}
