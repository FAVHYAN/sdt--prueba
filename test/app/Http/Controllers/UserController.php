<?php namespace Cinema\Http\Controllers;

use Cinema\Http\Requests;
use Cinema\Http\Requests\UserCreateRequest;
use Cinema\Http\Requests\UserupdateRequest;
use Cinema\Http\Controllers\Controller;
use Session;
use Redirect;
use Cinema\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class UserController extends Controller {


	public function __construct(){
		$this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
	}
	public function find(Route $route){
		$this->user = User::find($route->getParameter('user'));
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$users = User::paginate(10);
		return view('user.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('user.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UserCreateRequest $request)
	{
		 User::create($request->all());
		return Redirect('/user')->with('message','User create sucess');
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
		return view('user.edit',['user'=>$this->user]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, UserUpdateRequest $request)
	{
		$this->user->fill($request->all());
		$this->user->save();
		Session::flash('message', 'User update sucess');
		return Redirect::to('/user');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->user->delete();
		Session::flash('message', 'User delete sucess');
		return Redirect::to('/user');

	}

}
