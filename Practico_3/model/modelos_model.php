<?php
	include_once('db.php');

	class ModelosModel {
		
		function __construct() {
			$this->db = new DB();
		}

		function getModelos(){
			return $this->db->getModelos();
		}
		
		function getModelosByMarca($marca){
			return $this->db->getModelosByMarca($marca);
		}

		function agregarModelo($modelo){
			$this->db->agregarModelo($modelo);
		}

	}
?>
