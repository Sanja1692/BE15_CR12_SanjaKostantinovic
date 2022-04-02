<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <!-- Bootstrap CDN -->
    <!-- css link of Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap icon link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- Gooogle font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Happy+Monkey&family=Lobster+Two&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter&family=Great+Vibes&family=Happy+Monkey&family=Kalam:wght@700&family=Lobster+Two&display=swap" rel="stylesheet">

    <!-- Fontawesome link-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Animation CDN -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
   <!-- Link Swiper's CSS -->
   <link
   rel="stylesheet"
   href="https://unpkg.com/swiper/swiper-bundle.min.css"
 />
 <!-- Cloudflare CDN -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/imagehover.css/2.0.0/css/imagehover.min.css">
  <!-- AniCollection.css library -->
  <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <!-- css link -->
    <link rel="stylesheet" href="style.css">
    <title>Mount Everest</title>
</head>
<body>
    

<!-- nav bar -->

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="pictures/logo.jpg" alt="Travel agency logo" class="logo-image"></a>
      <button class="navbar-toggler bg-info" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0  animate__animated animate__bounce animate__delay-1s animate__slower	3s">
          <li class="nav-item">
            <a class="nav-link active text-info" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-info" href="#">About Us</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-info" href="index.php">Index</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-info" href="displayall.php">API Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-info" href="#">Kontakt</a>
          </li>
        
         
        </ul>
       
      </div>
    </div>
  </nav>
    <!-- Hero image -->
<div class="bg-image">
      <div class="hero-img">
         <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img  src="pictures/beograd.jpg" />
          </div>
          <div class="swiper-slide">
            <img  src="pictures/bratislava.jpg" />
          </div>
          <div class="swiper-slide">
            <img  src="pictures/budapest.jpg" />
          </div>
          <div class="swiper-slide">
            <img  src="pictures/moskow.jpg" />
          </div>
          <div class="swiper-slide">
            <img  src="pictures/paris.jpg" />
          </div>
          <div class="swiper-slide">
            <img  src="pictures/london.jpg" />
          </div>
          <div class="swiper-slide">
            <img  src="pictures/madrid.jpg" />
          </div>
          <div class="swiper-slide">
            <img  src="pictures/praha.jpg" />
          </div>
          <div class="swiper-slide">
            <img  src="pictures/zurich.jpg" />
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      </div>
</div>

<!-- Destinationss container -->

<div class="container-fluid animals">
    <div class="row" id="result">
        <h2 class="title">Welcome to travel agency Mount Everest</h2>
    </div>
</div>
   <!-- Footer -->

   <footer class="footer">
    
    <div class="social-media">

   
        <span class="icons"><a href="https://www.facebook.com" ><i class="bi bi-facebook"></i></a></span>
        <span class="icons"><a href="https://www.instagram.com" ><i class="bi bi-twitter"></i></a></span>
        <span class="icons"><a href="https://www.google.com" ><i class="bi bi-google"></i></a></span>
        <span class="icons"><a href="https://www.instagram.com" ><i class="bi bi-instagram"></i></a></span>
        <span class="icons"><a href="https://www.linkin.com" ><i class="bi bi-linkedin"></i></a></span>
        <span class="icons"><a href="https://www.github.com" ><i class="bi bi-github"></i></a></span>
       
     </div>
 
     <div class="copy-right-container">
 
         <p id="copy-right"> &copy; 2022 Copyright Sanja Kostantinovic</p>
         
     </div>
 
   </footer>
  

       
  
    
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Bootstrap CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="script.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
</body>
</html>