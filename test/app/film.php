<?php namespace Cinema;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class film extends Model {

	use SoftDeletes;

	protected $table = "film";
    protected $dates = ['deleted_at'];

	protected $fillable = ['name', 'cast', 'direction', 'genre', 'duration'];

}
