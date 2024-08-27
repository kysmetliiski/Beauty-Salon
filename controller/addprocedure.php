<?php 

class addprocedure extends Controller{

    function __construct(){

        parent::__construct();
    }
    public function index(){

        $error = ""; 
    
        if( isset($_POST[ 'submit' ]  )   ) {
            $title =  $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];

            if ( !$title ) {
                echo "<center style='color:red;'>Попълнете име на процедурата</center>";
                $error = true;
            }
            if ( !$description ) {
                echo "<center style='color:red;'>Попълнете описание</center>";
                $error = true;
            }
            if ( !$price ) {
                echo "<center style='color:red;'>Въведете цена</center>";
                $error = true;
            }

            $this->model->datasave("INSERT INTO services (title,description,price) VALUES(?,?,?)",[$title,$description,$price]);
        }
        
        
        $params = array
        (
              "err" => $error 
        );
        $this->view->render("addprocedure.html", $params);
    }
}

?>