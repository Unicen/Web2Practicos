<?php

require_once("model/materiaModel.php");
require_once("model/alumnoModel.php");
require_once("model/asistenciaModel.php");
require_once("view/asistenciaView.php");

class AsistenciaController {

    private $modelMateria;
    private $modelAlumno;
    private $modelAsistencia;
    private $view;


    function __construct(){
      $this->modelMateria = new MateriaModel();
      $this->modelAlumno = new AlumnoModel();
      $this->modelAsistencia = new AsistenciaModel();
      $this->view = new AsistenciaView();
    }

    public function showForm($idMateria){
      $materia = $this->modelMateria->getMateriaById($idMateria);
      $alumnos = $this->modelAlumno->getAlumnosByMateria($idMateria);
      $this->view->form($materia,$alumnos);
    }

}

 ?>
