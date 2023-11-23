<?php 

class csoon extends Controller
{
    function __construct()
    {
        
        parent::__construct();
    }
    public function index()
    {
 

        $this->view->render("comingsoon.html");
    }
}


?> 