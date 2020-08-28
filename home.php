<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>SQRFLIX - Home</title>
</head>
<body>
  <div class="myTestDiv">
    <?php echo '<p>' . $_SESSION['user'] . '</p>'; ?>
  </div>
    <header class="main-header">
        <img class="logo-small" src="assets/pictures/sqrflix-logo-small.png" alt="SQRFLIX Logo">
        <div class="w3-content w3-section">
          <img class="header-picture w3-animate-fading" src="assets/pictures/shining-long.png" alt="The Shining">
          <img class="header-picture w3-animate-fading" src="assets/pictures/gravity-long.png" alt="The Shining">
          <img class="header-picture w3-animate-fading" src="assets/pictures/pharao-long.png" alt="The Shining">
          <img class="header-picture w3-animate-fading" src="assets/pictures/music-long.png" alt="The Shining">
          <img class="header-picture w3-animate-fading" src="assets/pictures/city-long.png" alt="The Shining">
        </div>
    </header>



<!--NEW SLIDESHOW CATEGORY - SCI-FI-->
    <div class="category-section-homepage" >
        <h5 class="category-title-homepage" ><a href="category.php?type=sci-fi">Sci-Fi</a></h5>
        <div class="slideshow-container">
        
            <div class="mySlides fade">    
              <a href="#" ><img class="slideshow-img" src="assets/pictures/movie_thumbnails/photo1.png" style="width:23.7%"></a>
              <a href="#" ><img class="slideshow-img" src="assets/pictures/movie_thumbnails/photo2.png" style="width:23.7%"></a>
              <a href="#" ><img class="slideshow-img" src="assets/pictures/movie_thumbnails/photo3.png" style="width:23.7%"></a>
              <a href="#" ><img class="slideshow-img" src="assets/pictures/movie_thumbnails/photo4.png" style="width:23.7%"></a>  
            </div>
            
            <div class="mySlides fade"> 
              <a href="#" ><img class="slideshow-img" src="assets/pictures/movie_thumbnails/photo5.png" style="width:23.7%"></a>
              <a href="#" ><img class="slideshow-img" src="assets/pictures/movie_thumbnails/photo6.png" style="width:23.7%"></a> 
              <a href="#" ><img class="slideshow-img" src="assets/pictures/movie_thumbnails/photo7.png" style="width:23.7%"></a>
              <a href="#" ><img class="slideshow-img" src="assets/pictures/movie_thumbnails/photo8.png" style="width:23.7%"></a>
                 
            </div>

            <div class="mySlides fade">
              <a href="#" ><img class="slideshow-img" src="assets/pictures/movie_thumbnails/photo9.png" style="width:23.7%"></a>
              <a href="#" ><img class="slideshow-img" src="assets/pictures/movie_thumbnails/photo10.png" style="width:23.7%"></a>
              <a href="#" ><img class="slideshow-img" src="assets/pictures/movie_thumbnails/photo11.png" style="width:23.7%"></a>
              <a href="#" ><img class="slideshow-img" src="assets/pictures/movie_thumbnails/photo12.png" style="width:23.7%"></a>  
            </div>

            
            
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            
            </div>
        
    </div>


    
<!--NEW SLIDESHOW CATEGORY - HORROR-->
    <div class="category-section-homepage" >
        <h5 class="category-title-homepage" ><a href="category.php">Horror</a></h5>
        <div class="slideshow-container">
        
            <div class="mySlides1 fade">    
            <img src="assets/pictures/movie_thumbnails/photo13.png" style="width:23.7%">
            <img src="assets/pictures/movie_thumbnails/photo14.png" style="width:23.7%">
            <img src="assets/pictures/movie_thumbnails/photo15.png" style="width:23.7%">
            <img src="assets/pictures/movie_thumbnails/photo16.png" style="width:23.7%">  
            </div>
            
            <div class="mySlides1 fade"> 
                <img src="assets/pictures/movie_thumbnails/photo17.png" style="width:23.7%">
                <img src="assets/pictures/movie_thumbnails/photo18.png" style="width:23.7%"> 
                <img src="assets/pictures/movie_thumbnails/photo19.png" style="width:23.7%">
                <img src="assets/pictures/movie_thumbnails/photo20.png" style="width:23.7%">
                
            </div>

            <div class="mySlides1 fade">
                <img src="assets/pictures/movie_thumbnails/photo21.png" style="width:23.7%">
                <img src="assets/pictures/movie_thumbnails/photo22.png" style="width:23.7%">
                <img src="assets/pictures/movie_thumbnails/photo23.png" style="width:23.7%">
                <img src="assets/pictures/movie_thumbnails/photo24.png" style="width:23.7%">  
            </div>           
            
            <a class="prev" onclick="plusSlides1(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides1(1)">&#10095;</a>
            
            </div>
        
    </div>
    
