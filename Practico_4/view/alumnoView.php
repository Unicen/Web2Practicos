<?php

require_once("libs/Smarty.class.php");

class AlumnoView{

  private $smarty;

  function __construct(){
      $this->smarty = new Smarty();
  }

  public function mostrar($alumnos){
    $this->smarty->assign("alumnos",$alumnos);
    $this->smarty->display("alumnos.tpl");
  }

}


 ?>
