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
    <title>SQRFLIX</title>
</head>
<body>
    
    <?php
        try {
            $DB = new PDO('mysql:host=localhost;dbname=sqrflix;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        }
        catch (Exception $e)
        {
            die ('Erreur ' . $e->getMessage());
        }

        $req = $DB->prepare('SELECT id, title, content, duration FROM videos WHERE title = ?');
        $req -> execute(array($_GET['title']));

        $data = $req->fetch();
        $id_video = $data['id'];
        $title_video = $data['title'];
    ?>
    <header class="main-header">
        <a href="homephp"><img class="logo-small" src="assets/pictures/sqrflix-logo-small.png" alt="SQRFLIX Logo"></a>
    </header>


    <iframe class="video-frame" src="<?php echo $data['content']; ?>" allowfullscreen></iframe>
    <div class="video-page-info">
        <h5 class="video-page-title"><?php echo $data['title']; ?></h5>
        <h5 class="video-page-length"><?php echo $data['duration']; ?></h5>
    </div>
        <?php $req->closeCursor(); ?>

        <?php
 
        $req = $DB->prepare('SELECT * FROM comments WHERE id_video = ? ORDER BY date_creation DESC');
        $req -> execute(array($id_video));
        ?>

    <button type="button" class="collapsible">Show/Hide comments</button>

    <div class="content">
        <?php
    while ($data = $req->fetch()) 
        {
            echo '<p class="comment-date">' .  $data['date_creation'] . '</p>';
            echo '<p class="username-and-comment"><strong>' . $data['author'] . ' : </strong>' . $data['content'] . '</p>';
        }
    ?>
    
    
    <form class="new-comment-section" <?php /* action="videopage.php?title=<?php echo $title_video"*/ ?> method="POST">
        <label for="new-comment">Add a comment:</label><br>
        <input type="text-area" row="4" class="comment-input-area" placeholder="Enter your comment here." name="comment" required>
        <input type="submit" value="Submit" name="comment_button" class="submit-comment">
    </form>
    </div>

    <?php 
    $req->closeCursor();   
    if (isset($_POST['comment']))  
    {
        $req = $DB->prepare('INSERT INTO comments (author, content, id_video) VALUES (:author, :content, :id_video)');
        $req->execute(array(
            'author' => $_SESSION['user'],
            'content' => $_POST['comment'],
            'id_video' => $id_video
            ));
        header('location:videopage.php?title=' . $title_video);
        $req->closeCursor();
        exit();
    }   
            
    ?>

    <?php include("navbar.php"); ?>


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


</body>
</html>