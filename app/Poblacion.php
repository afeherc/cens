<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Poblacion extends Model {

	protected $guarded = [];

	public function votants()
	{
		return $this->hasMany('App\Votant');
	}

}
