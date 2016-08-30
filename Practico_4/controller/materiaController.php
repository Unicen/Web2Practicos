<?php

require_once("model/materiaModel.php");
require_once("model/alumnoModel.php");
require_once("view/materiaView.php");

class MateriaController {

    private $modelMateria;
    private $modelAlumno;
    private $view;

    function __construct(){
      $this->modelMateria = new MateriaModel();
      $this->modelAlumno = new AlumnoModel();
      $this->view = new MateriaView();
    }

    public function showMaterias(){
      $materias = $this->modelMateria->getMaterias();
      $this->view->mostrarMaterias($materias);
    }

    public function showMateria($idMateria){
      $materia = $this->modelMateria->getMateriaById($idMateria);
      $alumnosMateria = $this->modelAlumno->getAlumnosByMateria($idMateria);
      $this->view->mostrarMateria($materia,$alumnosMateria);
    }

}

 ?>
