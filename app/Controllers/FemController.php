<?php namespace App\Controllers;

class FemController extends BaseController{

	public function index(){

		$vistas = view('Plantillas/header').
		view('index').
		view('Plantillas/footer');
		return $vistas;
	}
	public function historia(){
		
		$vistas = view('Plantillas/header').
		view('Plantillas/historia').
		view('Plantillas/footer');
		return $vistas;
	}
	public function fenmexico(){
		
		$vistas = view('Plantillas/header').
		view('Plantillas/fm').
		view('Plantillas/footer');
		return $vistas;
	}

	public function feminicidios(){
		
		$vistas = view('Plantillas/header').
		view('Plantillas/feminicidios').
		view('Plantillas/footer');
		return $vistas;
	}
	public function logotipos(){
		
		$vistas = view('Plantillas/header').
		view('Plantillas/logos').
		view('Plantillas/footer');
		return $vistas;
	}

	//--------------------------------------------------------------------

}
