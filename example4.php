<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Example 4 | php</title>
</head>
<body>
    <?php
        #Ejercicio example3.php pero colorear la filas alternando gris y blanco. 
        #Ademas, el tamaño sera una constante: define(TAM, 10); 
        
        #declaracion de constante nombre TAM, value 10
        #define(TAM,10);
        const TAM = 10;
        echo "<table border=1>";
            $n = 1;
            for($tr=1;$tr<=TAM;$tr++){
                echo "<tr>";
                    if($tr % 2 ==0){
                        echo "<tr bgcolor=#bdc3d6>";
                    }else{
                        echo "<tr>";
                    }
                    for($td=1;$td<=TAM;$td++){
                        echo "<td>".$n."</td>";
                        $n+=1;  
                    }
                echo "</tr>";
            }
        echo "</table>";
    ?>
</body>
</html>