<?php
 $numero1 = $_GET['numero1'];
 $numero2 = $_GET['numero2'];
 $resultado = 0;
 $operacion = $_GET['operacion'];

 switch ($operacion) {
      case '+':
      $resultado = $numero1 + $numero2;
      echo "La suma es : $resultado";
       break;
      case '-':
         $resultado = $numero1 - $numero2;
         echo "La resta es : $resultado";

           break;
      case '*':
            $resultado = $numero1 * $numero2;
            echo "La multiplicacion es : $resultado";

              break;
   default:
   echo "Falta definir operacion";
     break;
 }



 ?>