<!--NEW SLIDESHOW CATEGORY - COMEDY-->
<div class="category-section-homepage" >
    <h5 class="category-title-homepage" ><a href="#">Comedy</a></h5>
    <div class="slideshow-container">
    
        <div class="mySlides2 fade">    
        <img src="assets/pictures/movie_thumbnails/photo25.png" style="width:23.7%">
        <img src="assets/pictures/movie_thumbnails/photo26.png" style="width:23.7%">
        <img src="assets/pictures/movie_thumbnails/photo27.png" style="width:23.7%">
        <img src="assets/pictures/movie_thumbnails/photo28.png" style="width:23.7%">  
        </div>
        
        <div class="mySlides2 fade"> 
            <img src="assets/pictures/movie_thumbnails/photo29.png" style="width:23.7%">
            <img src="assets/pictures/movie_thumbnails/photo30.png" style="width:23.7%"> 
            <img src="assets/pictures/movie_thumbnails/photo31.png" style="width:23.7%">
            <img src="assets/pictures/movie_thumbnails/photo32.png" style="width:23.7%">
            
        </div>

        <div class="mySlides2 fade">
            <img src="assets/pictures/movie_thumbnails/photo33.png" style="width:23.7%">
            <img src="assets/pictures/movie_thumbnails/photo34.png" style="width:23.7%">
            <img src="assets/pictures/movie_thumbnails/photo35.png" style="width:23.7%">
            <img src="assets/pictures/movie_thumbnails/photo36.png" style="width:23.7%">  
        </div>

        
        
        <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides2(1)">&#10095;</a>
        
        </div>
    
</div>


<!--NEW SLIDESHOW CATEGORY - MUSIC-->
<div class="category-section-homepage" >
    <h5 class="category-title-homepage" ><a href="#">Music</a></h5>
    <div class="slideshow-container">
    
        <div class="mySlides3 fade">    
        <img src="assets/pictures/movie_thumbnails/photo37.png" style="width:23.7%">
        <img src="assets/pictures/movie_thumbnails/photo38.png" style="width:23.7%">
        <img src="assets/pictures/movie_thumbnails/photo39.png" style="width:23.7%">
        <img src="assets/pictures/movie_thumbnails/photo40.png" style="width:23.7%">  
        </div>
        
        <div class="mySlides3 fade"> 
            <img src="assets/pictures/movie_thumbnails/photo41.png" style="width:23.7%">
            <img src="assets/pictures/movie_thumbnails/photo42.png" style="width:23.7%"> 
            <img src="assets/pictures/movie_thumbnails/photo43.png" style="width:23.7%">
            <img src="assets/pictures/movie_thumbnails/photo44.png" style="width:23.7%">
            
        </div>

        <div class="mySlides3 fade">
            <img src="assets/pictures/movie_thumbnails/photo45.png" style="width:23.7%">
            <img src="assets/pictures/movie_thumbnails/photo46.png" style="width:23.7%">
            <img src="assets/pictures/movie_thumbnails/photo47.png" style="width:23.7%">
            <img src="assets/pictures/movie_thumbnails/photo48.png" style="width:23.7%">  
        </div>

        
        
        <a class="prev" onclick="plusSlides3(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides3(1)">&#10095;</a>
        
        </div>
    
</div>

<!--NEW SLIDESHOW CATEGORY - KIDS-->
<div class="category-section-homepage" >
    <h5 class="category-title-homepage" ><a href="#">Kids</a></h5>
    <div class="slideshow-container">
    
        <div class="mySlides4 fade">    
        <img src="assets/pictures/movie_thumbnails/photo49.png" style="width:23.7%">
        <img src="assets/pictures/movie_thumbnails/photo50.png" style="width:23.7%">
        <img src="assets/pictures/movie_thumbnails/photo51.png" style="width:23.7%">
        <img src="assets/pictures/movie_thumbnails/photo52.png" style="width:23.7%">  
        </div>
        
        <div class="mySlides4 fade"> 
            <img src="assets/pictures/movie_thumbnails/photo53.png" style="width:23.7%">
            <img src="assets/pictures/movie_thumbnails/photo54.png" style="width:23.7%"> 
            <img src="assets/pictures/movie_thumbnails/photo55.png" style="width:23.7%">
            <img src="assets/pictures/movie_thumbnails/photo56.png" style="width:23.7%">
            
        </div>

        <div class="mySlides4 fade">
            <img src="assets/pictures/movie_thumbnails/photo57.png" style="width:23.7%">
            <img src="assets/pictures/movie_thumbnails/photo58.png" style="width:23.7%">
            <img src="assets/pictures/movie_thumbnails/photo59.png" style="width:23.7%">
            <img src="assets/pictures/movie_thumbnails/photo60.png" style="width:23.7%">  
        </div>

        
        
        <a class="prev" onclick="plusSlides4(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides4(1)">&#10095;</a>
        
        </div>
    
