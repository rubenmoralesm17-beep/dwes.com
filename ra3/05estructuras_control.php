<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores y expresiones</title>
</head>
<body>
    <h1>Estructuras de control</h1>
    <h2>Sentencias</h2>
    <p>Las sentencias simples acaban es ; , pudiendo haber mas de una en una misma linea</p>

    <?php
        $numero = 3; echo "<p>El numero es $numero<br>"; $numero += 3; print "Ahora es $numero</p>";
        
    ?>

    <p>Un bloque de sentencias es un conjunto de sentencias simples encerradas entre llaves. No suelen ir sueltas, sino formar parte de una estructura de control.
        Ademas, se pueden anidar
    </p>

    <?php

        {
            $numero = 5;
            echo "<p>El numero es $numero</p>";
            $numero2 -= 2;
            echo "<p>EL resultado es $numero</p>";
            {
                $numero = 8;
                $numero *= 2;
                echo "<p>El numero es $numero</p>";
            }
        }
    ?>
    
    <h3>EStructura condicional simple</h3>
    <?php
        /*
            Sintaxis:

            if(<condicion>) <sentencia>;
         */

            $numero = 4;
            if( $numero >= 4 ) echo "<p>El numero es mayor o igual a 4</p>";

            if( $numero === 4 and $numero %2 === 0);
                echo "<p>El numero es igual a 4 y por tanto es numero par</p>";

            if( $numero === 4 or $numero < 8) {
                echo "<p>El numero es igual a 4</p>";
                echo "<p>Ademas es inferior a 8</p>";
            }

            if ( $numero === 5 - 1 ) {
                echo "<p>El numero es igual a 5 - 1</p>";
            }
    ?>

    <h3>Estructura condicional compuesta</h3>

    <?php

            $n1 = 9;
            $n2 = 5;
            $n3 = 10;
            echo "<p>";
            if( $n1 == 9 or $n2 < $n1 and $n3 > 10 ) {
                echo "El resultado global ha sido True";
            }
            else{
                echo "El resultado global ha sido false";
            }
            echo "</p>";

            // If con su unica sentencia en una unica linea y else con su sentencia en otra linea

            echo "<p>";
            if( $n1 > 20 or $n3 < 15 ) echo "La expresion ha sido true porque \$n3 es 10";
            else echo "La expresion ha sido false";

            echo "</p>";

            $edad = 15;
            echo "<p>";
            if ( $edad > 18 )
                echo "Puedes ver la peli para +18";
            else {
                echo "No puedes ver la peli porque es para mayores de 18<br>";
                echo "Te faltan " . 18 - $edad . " años para poder verla";
            }
            echo "</p>";

            $tipoCarnet = "C1";
            echo "<p>";
            if( $edad > 21 and $tipoCarnet === "C1") {
                echo "Obtencion del carnet de camion<br>";
                echo "Tienes $edad años y al superar los 21 puedes obtener el carnet de $tipoCarnet";
            }
            else{
                echo "No cumples los requisitos para el carnet $tipoCarnet";
                echo "Todavia te faltan " . 21 - $edad . " años";
            }
            echo "</p>";


            if ( $edad >= 18 and $edad <= 65) { ?>

            <h3>Servicios del gimnasio disponibles</h3>
            <ul>
                <li>Spinning</li>
                <li>Boxeo</li>
                <li>Zumba</li>
            </ul>
            <?php
            } 
            else{ ?>
                <h3>Servicios para menores o jubilados</h3>
                <ul>
                    <li>Taichi</li>
                    <li>Pilates</li>
                    <li>Yoga</li>
                </ul>
                <?php

            }

            ?>
</body>
</html>