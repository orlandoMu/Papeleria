<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RegistroModel extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function guardar($post){
		$datosUsuario = array();
		$datosUsuario['id_Usuarios'] = $post['id_Usuarios'];
		$datosUsuario['nombreU'] = $post['nombreU'];
		$datosUsuario['apellidoU'] = $post['apellidoU'];
		$datosUsuario['correo'] = $post['correo'];
		$datosUsuario['contrasena'] = $post['contrasena'];
	
		if($datosUsuario['id_Usuarios'] > 0){
			$this->db->where('id_Usuarios', $datosUsuario['id_Usuarios']);
			$this->db->update('Usuarios', $datosUsuario);
			$ruta = base_url();
			echo "<script>
				alert('La Papeleria ha modificado tu reporte.');
				window.location = '{$ruta}';
				</script>";
		}else{
			$this->db->insert('Usuarios', $datosUsuario);
			$ruta = base_url();
			echo "<script>
				alert('La Papeleria ha generado tu reporte.');
				window.location = '{$ruta}';
				</script>";
		}
		

	}



}