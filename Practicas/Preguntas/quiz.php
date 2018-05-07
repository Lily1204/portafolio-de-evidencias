
<html>
 
 <head> 
    <title>Verifica  edad</title> 
 </head> 
 <body>

<?php
$pregunta = array(1=>"cuanto es 4+8", "cual es la capital de Brasil?", 
"quien es el presidente de Mexico?", "cual es la capital de Veracruz?", 
"en que año fue la independencia de Mexico");
$respuesta = array(1=>"12", "Brasilia", "Enrique Peña Nieto", "Xalapa", "1810");

$numeroR=isset($_POST['numero']) ? $_POST['numero'] : 0; 

if ($numeroR > 5) 
   echo "<h2>No es un numero de pregunta valido, intende de nuevo</h2>"; 
else
   echo "<h1>Conteste la siguiente pregunta</h1>"; 
       $contador = count($pregunta);
 for ($i=1; $i<$contador+1;$i++)
{
    if ($numeroR==$i)
        echo ("<h1> $pregunta[$i]  respuesta:
        </form>
    <form action=evaluar.php method='post'  >
    <input style='display:none;' type='text' name='num' value= $numeroR>
    <input type='text' name='resp'>
    <input type=submit >
    </form>
        <BR>\n");   
       
        }
?>

 </body>
 </html>