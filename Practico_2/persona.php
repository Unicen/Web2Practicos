<?php 
	require('./libs/Smarty.class.php');
		
	
	$smarty = new Smarty;
	$smarty->assign('titulo',$title);
	$smarty->display('persona.tpl');
?>