</div>
<!-- Navbar -->

<?php include("navbar.php"); ?>

<!-- CSS - SLIDES-->
    <style>
        * {box-sizing: border-box}
        
        .mySlides, .mySlides1, .mySlides2, .mySlides3, .mySlides4 {
          display: none;
          margin: 0;
          width: 100%;

        }
        img {vertical-align: middle;}
        
        /* Slideshow container */
        .slideshow-container {
          width: 100%;
          max-width: 100%;
          position: relative;
          margin: auto;
        }
        
        /* Next & previous buttons */
        .prev, .next {
          cursor: pointer;
          position: absolute;
          top: 50%;
          width: auto;
          padding: 16px;
          margin-top: -22px;
          color: white;
          font-weight: bold;
          font-size: 18px;
          transition: 0.6s ease;
          border-radius: 0 3px 3px 0;
          user-select: none;
        }
        
        /* Position the "next button" to the right */
        .next {
          right: 3.5%;
          border-radius: 3px 0 0 3px;
        }
        
        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
          background-color: rgba(0,0,0,0.8);
        }
        
        /* Fading animation */
        .fade {
          -webkit-animation-name: fade;
          -webkit-animation-duration: 1.5s;
          animation-name: fade;
          animation-duration: 1.5s;
        }


        @-webkit-keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }
        
        @keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }
        
        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
          .prev, .next {font-size: 11px}
        }


        
        /*header fading animation */
        .w3-animate-fading{animation:fading 11s infinite}
        @keyframes fading{0%{opacity:0.1}20%{opacity:1}60%{opacity:1}100%{opacity:0}}

        .slideshow-img:hover {
            margin: 0 20px;
            transform: scale(1.1);
               
        }

        </style>
        

<!--JAVASCRIPT - SLIDES - SCIFI-->  
        <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          slides[slideIndex-1].style.display = "block";  
        }
        </script>



<!--JAVASCRIPT - SLIDES - HORROR-->  
    <script>
    var slideIndex = 1;
    showSlides1(slideIndex);
    
    function plusSlides1(n) {
      showSlides1(slideIndex += n);
    }
    
    function currentSlide1(n) {
      showSlides1(slideIndex = n);
    }
    
    function showSlides1(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides1");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      slides[slideIndex-1].style.display = "block";  
    }
    </script>



<!--JAVASCRIPT - SLIDES - COMEDY-->  
<script>
    var slideIndex = 1;
    showSlides2(slideIndex);
    
    function plusSlides2(n) {
      showSlides2(slideIndex += n);
    }
    
    function currentSlide2(n) {
      showSlides2(slideIndex = n);
    }
    
    function showSlides2(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides2");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      slides[slideIndex-1].style.display = "block";  
    }
    </script>

<!--JAVASCRIPT - SLIDES - MUSIC-->  
<script>
    var slideIndex = 1;
    showSlides3(slideIndex);
    
    function plusSlides3(n) {
      showSlides3(slideIndex += n);
    }
    
    function currentSlide3(n) {
      showSlides3(slideIndex = n);
    }
    
    function showSlides3(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides3");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      slides[slideIndex-1].style.display = "block";  
    }
    </script>



<!--JAVASCRIPT - SLIDES - KIDS-->  
<script>
    var slideIndex4 = 1;
    showSlides4(slideIndex4);
    
    function plusSlides4(n) {
      showSlides4(slideIndex4 += n);
    }
    
    function currentSlide4(n) {
      showSlides4(slideIndex4 = n);
    }
    
    function showSlides4(n) {
      var i;
      var slides4 = document.getElementsByClassName("mySlides4");
      if (n > slides4.length) {slideIndex4 = 1}    
      if (n < 1) {slideIndex4 = slides4.length}
      for (i = 0; i < slides4.length; i++) {
          slides4[i].style.display = "none";  
      }
      slides4[slideIndex4-1].style.display = "block";  
    }
    </script>  
    
    


<!--JAVASCRIPT ANIMATION SLIDESHOW HEADER-->

    <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("header-picture");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 8000); // Change image every 4 seconds
}
</script>
</body>
</html>