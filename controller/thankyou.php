<?php 

class thankyou extends controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){

        $this->view->render("thankyou.html");

    }

}

?>