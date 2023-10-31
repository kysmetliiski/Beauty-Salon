<?php
$servername = "127.0.0.1";
$username = "root";
$password = "veselin7";
$database = "beauty_schema";

try {
	$connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// echo "Connected successfully";
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}



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

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"></th>
 <a href="">





    </a>
      <th scope="col"> <a href='schedule.php?date=<?= $prevdate ?>'><--</a>  <?= $date ?>  <a href='schedule.php?date=<?= $nextdate ?>'>--></a></th>
      <th scope="col">Name</th>
      <th scope="col">Reservation</th>
    </tr>
  </thead>
  <tbody>

   
<?php 
$i = 1;
foreach( $data as $item ) {
?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><?= $item['id'] ?></td>
      <td><?= $item['name'] ?> <?= $item['lname'] ?> </td>
      <td><?= $item['chas'] ?></td>
    </tr>
<?php
    $i++;
}
?>
   
  </tbody>
</table>


</body>
</html>