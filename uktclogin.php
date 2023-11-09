
    <title>Be part of our community - UktcBeautySalon</title>
    <link rel="stylesheet" type="text/css" href="login.css?v=<?= time() ?>">

    <style>
        p{
            text-align: center;
        }
     
       
    </style>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
   
                  


<html>
<head>
<style>
  a{
    text-decoration:none;
transition: color 0.5s ease;
color: black;

}


</style>
<body>

	<form method="post">
	
	</form>

 <?php 
 include("navbar.html");
 ?>

<div class="row">
    <div class="col">
<form method="post">
  <!-- Email input -->
  <div class="form-container">
 <br/>


 <div class="container">
        <div id="block">
<div class='row'>
<div class='col-4'></div>
	<div class='col-6'>
  <section>
    <label>Имейл: </label><br>
    <input #username type="text" name="email" class="form-control" >
    <br />
    <br />
    <label>Парола: </label><br>
    <input #password type="password" name="password" class="form-control">
    <br />
    <br />
    <button type="submit" name="submit" value="1" role="button" 
    (click)="login($event, username, password)"
     class="btn btn-info w100">Изпрати</button > <br>
     <div class="caution">

  </section>
  </div>
  </div>
  </div>
  </div>

</div>

  </div>

  
     
    </div>
   

  </div>
  
  <!-- Register buttons -->
  <div class="text-center">
   <div class = "row-2 ">
    <a href="http://127.0.0.1/kursova%20rabota/btylog.php">Нямате профил? Направете вашата регистрация тук</a>
    </div>
</div>




    <div class= "row">
    <div class="col-12">
  <!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">

  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <div class="text-center">
      <span>Get connected with us on social networks:</span>
    </div>

   
  </section>

  <section class="">
    <div class="container text-center text-md-start mt-5">
    
      <div class="row mt-3">
        
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>UktcBeautySalon
          </h6>
          <p>
           
          </p>
        </div>
      
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
       
          <h6 class="text-uppercase fw-bold mb-4">
            Полезни линкове
          </h6>
          <p>
            <a href="guestbooking.html" class="text-reset">Часове и ценова листа</a>
          </p>
          <p>
            <a href="aboutus.html" class="text-reset">Контакти</a>
          </p>
        
          <p>
            <a href="#!" class="text-reset">Имате нужда от помощ?</a>
          </p>
        </div>
   


        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
     
          <h6 class="text-uppercase fw-bold mb-4">За контакти</h6>
          <p><i class=""></i> Перуша №4, гр.Правец, 2161</p>
          <p>
            <i class=""></i>
            19507@uktc-bg.com<br>
           
          </p>
         
          <p><i class=""></i> + 359 89 507 0651</p>
        </div>
       
      </div>
     
    </div>
  </section>
 
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    All rights reversed © 2023
    <a class="text-reset fw-bold" href="#">uktcstudents.bg</a>
  </div>
 
</footer>


</div>
  </div>
  </div>
</form>


</body>
</html>