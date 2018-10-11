<?php
	require('./libs/Smarty.class.php');

	$smarty = new Smarty;

	if(isset($_POST['datos_personales'])&&isset($_POST['mail'])&&isset($_POST['coment'])){
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$comentario = $_POST['comentario'];
		$smarty->assign("datos_personales",$nombre);
		$smarty->assign("mail",$email);
		$smarty->assign("coment",$coment);

		echo "$nombre";
		echo "$email";
		echo "$comentario";

		$smarty->display('comentario_simple.tpl');

	}
	else {
		$smarty->display('comentarios.tpl');

	}
?>
