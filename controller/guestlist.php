<?php 

class Guestlist extends Controller
{
    function __construct()
    {
        
        parent::__construct();
    }
    public function index()
    {
        

        $params = array( 
            "view_var" => $a,
            "data" -> $data,
        );

        $this->view->render("guestbooking.html", $params);
    }
}


?> 