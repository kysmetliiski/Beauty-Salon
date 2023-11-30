<?php 

class schedule extends Controller
{

  
    function __construct()
    {
        
        parent::__construct();
    }
    public function index()
    {
  
        $date = @$_GET['date'];
        if ( !$date )
            $date = date("Y-m-d");
        $data = $this->model->fetchAll("
            SELECT vreservations.*, uktclog.name, uktclog.lname
            FROM vreservations 
            LEFT JOIN uktclog ON uktclog.id = vreservations.user_id
            WHERE datachas=?
        ", [$date]);




        $nextdate = date('Y-m-d', strtotime('+1 day', strtotime($date)));
        $prevdate = date('Y-m-d', strtotime('-1 day', strtotime($date)));

       
       
        $params = array
        (
            "nextdate" => $nextdate,
            "prevdate" => $prevdate,
            "data" => $data,
            "date" => $date,
        );

        $this->view->render("schedule.html", $params);
    }
}

               




?>  