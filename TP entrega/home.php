<?php
require('./libs/Smarty.class.php');

	$informacion = [ array("Titulo"=>"Historia","Texto"=>"El Unicen Rock es un festival de rock que se lleva a cabo anualmente, desde el año 2003, en la provincia de Buenos Aires. De  una duración promedio de 3 días. Se realiza en el Campus Universitario , ubicado en la ciudad de Tandil
  A este festival, acuden bandas y/o grupos de música rock nacional, así como bandas de otros países (especialmente hispanoparlantes) comoUruguay,España,México,Puerto RicoyChile. También actuaron bandas de heavy metal y reggae de otros países comoGran Bretaña(Deep Purple),Brasil(Ratos_de_Porão) yAlemania(Die Toten Hosen), entre otros. Es el festival de rock mas importante de Argentina, y uno de los principales de latinoamérica que llegó a contar con la asistencia de 120.000 personas.
   "),]
   $smarty = new Smarty;
 	$smarty->assign('informacion',$informacion);
 	$smarty->display('home.tpl');
?>
