<?php namespace Cinema;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Theater extends Model {

	
	use SoftDeletes;

	protected $table = "theaters";

    protected $dates = ['deleted_at'];

	protected $fillable = ['name', 'location', 'genre'];


}
