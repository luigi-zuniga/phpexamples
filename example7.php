<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exmaple 7 | php</title>
</head>
<body>
    <?php 
        /**Vectores Almacene en un vector los 10 primeros numeros pares, imprimalos cada uno en una linea
         * (Recuerde que el salto de linea en html es <br/>)*/
        
        for($i=0;$i<10;$i++){
            $v[$i]=$i*2;
            echo "$v[$i]";
        }         
    ?>
</body>
</html>