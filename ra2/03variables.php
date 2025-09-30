<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Variables</title>
    </head>
    <body>
        <h1>Variables</h1>
        

        <?php

            //Una variable se declara al asignarle un valor por primera vez
            // sintaxis: $variable = expresion


            $numero = 45;

            //Si utilizo una variable que no esta declarada (a la que todavia no le he asignado ningun valor)
            // entonces es undefined

            $resultado = $num + 4;
            echo "<p>El resultado es $resultado</p>";

        ?>

    <h2>Analisis de variables</h2>
    <h3>Analisis simple</h3>

    <?php
        // Consiste en introducir una variable en una cadena con " o heredoc
        // Para incrustar su valor dentro de la cadena
        $num = 5;
        echo "<p>Variable num interpolada: $num</p>"
    ?>

    <h3>Analisis completo</h3>

    <?php

        $calle = "Trafalgar Sq";
        $numero = 5;
        $poblacion = "London";
        $distrito = 5000;

        // Tiene que salir: 5Th, trafalgar sq london 5000
        echo "<p>Mi direccion en Londres es $numeroth, $calle $poblacion $distrito</p>";

        // Lo evitamos con {}

        echo "<p>Mi direccion en Londres es {$numero}th, $calle $poblacion $distrito</p>"
    ?>
    <h2>Funciones para variables</h2>

    <?php

        // Funcion gettype() -> Devuelve el tipo de una variable

        $numero = 10;
        echo "<p>El tipo de datos de $resultado es " . gettype($resultado) . "</p>";
        echo "<p>El tipo de datos de una expresion es " . gettype($numero + 5.5) . "</p>";

        // Funcion empty() -> Devuelve true si una variable esta vacia
        // Comprueba que la varaible tenga un valor

        // - Si es un entero devuelve true si es 0, false en caso contrario
        // - Si es un float devuelve true si es 0.0, false en caso contrario
        // - SI es cadena devuelve true si es ""(vacio), false en caso contrario
        // - Devuelve true si la variable es null o false
        
        
        if( empty($numero) ) 
            echo "<p>\$numero esta vacia</p>";
        else
            echo "<p>\$numero tiene el valor $numero</p>";


        // Funcion isset() -> Devuelve true si la variable esta definida y con un valor distinto de null,  false en caso contrario
        if (isset($nueva_variable) )
            echo "<p>Esta definida</p>";
        else
            echo "<p>La variable no se ha definido aun</p>";

        $variable_null = null;
        if (isset($nueva_null) )
            echo "<p>La variable null Esta definida</p>";
        else
            echo "<p>La variable no se ha definido aun</p>";


        /* Funciones que comprueban el tipo de datos
        - is_bool() - True si la expresion es booleana
        - is_int() -  True si la expresion es entera
        - is_float() - True si la expresion es float
        - is_string() - True si la expresion es un array


        En cualquiero otro caso devuelve false
        */

        $edad = 28;
        $mayor_edad = $edad > 18;
        $numero_e = 2.71;
        $mensaje = "<p>El numero e es {$numero_e}</p>";

        if(is_int($edad) )
            echo "<p>\$edad es un entero</p>";
        if (is_bool($mayor_edad))
            echo "<p>\$mayor_edad es booleana</p>";
        if(is_float($numero_e))
            echo "<p>\$numero_e es float</p>";
        if(is_string($mensaje))
            echo "<p>\$mensaje es una cadena</p>";
    ?>

    <h2>Constante</h2>
    <p>Una constante es un valor con nombre que no se puede cambiar el valor a lo largo del programa
        se le asigna un valor en la declaracion y permanece invariable. Hay 2 formas de definir una constatnte:
            <ul>
                <li>Mediante la funcion define()</li>
                <li>Mediante la palabra clave const</li>
            </ul>
    </p>

    <?php
        // 1ª forma: Funcion define()
        define("PI", 3.1415);
        define("PRECIO_BASE", 1500);
        define("DIRECTORIO_SUBIDAS", "/var/www/uploads/archivos");

        echo "<p>El numero PI es " . PI . "</p>";
        $area_circulo = PI * 4 * 4;
        echo "<p>El area del circulo es $area_circulo</p>";

        $path_archivo = DIRECTORIO_SUBIDAS . "/archivo.pdf";
        echo "<p>El archivo subido es $path_subido</p>";

        $precio_rebajado = PRECIO_BASE - PRECIO_BASE * 0.25;
        echo "<p>El precio rebajado es $precio_rebajado</p>";

        // 2º Forma: Mediante la palabra clave const
        const SESION_USUARIO = 600;
        echo "<p>La sesion de usuario finaliza en " . SESION_USUARIO . " segundos</p>";

        //Constantes predefinidas

        echo "<p>Este script es " . __FILE__ . " y esta en el directorio " . __DIR__ . " y el numero de linea es " . __LINE__ . "</p>"
    ?>
    </body>
</html>