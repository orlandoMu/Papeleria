<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class loginmodel extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

public function verificar($usuario,$password){
$this->db->where('usuario',$usuario)->from('Usuarios');
$consulta=$this->db->get();//verificar si mi consuta que ejecute si me devuelve algo

if($consuta->num_rows()!=0){//si existe el usuario
$this->db->where('usuario',$usuario)->where('contrasena',$password)->from('Usuarios');//doble validacion exite el usario con su respectiva contraseña
$consulta=$this->db->get();

if($consuta->num_rows()!=0){
$consuta=$consuta->rows();
$data= array
(
'user'=>$consuta->usuario,
'ps'=>$consuta->contracena
);
/*seccion_star();//Para checar lo de iniciar secion
}*/
}
}

}