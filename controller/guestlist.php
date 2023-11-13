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
         
        );

        $this->view->render("guestbooking.html", $params);
    }
}


?> 