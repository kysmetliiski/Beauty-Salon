<?php 

class blog extends Controller
{
    function __construct()
    {
        
        parent::__construct();
    }

    public function index()
    {
        $a = 200;    

        $this->view->render("blog.html");
    }
}


?> 