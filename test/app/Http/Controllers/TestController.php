<?php namespace Cinema\Http\Controllers;

class TestController extends Controller {

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return "este es el controlador";
	}

	public function name($name)
	{
		return "mi nombre es: ".$name;
	}

}
