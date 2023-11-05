
<form method = "post" action = "veselin.php">
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
   
    $user_id     = @$_SESSION['user']['id'];


function _p( $text )
{
  echo "<pre>";
    print_r($_POST);

}


  
      $new_date = date("Y-m-d", strtotime( $datachas ) );

      // INSERT заявка към базата, с която се записват полетата

      $sql = "INSERT INTO vreservations( user_id,  chas, datachas) VALUES (?,?,?)";
      $connection->prepare($sql)->execute([ $user_id,  $chas, $new_date]);




  }
 
   ?>




            <link rel="stylesheet" type="text/css" href="veselin.css?v=18">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rezerviraite chas vesko</title>
   <link rel="stylesheet" href= https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css>
   <link rel="stylesheet" href= https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css >
   <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css>

   <script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src=" https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
   <script src=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  
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

<div class="row">
<div class = col-6>
<form method = "post">

            <div class="row form-group">
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

   
    <label for="date" class="col-sm-1 col-form-label">Дата</label>

    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
   </div>
</div>



   Резервирайте своя час : 
    <select name="chas"> 
    <option value="select">Изберете:</option>
      
     

                            <?php
                            for($i=9; $i<=22; $i++){
                              $sql = "SELECT * FROM vreservations WHERE chas='$i:00'";

                              $chas = $connection->query("SELECT * FROM vreservations WHERE chas='$i:00'")->fetch(); 

                            #print_r('00'.$chas);

                              if (!$chas) {
                              ?>
                                    <option value="<?=$i?>:00" id="12" name="reservation"><?=$i?>:00</option>
                                    <?php }} ?>
       
        
     <input type="submit" name="submit" value="Изпрати"><br>
    </select>
    </form>
    


    <div class="col-12">
  <!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>UktcBeautySalon
          </h6>
          <p>
           
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        
       
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Полезни линкове
          </h6>
          <p>
            <a href="file:///Users/macbookpro/Documents/uktcproekt/booking.html" class="text-reset">Часове и ценова листа</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Контакти</a>
          </p>
        
          <p>
            <a href="#!" class="text-reset">Имате нужда от помощ?</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">За контакти</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i> Перуша №4, гр.Правец, 2161</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            19507@uktc-bg.com<br>
         
          </p>
         
          <p><i class="fas fa-print me-3 text-secondary"></i> + 359 89 507 0651</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    All rights reversed © 2023
    <a class="text-reset fw-bold" href="#">uktcstudents.bg</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</div>

</body>
</html>


