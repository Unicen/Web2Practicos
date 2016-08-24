<?php
	include_once('db.php');

	class MarcasModel {
		
		function __construct() {
			$this->db = new DB();
		}

		function getMarcas(){
			return $this->db->getMarcas();
		}

		function agregarMarca($marca){
			$this->db->agregarMarca($marca);
		}

	}
?>
