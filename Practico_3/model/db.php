<?php
	session_start();
	//
	//	Atención!!!
	//
	//	Esto NO es una base de datos real. 
	//	Su unico proposito es que puedan hacer el practico 3.
	//
	
	class DB {

		function __construct() {
			if(!isset($_SESSION["marcas"]))
			{
				$_SESSION["marcas"] = [
					array("Nombre" => "Ford", "Origen" => "USA"),
					array("Nombre" => "Fiat", "Origen" => "Italia"),
					array("Nombre" => "Renault", "Origen" => "francia"),
					array("Nombre" => "Honda", "Origen" => "Japon"),
					array("Nombre" => "Kia", "Origen" => "Korea")

				];
			}
			if(!isset($_SESSION["modelos"]))
			{
				$_SESSION["modelos"] = [
					array("Marca" => "Ford", "Nombre" => "Ka", "Precio" => "223000"),
					array("Marca" => "Ford", "Nombre" => "Fiesta", "Precio" => "320500"),
					array("Marca" => "Ford", "Nombre" => "Focus", "Precio" => "420000"),
					array("Marca" => "Honda", "Nombre" => "Fit", "Precio" => "270000"),
					array("Marca" => "Honda", "Nombre" => "Civic", "Precio" => "375000"),
					array("Marca" => "Honda", "Nombre" => "Accord", "Precio" => "582000")

				];
			}
		}
		
		function getMarcas()
		{
			return $_SESSION["marcas"];
		}
		
		function getModelos()
		{
			return $_SESSION["modelos"];
		}
		
		function getModelosByMarca($marca)
		{
			$modelos = array();
			foreach($_SESSION["modelos"] as $modelo)
			{
				if($modelo["Marca"] == $marca["Nombre"])
					array_push($modelos, $modelo);
			}
			return $modelos;
		}
		
		function agregarMarca($marca)
		{
			array_push($_SESSION["marcas"], $marca);
			return ;
		}
		
		function agregarModelo($modelo)
		{
			array_push($_SESSION["modelos"], $modelo);
		}

	}
?>
