<?php 
session_start();
try {
  $DB = new PDO('mysql:host=localhost;dbname=sqrflix;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
  die ('Erreur ' . $e->getMessage());
}
$req = $DB->prepare('SELECT * FROM videos WHERE type = ?');
$req -> execute(array($_GET['type']));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>SQRFLIX - <?php echo $_GET['type']?></title>
</head>
<body>
    <header id="main-header" class="main-header">
        <img id="logo-small" class="logo-small" src="assets/pictures/sqrflix-logo-small.png" alt="SQRFLIX Logo">
        <img id="header-picture"  class="hearder-picture image_category" src="assets/pictures/shining-long.png" alt="The Shining">
    </header>
    <div class="category-name"><?php $_GET['type'] ?></div>
    <section class="movies">
      <div class="grid-container">
        <!-- movie -->
        <?php 
        while($data = $req->fetch()){
          echo '<figure class="movie">
          <a href="videopage.php?title=' . $data['title'] . '"><img class= "image_category" src="assets/pictures/movie_thumbnails/' . $data['photo'] . '" alt="' . $data['title'] . '"></a>
          </figure>';
        }
        ?>
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