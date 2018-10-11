<?php

if(isset($_GET['numero1'])&&isset($_GET['numero2'])&&isset($_GET['numero3'])){
  $numero1 = $_GET['numero1'];
  $numero2 = $_GET['numero2'];
  $numero3 = $_GET['numero3'];
  $resultado = 0;
  $resultado = $numero1*$numero2;
  $resultado = $resultado - $numero3;
  echo "$resultado ";
}
if(isset($_GET['nombre'])&&isset($_GET['apellido'])){
  $nombre = $_GET['nombre'];
  $apellido = $_GET['apellido'];
  echo "$nombre $apellido";

}

?>
