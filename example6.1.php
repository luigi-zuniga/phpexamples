<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Example7 | php </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            /**idem al ejecicio example6, pero esta vez debe de mostrar las fotos en 100x100 y que al pulsar abra la foto entera
             * Compruebe que solo muestra fotos con extension jpg png bmp o gif
             * Hacer una funcion que lo compruebe usando las expresiones regulares como aparecen en el manual php
             */
            echo "<h1>Tabla de Fotos con Enlace</h1>";

             function valida_foto($fotos)
             {
                $rdo = 0;
                #ereg , comparacion de expresiones regulares.
                #ESTA FUNCION ESTA OBSOLETA EN PHP5.3 Y ESTA ELIMINADA EN PHP 7.0.0

                if(ereg("[Jj][Pp][Gg]$", $fotos)) rdo=1;
                if(ereg("[Gg][Ii][Ff]$", $fotos)) rdo=1;
                if(ereg("[Pp][Nn][Gg]$", $fotos)) rdo=1;
                if(ereg("[Bb][Mm][Pp]$", $fotos)) rdo=1;
                
                return $rdo;
             }

             echo "<table border=1>";
             $puntero = opendir('img');
             $i=1;
             while(false !== ($foto = readdir($puntero)))
             {
                 if($foto !="." && $foto !=".." && valida_foto($foto))
                 {
                     if($i==1)
                     
                         echo "<tr>";
                         echo "<td><a href='img/$foto'>";
                         echo "<img src='img/$foto' width=100 height=100></img>";
                         echo "</a></td>";
                         if($i==4){
                            echo "</tr>";$i=0;}
                         $i++;
                 }
            }
            closedir($puntero);
            echo "</table>";
        ?>
    </body>
</html>