<?php 

class blog extends Controller
{
    function __construct()
    {
        
        parent::__construct();
    }
    public function index()
    {
        

        $this->view->render("blog.html");
    }
}


?> 