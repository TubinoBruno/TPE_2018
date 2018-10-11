<?php

	require('./libs/Smarty.class.php');

	$seccion = [ array("nombreSeccion"=>"Home","id"=>"Home"),
	array("nombreSeccion"=>"Banda","id"=>"Banda"),
	array("nombreSeccion"=>"Programa","id"=>"Programa"),
	array("nombreSeccion"=>"Reserva","id"=>"Reserva"),
	array("nombreSeccion"=>"Contacto","id"=>"Contacto"),
	array("nombreSeccion"=>"Cargar Bandas","id"=>"Cargar Bandas"),]
	$smarty=new Smarty;
	$smarty->assign('seccion',$seccion);
	$smarty->display('home.php/index.tpl');
php  ?>
