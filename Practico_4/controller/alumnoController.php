<?php

require("model/alumnoModel.php");
require("view/alumnoView.php");

class AlumnoController {

    private $model;
    private $view;

    function __construct(){
      $this->model = new AlumnoModel();
      $this->view = new AlumnoView();
    }

    public function showAlumnos(){
      $alumnos = $this->model->getAlumnos();
      $this->view->mostrar($alumnos);
    }

}

 ?>
