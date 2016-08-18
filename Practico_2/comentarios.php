<?php
	require('./libs/Smarty.class.php');


	$smarty = new Smarty;

	//Si es una llamada AJAX, uso el template de un comentario simple.
	if(isset($_POST["ajax"]) && $_POST["ajax"] == "true"){		
		$smarty->assign("nuevoComentario");
		$smarty->display('comentario_simple.tpl');
	}
	else{
		$smarty->display('comentarios.tpl');
	}


?>
