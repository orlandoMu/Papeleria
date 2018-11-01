<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('depositoModel');
	}
public function validar(){
	$usuario=$this->input->post('usuario');//Creo una variable y la optengo por post
	$password=$this->input->post('password');

	$this->loginmodel->verificar($usuario,$password);//Mando a llamar a mi modelo
	redirect(base_url());//refrescar pagina
}
}