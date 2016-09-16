<?php
	require('libs/Smarty.class.php');

	class VueloView {
		private $smarty;

		public function __construct(){
			$this->smarty = new Smarty;
		}

		public function show($vuelos){
			$this->smarty->assign('vuelos',$vuelos);
			$this->smarty->display('vuelos.tpl');
		}
	}
?>
