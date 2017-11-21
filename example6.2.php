<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Example6.2 | php </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php

            echo "<h1>Galeria de imagenes con thumbnails</h1>";

             function valida_foto($fotos)
             {
                $rdo = 0;

                #funcion ereg no compatible con php7.0.0
                if(preg_match("[Jj][Pp][Gg]", $fotos)) rdo=1;
                if(preg_match("[Gg][Ii][Ff]", $fotos)) rdo=1;
                if(preg_match("[Pp][Nn][Gg]", $fotos)) rdo=1;
                if(preg_match("[Bb][Mm][Pp]", $fotos)) rdo=1;
                
                return $rdo;
             }

             function crea_tumbs($foto)
             {
                if(!is_dir('img/tumbs'))
                    mkdir('img/tumbs',0777);
                if(!is_file('img/tumbs/MINI-$foto'))
                    system("convert -sample 40x40 /img/$foto /img/tumbs/MINI-$foto");
             }

             echo "<table border=1>";
             $puntero = opendir('img');
             $i=1;
             while(false !== ($foto = readdir($puntero)))
             {
                 if($foto !="." && $foto !=".." && valida_foto($foto))
                 {
                     crea_tumbs($foto);

                     if($i==1)
                     
                         echo "<tr>";
                         echo "<td><a href='img/tumbs/MINI-$foto'>";
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