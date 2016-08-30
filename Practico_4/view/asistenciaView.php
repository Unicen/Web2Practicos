<?php

require_once("libs/Smarty.class.php");

class AsistenciaView{

  private $smarty;

  function __construct(){
      $this->smarty = new Smarty();
  }

  public function form($materia,$alumnos){
    $this->smarty->assign("materia",$materia);
    $this->smarty->assign("alumnos",$alumnos);
    $this->smarty->display("form_asistencia.tpl");
  }

}


 ?>
