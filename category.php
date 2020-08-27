<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>SQRFLIX - #####</title>
</head>
<body>
    <header id="main-header" class="main-header">
        <img id="logo-small" class="logo-small" src="assets/pictures/sqrflix-logo-small.png" alt="SQRFLIX Logo">
        <img id="header-picture"  class="hearder-picture image_category" src="assets/pictures/shining-long.png" alt="The Shining">
    </header>
    <div class="category-name">#####</div>
    <section class="movies">
      <div class="grid-container">
        <!-- movie -->
        <figure class="movie">
          <a href="#"><img class= "image_category" src="assets/pictures/gravity.png" alt="#"></a>
        </figure>
      </div>
    </section>
    <?php include("navbar.php"); ?>
    <script>
      document.getElementById("mySearchButton").addEventListener("click", () => {
        document.getElementsByClassName("hidden_navbar")[0].style.visibility = "visible";
      })
      function menuFunction() {
        let x = document.getElementById("my_menu_links");
        if (x.style.display === "block") {
          x.style.display = "none";
          console.log("hi");
        } else {
          x.style.display = "block";
          console.log("hi");
        }
      }
    </script>
</body>
</html>