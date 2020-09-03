<?php 
session_start();
if ($_SESSION['user_status'] === "admin") {
/* ----------------------Get Database(sqrflix)--------------------- */
include("data_base.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>SQRFLIX</title>
</head>
<body>
    <header id="main-header" class="main-header">
<!-- <img id="logo-small" class="logo-small" src="assets/pictures/sqrflix-logo-small.png" alt="SQRFLIX Logo"> -->
    </header>
    <form action="" method="post" class="Admin_video">
        <p>
            <label for="fname">vidéo name :</label>
            <input type="text" id="nom" name="nom" placeholder="..." />
        </p>
        <p>
        <label for="type">Choose a type :</label>
        <select id="type" name="type">
            <option value="Sci-fi">Sci-fi</option>
            <option value="Horror">Horror</option>
            <option value="Comedy">Comedy</option>
            <option value="Music">Music</option>
            <option value="audi">Kids</option>
        </select> 
        </p>
        <p>
            <label for="type">Choose a language :</label>
            <select id="language" name="language">
                <option value="english">english</option>
                <option value="french">french</option>
                <option value="dutch">dutch</option>
            </select> 
        </p>
        <p>
        <label for="type">add duration :</label>
        <input type="text" id="duration" name="duration" placeholder="MM.SS" />
        </p>
        <p>
        <label for="type">Add date :</label>
        <input type="text" id="date" name="date" placeholder="..." />
        </p>
        <p>
        <label for="type">add URL :</label>
        <input type="text" id="content" name="content" placeholder="..." />
        </p>

        <p>
        <label for="myfile">Select a file:</label>
        <input type="text" name="picture">
        </p>
        <p></p>
        <input type="submit" id="submit" name="submit" value="Envoyé" />
        </p>
    </form>

    <?php
      /* ------------------------SHOW VIDEO LIST----------------------- */
      $req = $DB->query('SELECT * FROM videos ORDER BY date_add DESC');
    ?>

    <button type="button" class="collapsible">Show/Hide videos</button>

    <div class="content">
        <?php
    while ($data = $req->fetch()) 
        {
            echo '<p class="comment-date">' .  $data['title'] . ' created on ' . $data['date_add'] . '<a href="admin.php?title=' . $data['title'] .'">Delete</a></p>';
        }
        $req->closeCursor();

        if (isset($_GET['title']))
        {
            $delete = $_GET['title'];
            $req = $DB->exec("DELETE FROM videos WHERE title ='$delete'");
            header('location:admin.php');
        }
    ?>
    
    <?php include("navbar.php"); ?>
</body>

<script>
let coll = document.getElementsByClassName("collapsible");
let i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    let content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
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

</html>
<?php
}
else {
    header('location:login.php');
}
?>

<?php

