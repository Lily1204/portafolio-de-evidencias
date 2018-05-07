<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Preguntas y respuestas</title>
  </head>
  <body>
    <form action="" method="post">
      <label>Ingrese un numero</label>
      <input type="text" name="num" placeholder="Ingrese un numero">
      <select name="tipo">
        <option  value="Binario">Binario</option>
        <option  value="Hexadecimal">Hexadecimal</option>
     </select>
      <input type="submit" name="aceptar" value="Aceptar">
       <br>
    </form>
    <?php
    if(isset($_POST['aceptar']))
      include_once("binario.php");
 
    ?>
  </body>
</html>