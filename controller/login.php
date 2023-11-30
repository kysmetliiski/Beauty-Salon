<?php 

class Login extends Controller
{

    function __construct()
    {
        
        parent::__construct();
    }

    public function index()
    {

      $error = "";
        
// стартиране на сесия ( ще трябва по-долу )
                session_start();

              




      if ( isset( $_POST['submit'] ) ) {

        // записване на данните от полетата в променливи за по-удобно

        $email = $_POST['email'];
        $password = $_POST['password'];
        
        
        // зареждане от базата на потребител с въведените от формата име и парола
        
     
        
        $user = $this->model->fetch("SELECT * FROM uktclog WHERE email = ? AND password = ?",[ $email, $password ]);
                                      

 
          if ( $user && $user['type'] == 'superuser' ) 
                          {

                  $_SESSION['user'] = $user;
                  
                  header("location: index.php?controller=schedule");
                  exit; 
                          }

         else  if ( $user && $user['type'] =='user' )
                          {
                
                $_SESSION['user'] = $user;
                
                header("location: index.php?controller=mylist");
                exit;
                          } 

          else
                           {
                
  
                            $error = "<b style='color:red;'>Невалидни потребителски данни</b><br>";

          
                           }
                
                //$isroot =$user->authorise('schedule.php');
                
                                        }
 

                                      
                                        $params = array
                                              (
                                                    "err" => $error 
                                              );
                          
                             
                                        $this->view->render("uktclogin.html", $params);
    }
}


?> 




 