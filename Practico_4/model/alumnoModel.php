<?php
	require_once('db.php');

	class AlumnoModel {

		function __construct() {
			$this->db = new DB();
		}

		function getAlumnos(){
			return $this->db->getAlumnos();
		}

		function getAlumnosByMateria($materia){
			return $this->db->getAlumnosByMateria($materia);
		}

		function agregarAlumno($alumno){
			$this->db->agregarAlumno($alumno);
		}

	}
?>
