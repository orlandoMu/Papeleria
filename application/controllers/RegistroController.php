<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RegistroController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('RegistroModel');
	}
	function guardar(){
		if($_POST) {
			$this->RegistroModel->guardar($_POST);
		}
		$this->load->view(base_url());
	}

}