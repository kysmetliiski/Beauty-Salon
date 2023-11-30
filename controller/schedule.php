<?php 

class schedule extends Controller
{
    function __construct()
    {
        
        parent::__construct();
    }
    public function index()
    {
 

        $this->view->render("schedule.html");
    }
}


?> 