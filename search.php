<?php
session_start();
if (isset($_SESSION['user']) && isset($_GET['search_input'])) {
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
    <title>SQRFLIX</title>
</head>
<body>
    <header id="main-header" class="main-header">
        <img id="logo-small" class="logo-small" src="assets/pictures/sqrflix-logo-small.png" alt="SQRFLIX Logo">
        <img id="header-picture"  class="hearder-picture image_category" src="assets/pictures/shining-long.png" alt="The Shining">
    </header>
    <h2 style="color: #fff; margin-bottom: 30px">Results for "<?php echo $_GET['search_input'] . '" :' ?></h2>
    <section class="movies">
      <div class="grid-container">
      
        <!-- movie -->
        <?php 
        $req = $DB->query('SELECT * FROM videos');
          while ($data = $req->fetch())
          {
            $movie_title = $data['title'];
            $movie_title_lw = strtolower($movie_title);
            $search_input = $_GET['search_input'];
            $search_input_lw = strtolower($search_input);
            if (strpos($movie_title_lw, $search_input_lw) !== FALSE)
            {
              echo '<figure class="movie">
                    <a href="videopage.php?title=' . $data['title'] . '"><img class= "image_category" src="assets/pictures/movie_thumbnails/' . $data['photo'] . '" alt="' . $data['title'] . '"></a>
                    </figure>';
            }
          }
          $req->closeCursor();
        ?>
      </div>
    </section>

    <?php include("navbar.php"); ?>
    <?php include("footer.php"); ?>
    <script>
      document.getElementById("mySearchButton").addEventListener("click", () => {
          document.getElementsByClassName("hidden_navbar")[0].style.visibility = "visible";
          setTimeout(() => {
            document.getElementsByClassName("hidden_navbar")[0].style.visibility = "hidden";
          }, 10000);
      })
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