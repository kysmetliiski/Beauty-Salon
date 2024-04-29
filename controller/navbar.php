<?php 
class navbar extends controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->view->render("navbar.html");
    }
}


?>