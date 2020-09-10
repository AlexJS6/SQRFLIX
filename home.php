<?php 
session_start();
if (isset($_SESSION['user'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/burger_menu.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>SQRFLIX</title>
</head>
<body>
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

<?php 
/* --------------Function carousel that will be used 5 times (for all types)-------------*/
function carousel($type, $int) {
  include("data_base.php");
  $req = $DB->query("SELECT * FROM videos WHERE video_type = '$type' ORDER BY id");
?>
 <div class="category-section-homepage" >
    <h5 class="category-title-homepage" ><a href="category.php?type=<?php echo $type; ?>"> <?php echo $type; ?> </a></h5>
      <div class="slideshow-container">
      <?php
      $i=0;
      echo '<div class="mySlides' . $int . ' fade">';
      while($data = $req->fetch()) 
      {
        if( $i%4 == 0 && $i != 0)
        { 
          echo '</div>';
          echo '<div class="mySlides' . $int . ' fade">';
          echo '<a href="videopage.php?title=' . $data['title'] . '"><img class="slideshow-img" alt="' . $data['title'] . '" src="assets/pictures/movie_thumbnails/' . $data['photo'] . '" style="width:23.7%"></a>';
        }
        else
        {
        echo '<a href="videopage.php?title=' . $data['title'] . '"><img class="slideshow-img" alt="' . $data['title'] . '" src="assets/pictures/movie_thumbnails/' . $data['photo'] . '" style="width:23.7%"></a>';
        }
        $i++;
      }     
      echo '</div>';
      $req->closeCursor();
      ?>
      <a class="prev" onclick="plusSlides<?php echo $int; ?>(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides<?php echo $int; ?>(1)">&#10095;</a>
    </div>        
  </div>
<?php
}

  carousel('Sci-Fi', 0);
  carousel('Horror', 1);
  carousel('Comedy', 2);
  carousel('Music', 3);
  carousel('Kids', 4);
  
  include("navbar.php"); 
  include("footer.php"); 
?>

<!--JAVASCRIPT - SLIDES - SCIFI-->
        <script>
        function carouseljs (int){
            let slideIndex = 1;
            showSlides(slideIndex);
        
            function plusSlides(n) {
              showSlides(slideIndex += n);
            }
            
            function currentSlide(n) {
              showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
              let i;
              let slides = document.getElementsByClassName("mySlides" + int);
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
              }
              slides[slideIndex-1].style.display = "block";  
              }
        }

        carouseljs(0);
        carouseljs(1);
        carouseljs(2);
        carouseljs(3);
        carouseljs(4);
        </script>
        

        <script>
        /*let slideIndex0 = 1;
        showSlides0(slideIndex0);
        
        function plusSlides0(n) {
          showSlides0(slideIndex0 += n);
        }
        
        function currentSlide0(n) {
          showSlides0(slideIndex0 = n);
        }
        
        function showSlides0(n) {
          let i;
          let slides = document.getElementsByClassName("mySlides0");
          if (n > slides.length) {slideIndex0 = 1}    
          if (n < 1) {slideIndex0 = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          slides[slideIndex0-1].style.display = "block";  
        }*/
        </script>

<!--JAVASCRIPT - SLIDES - HORROR-->  
    <script>
    /*let slideIndex1 = 1;
    showSlides1(slideIndex1);
    
    function plusSlides1(n) {
      showSlides1(slideIndex1 += n);
    }
    
    function currentSlide1(n) {
      showSlides1(slideIndex1 = n);
    }
    
    function showSlides1(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides1");
      if (n > slides.length) {slideIndex1 = 1}    
      if (n < 1) {slideIndex1 = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      slides[slideIndex1-1].style.display = "block";  
    }*/
    </script>

<!--JAVASCRIPT - SLIDES - COMEDY-->  
<script>
    /*let slideIndex2 = 1;
    showSlides2(slideIndex2);
    
    function plusSlides2(n) {
      showSlides2(slideIndex2 += n);
    }
    
    function currentSlide2(n) {
      showSlides2(slideIndex2 = n);
    }
    
    function showSlides2(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides2");
      if (n > slides.length) {slideIndex2 = 1}    
      if (n < 1) {slideIndex2 = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      slides[slideIndex2-1].style.display = "block";  
    }*/
    </script>

<!--JAVASCRIPT - SLIDES - MUSIC-->  
<script>
    /*let slideIndex3 = 1;
    showSlides3(slideIndex3);
    
    function plusSlides3(n) {
      showSlides3(slideIndex3 += n);
    }
    
    function currentSlide3(n) {
      showSlides3(slideIndex3 = n);
    }
    
    function showSlides3(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides3");
      if (n > slides.length) {slideIndex3 = 1}    
      if (n < 1) {slideIndex3 = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      slides[slideIndex3-1].style.display = "block";  
    }*/
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
/*
    let slideIndex4 = 1;
    showSlides4(slideIndex4);
    
    function plusSlides4(n) {
      showSlides4(slideIndex4 += n);
    }
    
    function currentSlide4(n) {
      showSlides4(slideIndex4 = n);
    }
    
    function showSlides4(n) {
      let i;
      let slides4 = document.getElementsByClassName("mySlides4");
      if (n > slides4.length) {slideIndex4 = 1}    
      if (n < 1) {slideIndex4 = slides4.length}
      for (i = 0; i < slides4.length; i++) {
          slides4[i].style.display = "none";  
      }
      slides4[slideIndex4-1].style.display = "block";  
    }*/
    </script>  

<!--JAVASCRIPT ANIMATION SLIDESHOW HEADER-->

    <script>

</script>
<script src="script.js"></script>
</body>
</html>
<?php
}
else 
{
  header('location:login.php');
}
?>