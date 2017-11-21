<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Example 8 | PHP</title>
</head>
<body>
    <?php
        #Imprima los valores del vector asociativo siguiente usando la estructura del control foreach
        $v[1]=90;
        $v[30]=7;
        $v['e']=99;
        $v['hola']=43;

        foreach($v as $indice => $valor)
        {
            echo "<b>El elemento de indice</b><i> $indice</i> <b>vale</b> $valor </br>";
        }
    ?>
</body>
</html>