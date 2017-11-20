<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Example 5 | php</title>
</head>
<body>
    <?php
        /**Mostrar una tabla de 4 por 4 que muestre las primeras 4 potencias de los numeros del uno 1 al 4
         * (hacer una funcion que calcule invocando la funcion pow). 
         * Los parametros se indican con su nombre ($cantidad) si son por valor y antecedidos de & (&cantidad) si son por referencia.
         */
         const TAM = 4;
         function potencia($v1,$v2)
         {
            #pow - Expresion exponencial, devuelve el valor de la base elevado a la potencia 
            #pow($base,$exp)
            $rdo = pow($v1,$v2);
            return $rdo;
         }

             echo "<table border=1>";
            for($tr=1;$tr <= TAM; $tr++)
            {
                echo "<tr>";
                    for($td=1;$td <=TAM ; $td++)
                    {
                        echo "<td>".potencia($tr,$td)."</td>";
                    }
                echo "</tr>";
            }
         echo "</table>"
    ?>
</body>
</html>