<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>example 3</title>
</head>
<body>
    <?php
        #mostrar por pantalla una tabla de 10 por 10 con los numeros del 1 al 100
        echo "<table border=1>";
        $num=1;
        for ($tr=1; $tr <= 10 ; $tr++)
        {
            echo "<tr>";
            for($td=1;$td<=10;$td++){
                echo "<td>".$num."</td>";
                $num=$num+1;
                if($num % 2 == 0){
                    #si el numero es multiplo de 2 dejar en rojo, si es de 5 dejar en azul
                    echo "<td style='color:red;'";
                }
                if($num % 5 == 0){
                    echo "<td style='color:blue;'";
                }
            }      
            echo "</tr>";
        }

        echo "</table>";
    ?>    
</body>
</html>