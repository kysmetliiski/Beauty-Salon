<?php 

class Guestlist extends Controller
{
    function __construct()
    {
        
        parent::__construct();
    }
    public function index()
    {
        
        $data = $this->model->fetchAll("SELECT * FROM services", array());

        

        $this->view->render("guestbooking.html", array(
            "data" => $data
        ));
    }
}


?> 