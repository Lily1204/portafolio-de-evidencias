<?php

$num=$_POST['num'];
$tipo=$_POST['tipo'];
echo ("<h1> numero  $num   <BR>\n");

function Binario($num) {
   
    $suma = 0;
        $exponente = 1;
        do{ 
                $digito = $num % 2;
                $num = floor($num / 2); //4
                $suma = $suma + $digito * $exponente;//
                $exponente = $exponente * 10;   
        }while($num > 0);
        echo "El valor binario es: $suma";
}    
function Hexadecimal($num) {
    
        $valoresHexa = array('0','1','2','3','4','5','6','7',
                   '8','9','A','B','C','D','E','F');
        $valor = '';
         while($num != '0')
         {
            $valor = $valoresHexa[bcmod($num,'16')].$valor;  
            $num = bcdiv($num,'16',0);
          
        }
        echo "El valor Hexadecimal  es: $valor";
        return $valor;
    }
 $tipo($num);

 ?>
