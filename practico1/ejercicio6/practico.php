<?php
$cadena = $_POST['cadena'];
$array = split(',' ,$cadena);


arsort($array);

foreach($array as $x=>$x_value)
   {
   echo  $x_value;
   echo "<br>";
   }



 ?>
