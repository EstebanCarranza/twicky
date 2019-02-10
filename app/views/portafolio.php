 <?php 
  if(!defined('__ROOT__')) define('__ROOT__', dirname(dirname(__FILE__)));
  require_once (__ROOT__.'\controllers\ctrlPortafolio.php');
  $ctrlP = new ctrlPortafolio();
  $ctrlP->getPortafolio();
?>
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
        <?php require_once 'inc/header.portafolio.php'; ?>
        <?php 
          if(isset($_GET['type']))
            $type = $_GET['type'];
          else
            $type = "IND";
          
          echo 
            "<div class='container'>
              <div class='row card-panel z-depth-0'>
                ";
                $ctrlP->getList($type);

          echo "
                </div>
              </div>
            </div>";
        ?>

     
      
  

        <?php require_once 'inc/footer.php'; ?>

        <script src="https://code.jquery.com/jquery-2.1.1.min.js" integrity="sha256-h0cGsrExGgcZtSZ/fRz4AwV+Nn6Urh/3v3jFRQ0w9dQ=" crossorigin="anonymous"></script>
        <!--JavaScript at end of body for optimized loading-->
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.sidenav').sidenav();
                $(".dropdown-trigger").dropdown();
            });
        </script>


    </body>
  </html>