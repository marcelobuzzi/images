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
		$archivo 	= $_FILES['fileImage'];
		$grados		= $this->input->post('grados');
		echo 'data:image/png;base64,'.$this->imagen($archivo, $grados);
	}

	// ------------------------------------------------------------------------------------------
	protected function imagen($archivo, $grados = 0) {
		$ext		= explode('/', $archivo['type'])[1];
		switch($ext) {
			case 'png':
				$canvas = imagecreatefrompng($archivo['tmp_name']);
				break;
			default:
				$canvas = imagecreatefromjpeg($archivo['tmp_name']);
				break;
		}
		ob_start();
		imagepng(imagerotate($canvas, $grados, 0));
		$return = ob_get_contents();
		ob_end_clean();
		imagedestroy($canvas);
		return base64_encode($return);

	}

}
