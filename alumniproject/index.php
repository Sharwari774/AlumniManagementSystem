<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alumni Management System</title>

	<!-- BOOTSTRAP CSS CDN -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


	<link href="style.css" rel="stylesheet">
  <style>
    a{
      text-decoration: none;
    }
  </style>

</head>
<body>


<!-- NAVIGATION STARTS HERE -->
<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#" id="logo"><span>College</span> Alumni System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>


  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Events</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Posted Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Alumni</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Admin</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-info .text-dark my-2 my-sm-0" type="submit"> <a href="register.php">Alumni Registration</a></button>&nbsp;
      <button class="btn btn-outline-info .text-dark my-2 my-sm-0" type="submit"> <a href="login.php">Alumni Login</a></button>
    </form>
  </div>
</nav>
<!-- END OF NAVIGATION CODE -->








<!-- START CAROUSEL SLIDE SECTION -->
<div class="container-fluid" id="slider">

  <h6 class="display-4"> Welcome To official Alumni Network </h6>

  <p id="para"> College Alumni System </p>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/s7.png" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="images/s2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="images/s3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="images/s4.jpg" alt="Fourth slide">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>

  

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<br><br>
<!-- END OF CAROUSEL SLIDE SECTION -->





<!-- START PACKAGES SECTION -->
<div class="packages" id="packages">
  <div class="container">
    <div class="main-txt" id="main-txt">
      <h1><span>Upcoming</span> events</h1>
      <hr>
    </div>
    <div class="row" id="row">
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="images/img5.jpg">
          <div class="card-body">
            <h3> Private Cinema </h3>
            <i class="bi bi-clock"> 2024-01-05T12:00</i>
            <p> Everyone loves going to the cinema, and what bette. </p>      
          </div>
        </div>
      </div>


      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="images/img1.jpg">
          <div class="card-body">
            <h3> Alumni Gateway </h3>
            <i class="bi bi-clock"> 2023-12-16T21:37</i>
            <p> This takes a bit more planning and resources. </p>           
          </div>
        </div>
      </div>



      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="images/img2.jpg">
          <div class="card-body">
            <h3> Friendly Tournaments </h3>
            <i class="bi bi-clock"> 2023-01-05T09:30</i>
            <p> Friendly sports tournments are always a good idea. </p>           
          </div>
        </div>
      </div>
    </div>



    <div class="row" id="row">
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
         <img src="images/img4.jpg">
          <div class="card-body">
            <h3> Scavenger Hunt </h3>
            <i class="bi bi-clock"> 2023-11-30T09:35</i>
            <p> Alumni events are often focussed on term building. </p>          
          </div>
        </div>
      </div>


      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="images/img8.jpg">
          <div class="card-body">
            <h3> CollegeFest </h3>
            <i class="bi bi-clock"> 2023-12-28T22:30</i>
            <p> CollegeFest presents an unmatched consumer offerin. </p>          
          </div>
        </div>
      </div>



      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="images/img7.jpg">
          <div class="card-body">
            <h3> College Canteen </h3>
            <i class="bi bi-clock"> 2024-01-05T12:00</i>
            <p> Everyone loves going to the food, and what better. </p>
            
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br>
<!-- END OF PACKAGES SECTION -->



<footer class="footer bg-dark text-light text-center py-4">
  <div class="container">
  <div class="row mt-5">
    <div class="col-md-4">
      <h4> College <span style="color: #4dd1e3;"><b>Alumni S/Y</b></span> </h4>
 <i class="bi bi-geo-alt-fill"></i> Stay connected with your alma mater. Join our vibrant community of alumni today!<br>

  <i class="bi bi-facebook"></i> 
  <i class="bi bi-google"></i>
  <i class="bi bi-twitter"></i>
  <i class="bi bi-instagram"></i><br>
 
    </div>

    <div class="col-md-4">
      <h5> Contact Us </h5>
      <ul style="list-style-type: none; padding: 0;">
        <li><i class="bi bi-envelope-at-fill"></i> Email:Info@gmail.com </li>
        <li><i class="bi bi-telephone-fill"></i> Phone:+91-9028794461 </li>
        <li> 123 Main Street,
Anytown, USA,
12345 </li>
       
      </ul>

    </div>

    <div class="col-md-4">
      <h4>Quick Links </h4>
      <ul style="list-style-type: none; padding: 0;">
        <li>Home </li>
        <li> About </li>
        <li>Contact </li>
         <li> Alumni </li>
          <li> Admin</li>
       </ul>

    </div>

    
  </div><br><br>
  <div class="social-links">
    <p class="text-muted"> College Alumni system</p>
  </div>
  <br>
</footer>
    </div>
  </footer>









<!-- BOOTSTRAP JQUERY CDN -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>