<?php namespace Cinema\Http\Controllers;

use Cinema\Http\Requests;
use Cinema\Http\Requests\MovieCreateRequest;
use Cinema\Http\Requests\MovieupdateRequest;
use Cinema\Http\Controllers\Controller;
use Session;
use Redirect;
use Cinema\Movie;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class MovieController extends Controller {


	public function __construct(){
		$this->middleware('auth');
		$this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
	}
	public function find(Route $route){
		$this->movie = Movie::find($route->getParameter('movie'));
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$movies = Movie::paginate(10);
		return view('movie.index',compact('movies'));
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
	public function store(MovieCreateRequest $request)
	{
		 Movie::create([
			'name' => $request['name'],
			'cast' => $request['cast'],
			'direction' => $request['direction'],
			'genre' => $request['genre'],
			'duration' => $request['duration'],
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
		return view('movie.edit',['movie'=>$this->movie]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, MovieupdateRequest $request)
	{
		$this->movie->fill($request->all());
		$this->movie->save();
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
		
		$this->movie->delete();
		Session::flash('message', 'movie delete sucess');
		return Redirect::to('/movie');

	}

}
