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

			// записване на данните от полетата в променливи за по-удобно

			$name = $_POST['name'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			
			
			$error = false;
			if (!$name){
				$err=  "<b style='color:red;'>Грешни данни!</b><br>";
			$error = true;
			}
			if (!$lname){
				$err= "<b style='color:red;'>Грешни данни!</b><br>";
				$error = true;
			}
			if (!$email){
				$err= "<b style='color:red;'>Грешни данни!</b><br>";
			$error = true;
			}

			if (!$password){
				$err= "<b style='color:red;'>Грешни данни!</b><br>";
				$error = true;
			}

	// INSERT заявка към базата, с която се записват полетата

			$sql = "INSERT INTO uktclog ( name,lname, email, password) VALUES (?,?,?,?)";
			$connection->prepare($sql)->execute([$name,$lname, $email, $password]);
		}


			$err = "<b style='color:red;'>Грешни данни!</b><br>";
		$params = array
		(
			  "error" => $err
		);


		$this->view->render("btylog.html", $params);
	}
}


?> 