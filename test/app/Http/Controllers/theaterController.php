<?php namespace Cinema\Http\Controllers;

use Cinema\Theater;
use Cinema\Http\Requests;
use Cinema\Http\Requests\TheaterCreateRequest;
use Cinema\Http\Requests\TheaterupdateRequest;
use Cinema\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;



class TheaterController extends Controller {


	public function __construct(){
		$this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
	}
	public function find(Route $route){
		$this->theater = Theater::find($route->getParameter('theater'));
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$theaters = Theater::paginate(10);
		return view('theater.index',compact('theaters'));


	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('theater.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(TheaterCreateRequest $request)
	{
		 Theater::create([
			'name' => $request['name'],
			'location' => $request['location'],
			'genre' => $request['genre'],
			]);
		return Redirect('/theater')->with('message','Theater create sucess');
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
		return view('theater.edit',['theater'=>$this->theater]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, TheaterupdateRequest $request)
	{
		$this->theater->fill($request->all());
		$this->theater->save();
		Session::flash('message', 'theater update sucess');
		return Redirect::to('/theater');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->theater->delete();
		Session::flash('message', 'theater delete sucess');
		return Redirect::to('/theater');

	}


}
