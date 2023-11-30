<?php 

class veselin extends Controller
{

    function __construct()
    {
        
        parent::__construct();
    }
    
    public function index()
    {
       

    
        $servername = "127.0.0.1";
        $username = "root";
        $password = "veselin7";
        $database = "beauty_schema";
       
        try {
          $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
          $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
         ?>
         <?php
       
         if ( isset( $_POST['submit'] ) ) {
         
             // записване на данните от полетата в променливи за по-удобно
         
          
            $chas = $_POST['chas'];
            $datachas = $_POST['datachas'];      
          
           $user_id     = @$_SESSION['user']['id'];
       
       
       function _p( $text )
       {
         echo "<pre>";
           print_r($_POST);
       
       }
       
       
         
             $new_date = date("Y-m-d", strtotime( $datachas ) );
       
             // INSERT заявка към базата, с която се записват полетата
       
             $sql = "INSERT INTO vreservations( user_id,  chas, datachas) VALUES (?,?,?)";
             $connection->prepare($sql)->execute([ $user_id,  $chas, $new_date]);
       
       
       
       
         }
        
         
       

        $this->view->render( "veselin.html");
    }
}


?>