<?php 

class aboutus extends Controller
{

    function __construct()
    {
        
        parent::__construct();
    }
    
    public function index()
    {
        

        $this->view->render( "aboutus.html" );
    }
}


?> 