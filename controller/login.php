<?php 

class Login extends Controller
{

    function __construct()
    {
        
        parent::__construct();
    }

    public function index()
    {
        
// стартиране на сесия ( ще трябва по-долу )
                session_start();

                $servername = "127.0.0.1";
                $username = "root";
                $password = "veselin7";
                $database = "beauty_schema";



try 
{
  $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

      if ( isset( $_POST['submit'] ) ) {

        // записване на данните от полетата в променливи за по-удобно

        $email = $_POST['email'];
        $password = $_POST['password'];
        
        
        // зареждане от базата на потребител с въведените от формата име и парола
        
        $stmt = $connection->prepare("SELECT * FROM uktclog WHERE email = ? AND password = ?"); 
        $stmt->execute([ $email, $password ]); 
        $user = $stmt->fetch();
        
                                      

 
          if ( $user && $user['type'] == 'superuser' ) 
                          {

                  $_SESSION['user'] = $user;
                  
                  header("location: schedule.php");
                  exit; 
                          }

         else  if ( $user['type'] =='user' )
                          {
                
                $_SESSION['user'] = $user;
                
                header("location: booking.html");
                exit;
                          } 

          else
                           {
                echo "<b style='color:red;'>Невалидни потребителски данни</b><br>";
                           }
                
                //$isroot =$user->authorise('schedule.php');
                
                                        }
 


                                        $this->view->render("uktclogin.html");
    }
}


?> 