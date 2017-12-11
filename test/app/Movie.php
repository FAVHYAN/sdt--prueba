<?php namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model {

	protected $table = "movies";

	protected $fillable = ['name', 'cast', 'direction', 'genre', 'duration', 'created_at', 'updated_at'];



}
