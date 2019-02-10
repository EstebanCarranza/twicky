<?php
if(!defined('__ROOT__')) define('__ROOT__', dirname(dirname(__FILE__)));
require_once (__ROOT__.'\libraries\Database.php');
require_once (__ROOT__.'\models\portafolio.php');


class ctrlPortafolio
{
    var $listPortafolio;
    
    public function __construct()
    {

    }
    public function getPortafolio()
    {
        $daba = new database();
        $this->listPortafolio = [];
        $con = new mysqli($daba->host, $daba->user, $daba->pass, $daba->daba);
        if(mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }else
        {
            $con->set_charset("utf8");
            $sql="SELECT idPortafolio, tipo, titulo, pathImgPortada, pathSitio, descripcion FROM twp_portafolio ORDER BY idPortafolio";
            if ($result=mysqli_query($con,$sql))
            {
                // Fetch one and one row
                //$row = $result->fetch_array(MYSQLI_ASSOC)
                while ($row=$result->fetch_array(MYSQLI_ASSOC))
                    {
                        //$idPortafolio,$tipo,$titulo,$pathImgPortada,$pathSitio,$descripcion
                        $portf = new portafolio($row["idPortafolio"], $row["tipo"], $row["titulo"], $row["pathImgPortada"],$row["pathSitio"],$row["descripcion"]);
                        array_push($this->listPortafolio, $portf);

                    }
                // Free result set
                mysqli_free_result($result);
            }

            mysqli_close($con);
        }
    }
    public function getList($type = "IND")
    {
        //var_dump($this->listPortafolio[0]->titulo);
        ///var_dump($this->listPortafolio);
        
        for($i = 0; $i < count($this->listPortafolio); $i++)
        {
            if($this->listPortafolio[$i]->tipo == $type)
            {
                //echo $this->listPortafolio[$i]->titulo."<br>";
                echo 
                "<div class='col l4 m6 s12 animated-card'>
                  <div class='card small hoverable'>
                    <div class='card-image waves-effect waves-block waves-light'>
                      <img class='activator' src='".$this->listPortafolio[$i]->pathImgPortada."'>
                    </div>
                    <div class='card-content'>
                      <span class='card-title activator grey-text text-darken-4'>".$this->listPortafolio[$i]->titulo."<i class='material-icons right'>more_vert</i></span>
                      <p><a target='_blank' href='".$this->listPortafolio[$i]->pathSitio."'>Ir al sitio</a></p>
                    </div>
                    <div class='card-reveal'>
                      <span class='card-title grey-text text-darken-4'>".$this->listPortafolio[$i]->titulo."<i class='material-icons right'>close</i></span>
                      <p>
                        ".$this->listPortafolio[$i]->descripcion."
                      </p>
                    </div>
                  </div>
                </div>";
            }
                
        }
          
            
      
    }
};


?>