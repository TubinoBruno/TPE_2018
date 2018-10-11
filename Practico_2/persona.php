<?php
	require('./libs/Smarty.class.php');
	$smarty = new Smarty;

	if(isset($_GET['nombre'])&&isset($_GET['apellido'])&&isset($_GET['fecha'])){
		$nombre=$_GET['nombre'];
		$apellido=$_GET['apellido'];
		$fecha=$_GET['fecha'];
		$dia_nac=	date("l", strtotime("$fecha"));
		$dias= date("YW", strtotime("$fecha"));
		$semanas= date("YW", strtotime("$fecha"));
		$meses= date("YW", strtotime("$fecha"));
		$anios= date("YW", strtotime("$fecha"));
		$smarty->assign("dia_nac",$dia_nac);
		$smarty->assign("nombre",$nombre);
		$smarty->assign("apellido",$apellido);
		$smarty->assign("fecha",$fecha);


	}
	$smarty->display('persona.tpl');
?>
