<?php

class FrontController extends BaseController {

	public function index() {
		return View::make('home');
	}

	public function quienesSomos(){
		return View::make('quienesSomos');
	}

	public function proyectos(){
		return View::make('proyectos');
	}

	public function proyecto($name){
		if(in_array($name, Config::get('projects'))){
			// Format name as needed
			$oName = $name;
			if($name=="arrayan") $name = "Arrayán";

			return View::make('proyecto', [
				"name" => $name,
				"oName" => $oName
			]);
		} else App::abort(404);
	}

	public function galeria($name, $file){
		if(in_array($name, Config::get('projects'))){
			$oName = $name;
			if($name=="arrayan") $name = "Arrayán";
			return View::make('galeria', compact('name', 'oName', 'file'));
		} else App::abort(404);
	}

	public function presencia(){
		return View::make('presencia');
	}

	public function contacto(){
		return View::make('contacto');
	}

	public function sendEmail(){
		Mail::send('emails.message', array(
				'nombre' => Input::get('nombre', 'NI'),
				'correo' => Input::get('correo', 'NI'),
				'telefono' => Input::get('telefono', 'NI'),
				'horario' => Input::get('horario', 'NI'),
				'mensaje' => Input::get('mensaje', 'NI')
		), function($message) {
			$message->from('ventas@quatroconcept.com.mx');
			$message->to('ssandoval@cid.mx', 'Quatro concept')->subject('Mensaje desde la web de Quatro concept');
			$message->cc('contacto@quatroconcept.com.mx');
		});

		return Redirect::back()->withSuccess(true);
	}

	public function privacidad(){
		return View::make('privacidad');
	}
}
