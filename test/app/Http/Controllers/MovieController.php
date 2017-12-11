<?php namespace Cinema\Http\Controllers;

use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;
use Session;
use Redirect;
use Cinema\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$movie=  Movie::All();
		return view('movie.index',compact('movie'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('movie.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		 Movie::create([
			'name' => $request['name'],
			'cast' => $request['cast'],
			'direction' => $request['direction'],
			'genre' => $request['genre'],
			'duration' => $request['duration'],
			'created_at' => $request['created_at'],
			'updated_at' => $request['updated_at'],
			]);
		return Redirect('/movie')->with('message','Movie create sucess');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$movie = Movie::find($id);
		return view('movie.edit',['movie'=>$movie]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$movie = Movie::find($id);
		$movie->fill($request->all());
		$movie->save();
		Session::flash('message', 'movie update sucess');
		return Redirect::to('/movie');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Movie::destroy($id);
		Session::flash('message', 'movie delete sucess');
		return Redirect::to('/movie');

	}

}
