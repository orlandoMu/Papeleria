<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DepositoModel extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function guardar($post){
		$datosProducto = array();
		$datosProducto['id'] = $post['id'];
		$datosProducto['nombre'] = $post['nombre'];
		$datosProducto['precio'] = $post['precio'];
		$datosProducto['cantidad'] = $post['cantidad'];
		
	
		if($datosProducto['id'] > 0){
			$this->db->where('id', $datosProducto['id']);
			$this->db->update('deposito', $datosProducto);
			$ruta = base_url();
			echo "<script>
				alert('La Papeleria ha modificado tu reporte.');
				window.location = '{$ruta}';
				</script>";
		}else{
			$this->db->insert('deposito', $datosProducto);
			$ruta = base_url();
			echo "<script>
				alert('La Papeleria ha generado tu reporte.');
				window.location = '{$ruta}';
				</script>";
		}
		

	}

	function borrar($get){
		$this->db->where('id', $get['borrar']);
		$this->db->delete('deposito');
	}

}