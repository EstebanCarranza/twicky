
<!DOCTYPE html>
  <html>
    <head>
    <title> Twicky! </title>
    <meta charset="UTF-8">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <style>
      .animated-card
      {
        animation-duration: 0.25s;
        animation-name: slidein;
      }
      @keyframes slidein {
        from {
           -ms-transform: scale(0); /* IE 9 */
            -webkit-transform: scale(0); /* Safari */
            transform: scale(0);
        }

        to {
           -ms-transform: scale(1); /* IE 9 */
            -webkit-transform: scale(1); /* Safari */
            transform: scale(1);
        }
      }
     </style>
    </head>

    <body>
   
    <section class="container"> 
    <h1> Descargas </h1>
        <table class="striped">
            <tr>
            <th>Nombre</th>
            <th>Liga</th>
            </tr>
            <?php
                $directorio = opendir("."); //ruta actual
                while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
                {
                    if (!is_dir($archivo))//verificamos si es o no un directorio
                    {
                        if(substr($archivo,-4) != ".php" && $archivo != ".htaccess")
                        {
                            
                            echo "<tr><td>".$archivo."</td><td><a href='$archivo'>". $archivo."</a></td></tr>";
                        }
                    }
                }
            ?>
            </table>
        </section>
    </body>
</html>