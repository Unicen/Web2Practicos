<?php

require_once("config/configApp.php");
require_once("controller/alumnoController.php");
require_once("controller/materiaController.php");
require_once("controller/asistenciaController.php");


if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
    // Home del sitio
    $materiaController = new MateriaController();
    $materiaController->showMaterias();
}else{
  switch($_REQUEST[ConfigApp::$ACTION]){
    case ConfigApp::$ACTION_SHOW_ALUMNOSXMATERIA:
      if(!empty($_GET["id"])){
        $materiaController = new MateriaController();
        $materiaController->showMateria($_GET["id"]);
      }
      break;
    case ConfigApp::$ACTION_SHOW_ALUMNOS:
      $alumnoController = new AlumnoController();
      $alumnoController->showAlumnos();
      break;
    //Asistencias
    case ConfigApp::$ACTION_NEW_ASISTENCIAS:
      if(!empty($_GET["materia"])){
        $asistenciaController = new AsistenciaController();
        $asistenciaController->showForm($_GET["materia"]);
      }
      break;
    //Materias
    default:
    case ConfigApp::$ACTION_SHOW_MATERIAS:
      $materiaController = new MateriaController();
      $materiaController->showMaterias();
      break;
  }
}


?>
