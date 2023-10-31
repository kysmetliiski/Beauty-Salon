<form method = "post" action = "womanprocedures.php">
    <?php
    session_start();

    
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
  ?>
  <?php

  if ( isset( $_POST['submit'] ) ) {
  
      // записване на данните от полетата в променливи за по-удобно
  
   
     $chas = $_POST['chas'];
     $datachas = $_POST['datachas'];      
   
    $user_id     = $_SESSION['user']['id'];


  


function _p( $text )
{
  echo "<pre>";
    print_r($_POST);

}


  
      $new_date = date("Y-m-d", strtotime( $datachas ) );

      // INSERT заявка към базата, с която се записват полетата

      $sql = "INSERT INTO areservations( user_id,  chas, datachas) VALUES (?,?,?)";
      $connection->prepare($sql)->execute([ $user_id,  $chas, $new_date]);




  }
 
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Резервирайте час</title>
    <link rel="stylesheet" href= https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css>
   <link rel="stylesheet" href= https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css >
   <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css>
   <script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src=" https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
   <script src=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="snimki/logo.png" class="rounded float-left" alt="uktclogo" width="40" height="40"style="vertical-align:middle;margin:6px 0px">
        <a class="navbar-brand" href="UktcBeautySalon.html">  Добре дошли</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="aboutus.html">За нас<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="booking.html">Резервирай час</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="http://127.0.0.1/kursova%20rabota/blog.html">Блог</a>
            </li>
          </ul>
        
        </div>
      </nav>
</body>
</html>



<div class="row">
<div class = col-6>
<form method = "post">

            <div class="row form-group">
                <label for="date" class="col-sm-1 col-form-label">Дата</label>
                <div class="col-sm-4">
                    <div class="input-group date" id="datepicker">
                        <input type="text" name="datachas" class="form-control">
                        <span class="input-group-append">
                            <span class="input-group-text bg-white d-block">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
      
    </section>

    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
  
</div>




   Резервирайте своя час : 
    <select name="chas"> 
       
    
    
        <option value="select">Изберете:</option>




<?php
for($i=9; $i<=22; $i++){
  $sql = "SELECT * FROM areservations WHERE chas='$i:00'";

  $chas = $connection->query("SELECT * FROM areservations WHERE chas='$i:00'")->fetch(); 
  
#print_r('00'.$chas);

  if (!$chas) {
  ?>
        <option value="<?=$i?>:00" id="12" name="reservation"><?=$i?>:00</option>
        <?php }} ?>
       
        
     <input type="submit" name="submit" value="Изпрати"><br>
    </select>
    </form>
</body>
</html>


