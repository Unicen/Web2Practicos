<?php
	require_once('db.php');

	class MateriaModel {

		function __construct() {
			$this->db = new DB();
		}

		function getMaterias(){
			return $this->db->getMaterias();
		}

		function getMateriaById($id){
			return $this->db->getMateriaById($id);
		}

		function agregarMateria($materia){
			$this->db->agregarMateria($materia);
		}

	}
?>
