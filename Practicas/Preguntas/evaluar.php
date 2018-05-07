<?php
 $respuesta = array("12", "Brasilia", "Enrique Peña Nieto", "Xalapa", "1810");
$cachado=$_POST['resp'];
$numerito=$_POST['num'];
    if (  $cachado == $respuesta[$numerito-1])
    echo ("<h1> $cachado  respuesta acertada <BR>\n");
     else
     echo ("<h1> $cachado  respuesta erronea <BR>\n");
  
    
       ?>       

          