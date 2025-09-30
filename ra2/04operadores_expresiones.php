<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Operadores y exoresiones</title>
    </head>
    <body>
        <h1>Expresiones, operadores y operandos</h1>
        <p>Una expresion es una combinacion de operandos y operadores que arroja un resultado.
            Tiene un tipo de datos, que depende del tipo de datos de sus operandos y de la operacion realizada. <br>
            Un operador es un simbolo formado por uno, dos o tres caracteres que denota una operacion <br>
            Los operadores pueden ser:
            <ul>
                <li>Unarios -> Solo necesitan un operando</li>
                <li>Binarios -> Necesitan dos operandos</li>
                <li>Ternarios -> Utilizan 3 operandos</li>
            </ul>
            Un operando es una expresion en si misma, siendo la mas simple un literal o ina variable, pero tambien puede ser un valor devuelto por una funcion 
            o el resultado de otra expresion <br>
            Las operaciones de una expresion no se ejecutan a las vez, sino en un orden segun la precedencia (prioridad) y asociatividad del operador
            Esto se puede cambiar a conveniencia
        </p>
        
        <h2>Operadores de asignacion</h2>

        <?php

            // El operador de asignacion =
            $numero = 45;

            $resultado = $numero + 5 - 29;
            $sin_valor = null;

        ?>

        <h3>Aritmeticos</h3>

        <?php

            /*
            + Suma
            - Resta
            * Multiplicacion
            / Division
            % Modulo o resto de la division entera
            ** Exponenciacion

            Unarios
                + Conversion a entero
                - El opuesto
             */

            $numero1 = 15;
            $numero2 = 18;
            $suma = $numero1 + 10;
            $resta = 25 - $numero2;
            echo "<p>La suma de $numero1 y $numero2 es $suma, y la resta es $resta</p>";

            // El opuesto

            $opuesto = -$numero1;
            echo "<p>El opuesto de $numero1 es $opuesto</p>";

            $resta = $numero - 75;
            $opuesto = -$resta;
            echo "<p>El opuesto de $resta es $opuesto</p>";


            $multiplicacion = $numero1 * 3;
            $division = $numero1 / 3;

            $modulo = $numero1 % 4;

            $potencia = $numero1 ** 3;

            echo "<p>La multiplicacion de $numero1 por 3 es $multiplicacion</p>";

            echo "<p>La division de $numero1 entre 3 es $division</p>";

            echo "<p>El resto de dividir $numero1 entre 4  es $modulo</p>";

            echo "<p>$numero1 elevado a 3 es $potencia</p>";

            // Convertir a entero

            $numero3 = "35";
            $numero4 = +$numero3;
            echo "<p>El \$numero es $numero3 y su tipo es " . gettype($numero3) . "</p>";
            echo "<p>El \$numero es $numero4 y su tipo es " . gettype($numero4) . "</p>";


            // Con float

            $numero5 = 3.14159;
            $numero6 = +$numero5;
        
            echo "<p>El \$numero es $numero5 y su tipo es " . gettype($numero5) . "</p>";
            echo "<p>El \$numero es $numero6 y su tipo es " . gettype($numero6) . "</p>";

        ?>
        <h3>Asignacion aumentada</h3>

        <?php

            /*
                Operadores de asignacion aumentada
                ademas de una operacion aritmetica, hay una asignacion

                    ++ Incremento
                    -- Decremento
                    += Suma y asignacion
                    -= Resta y asignacion

                    *= Multiplicacion y asignacion
                    /= Division y asignacion
                    %= Modulo y asignacion
             */

            $numero4 = 4;
            $numero++; //Equivalente a $numero = $numero + 1;
            echo "<p>El numero incrementado es $numero</p>";
            ++$numero;
            echo "<p>El numero incrementado es $numero</p>";

            $numero = 10;
            $resultado = $numero++ * 2;

            echo "<p>El resultado es $resultado y el numero es $numero</p>";

            $numero = 10;
            $resultado = ++$numero * 2;
            echo "<p>El resultado es $resultado y el numero es $numero</p>";

            $numero += 5; //Equivale a $numero = $numero + 5;

            echo "<p>El numero es $numero</p>";
            $numero -= 3; //Equivale a $numero = $numero -3
            echo "<p>El numero es $numero</p>";

            $numero *= 3; //Equivale a $numero = $numero * 3
            echo "<p>El numero es $numero</p>";

            $numero %= 7; //Equivale a $numero = $numero % 7;
            echo "<p>El numero es $numero</p>";

        ?>

        <h2>Operadores relacionales</h2>
        <?php
            /*
                == igual a
                === identico (Iguales y del mismo tipo)
                != Distinto
                !== Distinto o distinto tipo
                > mayor
                < menor
                >= Mayor o igual
                <= Menor o igual
                <=> Nave especial
             */

            $n1 = 5;
            $cadena = "5";
            $n2 = 8;
            $resultado = $n1 == $n2;
            echo "<p>Es n1 igual que n2" . (int)$resultado ." </p>";

            $resultado = $n1 == $cadena;
            echo "<p>Es n1 igual que cadena " . (int)$resultado ."</p>";

            $resultado = $n1 === $cadena;
            echo "<p>ES n1 igual a cadena " . (int)$resultado . "</p>";

            $resultado = $n1 != $n2;
            echo "<p>ES n1 igual a cadena " . (int)$resultado . "</p>";

            // Operador !== True si son distintos o de diferente tipo, false en caso contrario

            $resultado = $n1 !== $cadena;
            echo "<p>ES n1 NO IDENTICO a cadena " . (int)$resultado . "</p>";

            // Nave espacial

            /*
                Si n1 es mayor que n2 el resultado es 1
                Si n1 es igual que n2 el resultado es 0
                Si n1 es menor que n2 el resultado es -1

                Se emplea para evitar lo siguiente
                if($n1 > $n2){

                }
                elsif($n1 < n2) {

                }
                else{

                }

             */

            $resultado = $n1 <=> $n2;
            echo "<p>El resultado es $resultado</p>";

            $nombre1 = "abcZacarias";
            $nombre2 = "abcadela";
            $resultado = $nombre1 > $nombre2;
            echo "<p>El resultado es " . (int)$resultado . "</p>";

            


        ?>
    </body>
</html>