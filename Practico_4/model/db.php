<?php
	session_start();
	//
	//	Atención!!!
	//
	//	Esto NO es una base de datos real.
	//	Su unico proposito es que puedan hacer el practico 4.
	//

	class DB {


		function __construct() {
			if(!isset($_SESSION["materias"]))
			{
				$_SESSION["materias"] = [
					array("id" => 1, "Nombre" => "Programacion 2", "Cuatrimestre" => 2),
					array("id" => 2, "Nombre" => "Web 2", "Cuatrimestre" => 2)
				];
				$materias = $_SESSION["materias"];
			}
			if(!isset($_SESSION["alumnos"]))
			{
				$_SESSION["alumnos"] = [
					array("id" => 1, "Nombre" => "Nico", "Materias" => array(
						$materias[0],
						$materias[1]
					)),
					array("id" => 2, "Nombre" => "Juan", "Materias" => array(
						$materias[1]
					))
				];

			}
		}

		function getMaterias()
		{
			return $_SESSION["materias"];
		}

		function getAlumnos()
		{
			return $_SESSION["alumnos"];
		}

		function getAlumnosByMateria($materia)
		{
			$alumnos = array();
			foreach($_SESSION["alumnos"] as $alumno)
			{
				$materiasAlumno= array_map(create_function('$o', 'return $o["id"];'), $alumno["Materias"]);
				if(in_array($materia, $materiasAlumno))
					array_push($alumnos, $alumno);
			}
			return $alumnos;
		}

		function getMateriaById($idMateria){
			foreach($_SESSION["materias"] as $materia)
			{
				if($materia["id"] == $idMateria)
					return $materia;
			}
		}

		function agregarMateria($materia)
		{
			array_push($_SESSION["materias"], $materia);
			return ;
		}

		function agregarAlumno($alumno)
		{
			array_push($_SESSION["alumnos"], $alumno);
		}

	}
?>
