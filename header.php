<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>school website</title>
    <link rel="icon" sizes="any" mask="" href="img/logo.png">
     <!-- Slider CSS CDN -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="owlsilder.css">

    <!-- Font Awsome CDn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Bootstarp Link up -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- CSS link Up -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Start Logo -->
<div class="logosection bg-primary">
    <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-4 col-12 text-center">
                  <img src="img/logo.png" alt="" class="img-fluid mt-2 mb-2">
            </div>
            <div class="col-lg-8 col-md-8 col-12 text-light">
                  <h1 class="text-center mt-5">Chaklahat Technical And BM College</h1>
                  <h4 class="text-center">Chaklahat Road, Panchagarh, Rangpur</h4>
            </div>
         </div>
    </div>
 </div>
    <!-- End Logo -->

    <!-- Start Navbar -->
    <div class="navbar bg-danger text-center">
        <div class="container">
        <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class=".container-fluid text-center">
                <div class="col-12">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active me-4 arif text-info" aria-current="page" href="schoolwebsite.php">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle me-4" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      About
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="about.php">About School</a></li>
                      <li><a class="dropdown-item" href="principle.php">Principal Msg</a></li>
                    </ul>
                  </li>


                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle me-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Teachers
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="teachers.php">School Teachers</a></li>
                      <li><a class="dropdown-item" href="teachers.php">College Teachers</a></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle me-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Academic
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Programs</a></li>
                      <li><a class="dropdown-item" href="#">School Result</a></li>
                      <li><a class="dropdown-item" href="#">College Result</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown me-4">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Gallery
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="photogallery.php">Photo Gallery</a></li>
                      <li><a class="dropdown-item" href="vediogallery.php">Vidio Gallery</a></li>
                    </ul>
                  </li>

                  <li class="nav-item me-4">
                    <a class="nav-link" href="admission.php">Admission</a>
                  </li>
                  <li class="nav-item me-4">
                    <a class="nav-link" href="notice.php">Notice</a>
                  </li>
                  
                  <li class="nav-item dropdown me-4">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Login
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="login.php">Student Login</a></li>
                      <li><a class="dropdown-item" href="login.php">Admin Login</a></li>
                    </ul>
                  </li>
                </ul>
            </div>
              </div>
            </div>
          </nav>
        </div>
    </div>
    </div>
    <!-- End Navbar -->

    <!-- Notice Start -->
    <div class="notice bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-3 bg-primary">
                    <h3 class="text-light text-center">Notice</h3>
                </div>
                <div class="col-md-10 col-9">
                    <marquee behavior="scroll" direction="left" scrollamount="5" style=" font-size:20px;font-weight: bold;">
                        <a class="text-white" href="notice.php">
                            <p class="text-dark mt-3 icon"><spen><i class="bi bi-arrow-right-circle-fill text-primary"></i> ৫ম থেকে ৯ম শ্রেণির ছাত্রীদের জন্য জরুরী নির্দেশনা</spen><spen><i class="bi bi-arrow-right-circle-fill text-primary"></i> আন্তঃক্যান্ট টেবিল টেনিস প্রতিযোগিতা ২০২৩ বাছাই সংক্রান্ত নোটিশ</spen>  <spen><i class="bi bi-arrow-right-circle-fill text-primary"></i> ৫ম থেকে ৯ম শ্রেণির ছাত্রীদের জন্য জরুরী নির্দেশনা</spen> <spen><i class="bi bi-arrow-right-circle-fill text-primary"></i> Mahadi Hasan Miraj</spen> <spen><i class="bi bi-arrow-right-circle-fill text-primary"></i> আন্তঃক্যান্ট টেবিল টেনিস প্রতিযোগিতা ২০২৩ বাছাই সংক্রান্ত নোটিশ</spen></p> 
                        </a>
                    </marquee>
                </div>
            </div>
        </div>
    </div>
    <!-- Notice End -->