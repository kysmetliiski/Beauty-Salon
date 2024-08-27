<?php 

class logout extends controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){

        session_destroy();
        header("location: index.php?controller=home");
    }
}
?>