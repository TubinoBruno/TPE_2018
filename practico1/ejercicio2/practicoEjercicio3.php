<?php
if(isset($_GET['kg'])&&isset($_GET['cm'])){
  $peso = $_GET['kg'];
  $altura = $_GET['cm'];
  $exponente = 2;
  $IMC = $altura*$altura;
  $IMC = $peso / $IMC;
  echo "$IMC";

}
 ?>
