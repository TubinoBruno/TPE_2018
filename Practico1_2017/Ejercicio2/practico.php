<?php
$resultado = 0;
$contador = 1;
$salir = TRUE;
while ($salir) {
  if (isset($_POST['valor'.$contador])) {
    $resultado += $_POST['valor'.$contador];
    $contador++;
  }
  else {
    $salir = FALSE;
  }
  }
  $imprimir = "el resultado es ";
  $imprimir .= $resultado;
  echo $imprimir;

 ?>
