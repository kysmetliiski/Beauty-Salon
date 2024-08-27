<?php 

class Registration extends Controller
{
	function __construct()
    {
        
        parent::__construct();
    }
    public function index()
    {
		$err = "";

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

		if ( isset( $_POST['submit'] ) ) {


			$name = $_POST['name'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$h_password = password_hash($password, PASSWORD_DEFAULT);	
			
			$error = false;
			if(!preg_match('/@/', $email) || !preg_match('/[A-Za-z]/',$email)) {
				echo "<b style='color:red;'>Имейлът задължително трябва да съдържа '@'
				и да бъде на латиница,за да бъде приет като валиден.</br> ";
			}
			if (strlen($password)< 6 )
            {
				echo "<b style='color:red;'>Паролата трябва да бъде не по-малко от 6 символа.</b>";
			}
            elseif (!preg_match('/[A-Za-z0-9А-Яа-я]/u', $password) || !preg_match('/[0-9]/', $password)) 
            {
                echo "<b style='color:red;'>Паролата трябва да бъде комбинация от букви и цифри.</b>";
            }		
	$this->model->datasave("INSERT INTO uktclog ( name,lname, email, password) 
			VALUES (?,?,?,?)",[$name,$lname, $email, $h_password]);
		}
		$params = array
		(
			  "error" => $err
		);

     
		$this->view->render("registration.html", $params); 
	}
}


?> 