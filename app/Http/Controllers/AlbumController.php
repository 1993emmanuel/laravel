<?php namespace GestorImagenes\Http\Controllers;

class AlbumController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getIndex(){
		return 'mostrando albumes del usuario';
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getCrearAlbum()
	{
		return 'formulario de crear Album';
	}

	public function postCrearAlbum(){
		return 'almacenando Album';
	}

	public function getActualizarAlbum()
	{
		return 'formulario de Actualizar Album';
	}

	public function postActualizarAlbum(){
		return 'actualizando Album';
	}

	public function getEliminarAlbum()
	{
		return 'formulario de Eliminar Album';
	}

	public function postEliminarAlbum(){
		return 'Eliminando foto';
	}

	public function missingMethod($parameters = array())
	{
		abort(404);
	}

}
