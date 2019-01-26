<?php 
    if(isset($_GET['action']))
    {
        $action = $_GET['action'];
    }
    else{
        $action = "main";
    }
?>
<!DOCTYPE html>
  <html>
    <head>
    <title> Twicky! </title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
      .inner-background-container
      {

       -webkit-box-shadow: inset 0px 0px 100px 10px rgba(0,0,0,1),0px 0px 50px 5px rgba(0,0,0,1);
      -moz-box-shadow:    inset 0px 0px 100px 10px rgba(0,0,0,1),0px 0px 50px 5px rgba(0,0,0,1);
      box-shadow:         inset 0px 0px 100px 10px rgba(0,0,0,1),0px 0px 50px 5px rgba(0,0,0,1);
      }
      .ec-container
    {
        padding:4%;
        border-box:box-sizing;
        border-radius:4px;
        margin-bottom:2%;
      }

.ir-arriba {
	display:none;
	padding:20px;
	background:#024959;
	font-size:20px;
	color:#fff;
	cursor:pointer;
	position: fixed;
	bottom:20px;
	right:20px;
}

      @media screen and (max-width: 700px) {
        .ec-container {
            width:100%;
            }
        }

      </style>
    </head>

    <body class="white">
        <span class="ir-arriba material-icons">arrow_upward</span>
        <?php require_once 'views/inc/header.php'; ?>


        <?php require_once 'views/inc/carousel.php'; ?>
        
        <div class="container white ec-container">
           <?php 
                switch($action)
                {
                    case "main":
                        include "main.html";
                    break;
                    case "politica":
                        include "legal/politica.html";
                    break;
                }
           ?>
        </div>
        
        <?php require_once 'views/inc/footer.php'; ?>

        <script src="https://code.jquery.com/jquery-2.1.1.min.js" integrity="sha256-h0cGsrExGgcZtSZ/fRz4AwV+Nn6Urh/3v3jFRQ0w9dQ=" crossorigin="anonymous"></script>
        <!--JavaScript at end of body for optimized loading-->
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.sidenav').sidenav();
                $(".dropdown-trigger").dropdown();
                $('.carousel.carousel-slider').carousel({
                    fullWidth: true,
                    indicators: true
                });


                $('.ir-arriba').click(function(){
                        $('body, html').animate({
                            scrollTop: '0px'
                        }, 300);
                    });
                
                $(window).scroll(function(){
                    if( $(this).scrollTop() > 0 ){
                        $('.ir-arriba').slideDown(300);
                    } else {
                        $('.ir-arriba').slideUp(300);
                    }
                });

            });
        </script>


    </body>
  </html>