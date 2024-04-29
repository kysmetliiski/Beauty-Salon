<?php 
class removereservation extends controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $id = $_GET['id'];

        $order = $this->model->query("delete FROM beauty_schema.vreservations WHERE id = ?", array($id));


        header("location:index.php?controller=reservations");
    }
}
?>