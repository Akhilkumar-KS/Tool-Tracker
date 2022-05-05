<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.all.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <title>Tool Tracker Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>
  
    
  
  <!-- <nav class="navbar navbar-expand-sm navbar-dark bg-warning">
    <div class="container-fluid">
      <div class="navbar-brand" href="#">Tool Tracker</div> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=index.html>Home</a>
                </li>
               "<li class='nav-item'>
                    <a class='nav-link' href= Addtoolkit.php>Add Toolkit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=Edittoolkit.html>Edit Toolkit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=Crosscheck.html>Cross check the Toolkit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=Detecttool.html>Tool Detector</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=Findtool.html>Find Tool</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="signout.php">Signout</a>
                </li>
            </ul>
           
        </div>

    </div>
</nav> -->
<?php
include "navbar.php"
?>

  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container" data-aos="fade-in">
      <h1>Welcome to Tool Tracker</h1>
      
      <div class="d-flex align-items-center">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
  </section>

  <main id="main">

    
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-xl-4 col-lg-5" data-aos="fade-up">
            <div class="content">
              <h3>Why Choose Tool Tracker</h3>
              <p>
                The Tool Tracker recognizes absence of tools in a toolkit. A problem faced by daily wage workers is losing of their valuable tools at work site. This happens in the rush to complete the task fast . Tool tracker is a best software solution for the above mentioned problem.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7 d-flex">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fas fa-search"></i>
                    <h4>Detect Tool</h4>
                    <p>By using this option you can detect any tools.</p><br><br><br><br>
                    <a href="Detecttool.html" class="btn btn-secondary" role="button">Click here</a>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fas fa-search"></i>
                    <h4>Find Tool</h4>
                    <p>By using this option you find any specified tool in the tool kit.</p><br><br><br>
                    <a href="findtool.html" class="btn btn-secondary" role="button">Click here</a>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fas fa-search"></i>
                    <h4>Cross check the tool kit</h4>
                    <p>By using this option you can cross check your tool kit before going to work and also while returning from the work.</p>
                    <a href="Crosscheck.html" class="btn btn-secondary" role="button">Click here</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    
  
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  
  <script src="assets/js/main.js"></script>

</body>

</html>