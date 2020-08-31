<?php 
session_start();
if (isset($_SESSION['user'])) {
/* ----------------------Get Database(sqrflix)--------------------- */
try {
  $DB = new PDO('mysql:host=localhost;dbname=sqrflix;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
  die ('Erreur ' . $e->getMessage());
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/burger_menu.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>SQRFLIX - Home</title>
</head>
<body>
  <div class="myTestDiv">
    <?php echo '<p style="color:red">' . $_SESSION['user'] . '</p>'; ?>
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

<?php 
  $req = $DB->query('SELECT * FROM videos WHERE video_type = \'Sci-Fi\' ORDER BY id');
?>
  <div class="category-section-homepage" >
    <h5 class="category-title-homepage" ><a href="category.php?type=sci-fi">Sci-Fi</a></h5>
      <div class="slideshow-container">
  <?php
      $i=0;
      echo '<div class="mySlides fade">';
      while($data = $req->fetch()) 
      {
        if( $i%4 == 0 && $i != 0)
        { 
          echo '</div>';
          echo '<div class="mySlides fade">';
          echo '<a href="videopage.php?title=' . $data['title'] . '" ><img class="slideshow-img" src="assets/pictures/movie_thumbnails/' . $data['photo'] . '" style="width:23.7%"></a>';
        }
        else
        {
        echo '<a href="videopage.php?title=' . $data['title'] . '" ><img class="slideshow-img" src="assets/pictures/movie_thumbnails/' . $data['photo'] . '" style="width:23.7%"></a>';
        }
        $i++;
      }     
      echo '</div>';
      $req->closeCursor();
  ?>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>        
  </div>

<!--NEW SLIDESHOW CATEGORY - HORROR-->

<?php 
  $req = $DB->query('SELECT * FROM videos WHERE video_type = \'Horror\' ORDER BY id');
?>
  <div class="category-section-homepage" >
    <h5 class="category-title-homepage" ><a href="category.php?type=Horror">Horror</a></h5>
      <div class="slideshow-container">
  <?php
      $i=0;
      echo '<div class="mySlides1 fade">';
      while($data = $req->fetch()) 
      {
        if( $i%4 == 0 && $i != 0)
        { 
          echo '</div>';
          echo '<div class="mySlides1 fade">';
          echo '<a href="videopage.php?title=' . $data['title'] . '" ><img class="slideshow-img" src="assets/pictures/movie_thumbnails/' . $data['photo'] . '" style="width:23.7%"></a>';
        }
        else
        {
        echo '<a href="videopage.php?title=' . $data['title'] . '" ><img class="slideshow-img" src="assets/pictures/movie_thumbnails/' . $data['photo'] . '" style="width:23.7%"></a>';
        }
        $i++;
      }     
      echo '</div>';
      $req->closeCursor();
  ?>
      <a class="prev" onclick="plusSlides1(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides1(1)">&#10095;</a>
    </div>        
  </div>
    
<!--NEW SLIDESHOW CATEGORY - COMEDY-->

<?php 
  $req = $DB->query('SELECT * FROM videos WHERE video_type = \'Comedy\' ORDER BY id');
?>
  <div class="category-section-homepage" >
    <h5 class="category-title-homepage" ><a href="category.php?type=Comedy">Comedy</a></h5>
      <div class="slideshow-container">
  <?php
      $i=0;
      echo '<div class="mySlides2 fade">';
      while($data = $req->fetch()) 
      {
        if( $i%4 == 0 && $i != 0)
        { 
          echo '</div>';
          echo '<div class="mySlides2 fade">';
          echo '<a href="videopage.php?title=' . $data['title'] . '" ><img class="slideshow-img" src="assets/pictures/movie_thumbnails/' . $data['photo'] . '" style="width:23.7%"></a>';
        }
        else
        {
        echo '<a href="videopage.php?title=' . $data['title'] . '" ><img class="slideshow-img" src="assets/pictures/movie_thumbnails/' . $data['photo'] . '" style="width:23.7%"></a>';
        }
        $i++;
      }     
      echo '</div>';
      $req->closeCursor();
  ?>
      <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides2(1)">&#10095;</a>
    </div>        
  </div>

<!--NEW SLIDESHOW CATEGORY - MUSIC-->

<?php 
  $req = $DB->query('SELECT * FROM videos WHERE video_type = \'Music\' ORDER BY id');
?>
  <div class="category-section-homepage" >
    <h5 class="category-title-homepage" ><a href="category.php?type=Music">Music</a></h5>
      <div class="slideshow-container">
  <?php
      $i=0;
      echo '<div class="mySlides3 fade">';
      while($data = $req->fetch()) 
      {
        if( $i%4 == 0 && $i != 0)
        { 
          echo '</div>';
          echo '<div class="mySlides3 fade">';
          echo '<a href="videopage.php?title=' . $data['title'] . '" ><img class="slideshow-img" src="assets/pictures/movie_thumbnails/' . $data['photo'] . '" style="width:23.7%"></a>';
        }
        else
        {
        echo '<a href="videopage.php?title=' . $data['title'] . '" ><img class="slideshow-img" src="assets/pictures/movie_thumbnails/' . $data['photo'] . '" style="width:23.7%"></a>';
        }
        $i++;
      }     
      echo '</div>';
      $req->closeCursor();
  ?>
      <a class="prev" onclick="plusSlides3(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides3(1)">&#10095;</a>
    </div>        
  </div>

<!--NEW SLIDESHOW CATEGORY - KIDS-->

<?php 
  $req = $DB->query('SELECT * FROM videos WHERE video_type = \'Kids\' ORDER BY id');
?>
  <div class="category-section-homepage" >
    <h5 class="category-title-homepage" ><a href="category.php?type=Kids">Kids</a></h5>
      <div class="slideshow-container">
  <?php
      $i=0;
      echo '<div class="mySlides4 fade">';
      while($data = $req->fetch()) 
      {
        if( $i%4 == 0 && $i != 0)
        { 
          echo '</div>';
          echo '<div class="mySlides4 fade">';
          echo '<a href="videopage.php?title=' . $data['title'] . '" ><img class="slideshow-img" src="assets/pictures/movie_thumbnails/' . $data['photo'] . '" style="width:23.7%"></a>';
        }
        else
        {
        echo '<a href="videopage.php?title=' . $data['title'] . '" ><img class="slideshow-img" src="assets/pictures/movie_thumbnails/' . $data['photo'] . '" style="width:23.7%"></a>';
        }
        $i++;
      }     
      echo '</div>';
      $req->closeCursor();
  ?>
      <a class="prev" onclick="plusSlides4(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides4(1)">&#10095;</a>
    </div>        
  </div>

<!-- Navbar -->

<?php include("navbar.php"); ?>
<?php include("footer.php"); ?>

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
    <script>
      document.getElementById("mySearchButton").addEventListener("click", () => {
          document.getElementsByClassName("hidden_navbar")[0].style.visibility = "visible";
          setTimeout(() => {
            document.getElementsByClassName("hidden_navbar")[0].style.visibility = "hidden";
          }, 10000);
      })
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
<?php
}
else 
{
  header('location:login.php');
}
?>