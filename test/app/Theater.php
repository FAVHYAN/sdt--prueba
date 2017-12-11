<?php namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Theater extends Model {

	
	protected $table = "theaters";

	protected $fillable = ['name', 'location', 'genre'];


}
