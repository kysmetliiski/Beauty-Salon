<?php
class schedule extends Controller
{
	function __construct()
    {
        
        parent::__construct();
    }
    public function index()
    {

      $user = $this->model->fetch("SELECT * FROM uktclog WHERE email = ? AND password = ?",[ $this->email, $this->password ]);


$date = @$_GET['date'];

if ( !$date )
    $date = date("Y-m-d");


$stmt = $connection->prepare("
    SELECT vreservations.*, uktclog.name, uktclog.lname
    FROM vreservations 
    LEFT JOIN uktclog ON uktclog.id = vreservations.user_id
    WHERE datachas=?
");
$stmt->execute([$date]); 
$data = $stmt->fetchAll();

$nextdate = date('Y-m-d', strtotime('+1 day', strtotime($date)));
$prevdate = date('Y-m-d', strtotime('-1 day', strtotime($date)));


$data = $this->model->fetchAll("
SELECT vreservations.*, uktclog.name, uktclog.lname
FROM vreservations 
LEFT JOIN uktclog ON uktclog.id = vreservations.user_id
WHERE datachas=?
",[$date]);









   

$i = 1;
foreach( $data as $item ) {


   
    $i++;
}

   
  

$this->view->render("schedule.html");
	}
}
?>
