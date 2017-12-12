<?php namespace Cinema;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model {

	use SoftDeletes;

	protected $table = "movies";
    protected $dates = ['deleted_at'];

	protected $fillable = ['name', 'cast', 'direction', 'genre', 'duration', 'created_at', 'updated_at'];



}
