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
    <link rel="stylesheet" href="assets/css/carousel.css">
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
<!--JAVASCRIPT - SLIDES -->
    <script src="assets/js/carousel.js"></script>
<?php
/* Calling function carousel */
  include('carousel.php');
  carousel('Sci-Fi', 0);
  carousel('Horror', 1);
  carousel('Comedy', 2);
  carousel('Music', 3);
  carousel('Kids', 4);
/* Calling navbar and footer */
  include("navbar.php"); 
  include("footer.php"); 
?>
<!--JAVASCRIPT - CAROUSEL -->
<script src="assets/js/carouseltype.js"></script>
<!--JAVASCRIPT - SEARCH -->
<script src="assets/js/search.js"></script>

</body>
</html>
<?php
}
else 
{
  header('location:login.php');
}
?>