<?php 

class reservations extends controller{

    function __construct(){
        parent::__construct();
    }
public function index(){
    session_start();
    // print_r($_SESSION);
  

    @$userinfo = $_SESSION['user']['id'];

    
    $reservation = $this->model->fetch("SELECT * FROM vreservations", array() );
    if($reservation){

        $data  =  $this->model->fetch("SELECT * FROM beauty_schema.vreservations where user_id = ?", array($userinfo) );
   
    } else {
       $data = array();
        }

   $this->view->render("reservations.html", array(
   "data" => $data,
   "reservation" => $reservation
));    

   
}
}
?>