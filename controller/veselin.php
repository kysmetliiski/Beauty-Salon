<?php 

class veselin extends Controller
{

    function __construct()
    {
        
        parent::__construct();
    }
    
    public function index()
    {
        

        $this->view->render( "veselin.html" );
    }
}


?>