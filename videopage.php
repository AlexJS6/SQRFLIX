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

        $req = $DB->prepare('SELECT title, content, duration FROM videos WHERE title = ?');
        $req -> execute(array($_GET['title']));

        $data = $req->fetch();
    ?>
    <header class="main-header">
        <a href="homephp"><img class="logo-small" src="assets/pictures/sqrflix-logo-small.png" alt="SQRFLIX Logo"></a>
    </header>


    <iframe class="video-frame"src="<?php echo $data['content']; ?>" allowfullscreen></iframe>
    <div class="video-page-info">
        <h5 class="video-page-title"><?php echo $data['title']; ?></h5>
        <h5 class="video-page-length"><?php echo $data['duration']; ?></h5>
    </div>
        <?php $req->closeCursor(); ?>

        <?php
 
        $req = $DB->prepare('SELECT * FROM comments WHERE id_video = ?');
        $req -> execute(array($_GET['id_video']));

        $data = $req->fetch();
        ?>

    <button type="button" class="collapsible">Show/Hide comments</button>

    <div class="content">
    <p class="comment-date"><?php echo $data['date_creation']; ?></p>
    <p class="username-and-comment"><strong> <?php echo $data['author'] . ' : '; ?> </strong><?php echo $data['content']; ?></p>
    <form class="new-comment-section" action="" method="POST">
        <label for="new-comment">Add a comment:</label><br>
        <input type="text-area" row="4" class="comment-input-area" placeholder="Enter your comment here." name="comment">
        <input type="submit" value="Submit" class="submit-comment">
    </form>
    </div>

    <?php 
        $DB->exec("INSERT INTO comments( author, content, id_video) VALUES(:author, :content, :id_video)");
        $req->execute(array(
            'author' => $_SESSION['pseudo'],
            'content' => $_POST['comment'],
            'id_video' => $_GET['id']
            ));
    ?>

    <?php include("navbar.php"); ?>

<style>
    .video-frame {
        margin-left: 20%;
        margin-right: 20%;
        margin-top: 100px;
        margin-bottom: 5px;
        width: 60%;
        height: auto;
        min-height: 400px;
        padding: 0px;
        border: none;
    }

    .video-page-info{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin-left: 20%;
        margin-right: 20%;
        margin-top: 0px;
    }

    .video-page-title{
        color:white;
        font-family: cocogoose;
        font-size: 1.3em;
        margin: 0px;
    }
    .video-page-length{
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 1.3em;
        margin: 0px;
    }

    .video-page-comments {
        border: white 2px solid;
        background-color: grey;
        margin-left: 20%;
        width: 60%;
    }

    .collapsible {
        background-color: black;
        color: white;
        cursor: pointer;
        padding: 18px;
        width: 60%;
        margin-left: 20%;
        margin-bottom: 20px;
        border: none;
        text-align: center;
        outline: none;
        font-size: 15px;
    }

    .active, .collapsible:hover {
        background-color: black;
    }

    .content {
        display: none;
        overflow: hidden;
        background-color: rgb(19, 20, 22);
        width: 60%;
        margin-left: 20%;
        margin-bottom: 100px;
        border-radius: 5px;
    }
    .comment-date{
        font-size: 0.7em;
        margin-bottom: 0px;
        margin-left: 5px;
        color: white;
    }
    .username-and-comment {
        font-size:1em;
        margin-top: 0px;
        margin-left: 5px;
        color: white;
    }

    .new-comment-section {
        color: white;
        margin-left: 5px;
        height: auto;
        border-top: white;
    }

    .comment-input-area {
        height: 50px;
        width: 60%;
        margin-bottom: 10px;
        resize: none;
        box-sizing: border-box;

    }

    .submit-comment {
        height: 50px;
        background-color: rgb(139, 3, 3);
        border: none;
        color: white;
    }

</style>


<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
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