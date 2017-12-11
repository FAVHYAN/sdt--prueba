<?php namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class theather extends Model {

	protected $table = "theater";

	protected $fillable = ['name', 'location', 'movies', 'genre'];

}
