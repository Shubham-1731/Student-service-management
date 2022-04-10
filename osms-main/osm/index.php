<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/all.min.css">
  <script src="https://kit.fontawesome.com/73ea072c35.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,600;0,700;1,100;1,400;1,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/custom.css">
  <title>OMS</title>
 </head>
 <body>


 <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
  <a href="index.php" class="navbar-brand">&nbsp OSM</a>
  <span class="navbar-text">Fast delivery, Efficent service</span>
  <span class="navbar-text"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp</span>
   <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
    <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="myMenu">
    <ul class="navbar-nav pl-5 custom-nav">
       <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
       <li class="nav-item"><a href="#service" class="nav-link">Service</a></li>
       <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
       <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
       <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
       </ul>
   </div>
 </nav>



  <header class="jumbotron back-image" style="background-image: url(images/manblue.png);">
    <div class="heddercollection">
      <div class="hello">
      <h1 class="texty1 text-uppercase text-danger font-weight-bold">Welcome to OSM</h1>
      <p class="texty ">Highly efficient with fast service</p>
      <button class="button button1"><a href="Requester/RequesterLogin.php" class="btn">Login</a></button>
      <button class="button button2"><a href="#registration" class="btn">Sign Up</a></button>
      </div>
      <div class="box"></div>
    
    </div>
    
  </header>




 <div class="container" id="service">
    <div class="jumbotron2">
      <div class="box2">
      <h3 class="texter text-center text-uppercase font-weight-bold">OSM Services</h3>
      <p class="texter2">We are a service provider company with years of experience in the service field to provid a food support in our selected area and channels. Need any help, just file a problem, and we will assing the technician in under 24 hours. We give guarenteee of completing the section work in under 72 hours and holding. With this premium segment of the work, we have a direct connection with all the local administers and holders in order for us to make network communication more flexible and better eligible for more customers in our premium segmetnt. With our sikn in the market we provide the best customer support to the consumer who are in need of help. Our mission is to provide better support to the people wiht the most amount of the section provision in respect to the best quality work that is to be offered in the segment with best technician in the market to provide uss wiht the better opportunity to land a gig to work with you. We hope to be in your service whenever you need us, and we will be there for you no matter what.
       &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp
       &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp
       &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp </p>

      
    </div>
    </div>
  </div>




   <div class="container2 text-center" id="" >

    <h2 class="fontn font-weight-bold text-danger" >OUR SERVICES </h2>

    <div class="row mt-5">
          <div class="col-sm-4 mb-4">
        <a href="#"><i class="fa-solid fa-cog fa-spin fa-5x text-danger" style="--fa-animation-duration: 15s;"></i></a>
        <h4 class="emm mt-4">Full Maintenance</h4>
      </div>

    <div class="col-sm-4 mb-4">
        <a href="#"><i class="fa-solid fa-phone fa-shake fa-5x text-danger"></i></a>
        <h4 class="emm mt-4">24/7 Service</h4>
      </div>
    <div class="col-sm-4 mb-4">
        <a href="#"><i class="fa-solid fa-lightbulb fa-5x text-danger fa-beat-fade" style="--fa-beat-fade-opacity: 0.67; --fa-beat-fade-scale: 1.075;" ></i></a>
        <h4 class="emm mt-4">Electronic Appliances</h4>
      </div>

    </div>
    
   </div>


   <div class="container3 border-bottom " id="registration"><br>
    </div>



  <?php include('userregistration.php') ?>






 <div class="container5">
  <h2 class="uscontact text-center mb-4"id="contact">Contact Us</h2>
  <div class="row">
    <div class="col-md-8">

        <?php include('contactforum.php') ?>


    </div>

    <div class="col-sm-4 text-center">
      <strong>Headquarters:<br></strong>
      OSM pvt Ltd,<br>
      Raipur- 497226<br>
      Phone.no.- 9876543454<br>
      <a href="#" class="what" text-red target="_blank">wwww.osm.com</a><br>
      <br><br>
      <strong>Branch:<br></strong>
      OSM pvt Ltd,<br>
      Bishrampur- 497226<br>
      Phone.no.- 9876543454<br>
      <a href="#" class="what" text-red target="_blank">wwww.osm.com</a><br>

    </div>
  </div>
 </div>








  <footer class="container-fluid bg-dark mt-5 text-white" >
    <div class="container">
      <div class="row py-3">
        <div class="col-md-6">
          <span class="pr-2">Follow Us:</span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fa-brands fa-facebook"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fa-brands fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fa-brands fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fa-solid fa-rss"></i></a>
        </div>
        <div class="col-md-5 text-right">
          <small>Designed by MehulPradhan &copy; 2022</small>

          <small><a class="ml-2" href="Admin/login.php">Admin Login</a></small>
          
        </div>
      </div>
      
    </div>
    
  </footer>







 





 <script src="onlinemanagement/js/jquery.min.js"></script>
 <script src="onlinemanagement/js/popper.min.js"></script>
 <script src="onlinemanagement/js/bootstrap.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="onlinemanagement/js/all.min.js"></script>
 <script src="https://kit.fontawesome.com/73ea072c35.js" crossorigin="anonymous"></script>

</body>
</html>