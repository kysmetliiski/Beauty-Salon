<?php 

class acneblog extends Controller
{
    function __construct()
    {
        
        parent::__construct();
    }

    public function index()
    {
        

        $this->view->render("acne.html");
    }
}


?> 