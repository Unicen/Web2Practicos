<?php
require('view/vueloView.php');
require('model/vueloModel.php');

class VueloController
{
	private $modelVuelo;
	private $viewVuelo;

	public function __construct(){
    $this->modelVuelo = new VueloModel();
    $this->viewVuelo = new VueloView();
  }

	public function getList($added){
    $vuelos = $this->modelVuelo->getVuelos();
    $this->viewVuelo->show($vuelos);
  }

}


?>
