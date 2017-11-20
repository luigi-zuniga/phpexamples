<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Example 6 | php </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            /**Mostrar en una tabla de 4 columnas todas las imagenes del directorio fotos, para ello consulte el manual (en concreto la referencia de funciones de directorios)
             * Suponga que en el directorio solo existen fotos.
             */
                if($gestor = opendir('img'))
                {
                echo "<table border=1>";
                echo "<tr>";
                        $i=0;
                        while(false !== ($archivo = readdir($gestor)))
                        {
                            if($archivo!="." && $archivo != "..")
                            {
                                if($i==4)
                                {
                                    $i=0;
                                    echo "</tr>";
                                    echo "<tr>";
                                }
                                $i++;
                                echo "<td>";
                                echo "<a href=img/$archivo><img src=img/$archivo></a>";
                                echo "<center><p><b>Nombre del Archivo: "."</b><br/>".$archivo."</p></center>";
                                echo "</td>";
                            }
                        }
                echo "</tr>";
                echo "</table>";
                closedir($gestor);
                }

        ?>
    </body>
</html>