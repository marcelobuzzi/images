<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CInicio extends CI_Controller {

	// ------------------------------------------------------------------------------------------
	public function index() {
		$data = array(
			'vistas' => array(
				'carga'	=> '',
			),
		);
		$this->load->view('inicio', $data);
	}

	// ------------------------------------------------------------------------------------------
	public function guardarImagen() {
		var_dump($_FILES['fileImage']);
	}
}
