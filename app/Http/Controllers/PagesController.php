<?php namespace App\Http\Controllers;

class PagesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function nuestraorganizacion(){ return view('nosotros.nuestraorganizacion');}

	public function ofertadevalor() {return view('nosotros.ofertadevalor'); }

	public function partnersyaliados() {return view('nosotros.parnertsyaliados'); }

	public function contactos() {return view('contactos'); }

	public function asesoria() {return view('servicios.asesoria'); }

	public function conserje() {return view('servicios.conserje'); }

	public function encuestas() {return view('servicios.encuestas'); }

	public function erp() {return view('servicios.erp'); }

	public function eventos_esm() {return view('servicios.eventos-esm'); }

	public function pms() {return view('servicios.pms'); }

	public function revenue() {return view('servicios.revenue'); }



}
