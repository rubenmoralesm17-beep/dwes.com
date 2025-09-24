<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Elementos del lenguaje</title>
    </head>
    <body>
        <h1>Elementos del lenguaje</h1>
        <h2>Entrada y Salida</h2>
        <p>La entrada de datos en PHP es con un formulario o enlace. La salida 
            se produce con la funcion echo, y su forma abreviada y la funcion print.

            Ademas, tenemos la funcion printf para la salida con formato.
        </p>
        <h3>Funcion echo</h3>
<?php
echo "<p>La función echo emite el resultado de una expresion a la salida (del servidor al cliente web).
    se puede usar como función o como construccion del lenguaje (sin parentesis)</p>";

echo "<p>Esto es un parrafo HTML enviado con echo</p>";

$nombre = "Ruben";
echo "<p>Hola, $nombre, ¿como estás?</p>";
echo "<p>Hola, $nombre, ¿como estás?</p>";

//esto no sirve porque mas de un argumento
//echo (<p>Hola, $nombre, ¿como estás?</p>);

echo("<p>Hola, $nombre, ¿como estas?</p>");

//Quiero un salto de linea al final de la linea

echo "<p>Hola, esta linea acaba en un salto de linea \n";
echo "Supuestamente esta linea es la siguiente a la anterior \n y esta va despues</p>";


$nombre = "Raquel";
$apellidos = "Mouri";
echo "<br> Mi nombre es $nombre y mi apellido es $apellidos<br>";
echo "<br>Mi nombre es " . $nombre . "y mi apellido es " . $apellidos . "<br>";

echo "<br>Uno mas dos son " . 1 + 2 . "y tiene que haber salido 3<br>";

echo "<h4>Forma abreviada de echo</h4>";
echo "<p>Cuando hay que enviar a la salida el resultado de una expresion pequeña disponemos de la gorma abreviada de echo que permite intercalarse en el codigo 
HTML con menos esfuerzo y más legible</p>";

$tiene_portatil = True;
?>
<!-- ESTAMOS EN MODO HTML -->
 <p>Mi nombre es <?php echo $nombre ?> y estoy programando en PHP</p>
 <p>Mi nombre es <?= $nombre . " " . $apellidos ?> y estoy programando en PHP</p>


 <!-- Uso habitual de echo abreviado en los formularios -->
  <input type="text" size="30" name="nombre" id="nombre" value="<?=$nombre?>">
  <input type="checkbox" name="portatil" id="portatil" <?= $tiene_portatil ? "checked" : ""?> >

  <?php

  //Que ocurre si tengo qye enviar a la salida código HTML con cadenas de caracteres
  //para php comillas dobles
  //para html comillas simples
  echo "<input type='text' name='apellidos' id='apellidos' size='30'>";
  ?>

<!-- Función print -->
<h4>Funcion print</h4>
<p>Funciona como echo</p>
   <?php
   print "<p>Esto es una cadena\n que tiene mas de una linea\n y se envia a la salida</p>";
   $pi = 3.14159;
   $radio = 3;
   $circuferencia = 2* $pi * $radio;
   print "<p>La longitud de la circuferencia de radio $radio es $circuferencia</p>";

//La funcion printf permite dar salida con formato
echo "<h4>Funcion printf()</h4>";
printf("<br>La circuferencia de radio %d es %f", $radio, $circuferencia);
printf("<br>La circuferencia de radio %d es %10.2f", $radio, $circuferencia);
printf("<br>La circuferencia de radio %d es %010.2f", $radio, $circuferencia);
printf("<br>La circuferencia de radio %d es %1$010.2f", $radio, $circuferencia);
   ?>
    </body>
</html>