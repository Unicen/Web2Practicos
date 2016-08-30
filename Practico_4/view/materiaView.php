<?php

require_once("libs/Smarty.class.php");

class MateriaView{

  private $smarty;

  function __construct(){
      $this->smarty = new Smarty();
  }

  public function mostrarMaterias($materias){
    $this->smarty->assign("materias",$materias);
    $this->smarty->display("materias.tpl");
  }

  public function mostrarMateria($materia,$alumnos){
    $this->smarty->assign("materia",$materia);
    $this->smarty->assign("alumnos",$alumnos);
    $this->smarty->display("materia.tpl");
  }

}


 ?>
