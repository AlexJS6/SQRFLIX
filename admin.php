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
    <link rel="stylesheet" href="assets/css/burger_menu.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>SQRFLIX</title>
</head>
<body>
    <header id="main-header" class="main-header">
 <img id="logo-small" class="logo-small" src="assets/pictures/sqrflix-logo-small.png" alt="SQRFLIX Logo"> 
 <h1 style="color:red; text-align: center; margin-bottom: 50px">Hello,  <?php echo $_SESSION['user'] ?></h1>
    </header>
    <form action="admin.php" method="post" class="Admin_video" enctype="multipart/form-data">
        <p style="margin-bottom: 20px">
            <label for="fname">vidéo name :</label>
            <input type="text" id="nom" name="name" placeholder="..." />
        </p>
        <p style="margin-bottom: 20px">
        <label for="type">Choose a type :</label>
        <select id="type" name="type">
            <option value="Sci-fi">Sci-fi</option>
            <option value="Horror">Horror</option>
            <option value="Comedy">Comedy</option>
            <option value="Music">Music</option>
            <option value="audi">Kids</option>
        </select> 
        </p>
        <p style="margin-bottom: 20px">
            <label for="type">Choose a language :</label>
            <select id="language" name="language">
                <option value="english">english</option>
                <option value="french">french</option>
                <option value="dutch">dutch</option>
            </select> 
        </p>
        <p style="margin-bottom: 20px">
        <label for="type">add duration :</label>
        <input type="text" id="duration" name="duration" placeholder="MM.SS" />
        </p>
        <p style="margin-bottom: 20px">
        <label for="type">Add date :</label>
        <input type="text" id="date" name="date" placeholder="..." />
        </p>
        <p style="margin-bottom: 20px">
        <label for="type">add URL :</label>
        <input type="text" id="content" name="content" placeholder="..." />
        </p>

        <p style="margin-bottom: 20px">
        <label for="picture">Name of picture:</label>
        <input type="text" name="picture" placeholder="..." />
        <label for="pictureUpload">Your picture</label>
        <input type="file" name="fileToUpload" id="fileToUpload" />
        </p>
        <p></p>
        <input style="margin-bottom: 20px" type="submit" id="submit" name="submit" value="Confirm" />
        </p>
    </form>
    <?php
		if (isset($_POST['submit']))
		{
			$video_name = htmlspecialchars($_POST['name']);
			$video_type = htmlspecialchars($_POST['type']);
			$video_language = htmlspecialchars($_POST['language']);
			$video_duration = htmlspecialchars($_POST['duration']);
			$video_date = htmlspecialchars($_POST['date']);
            $video_content = htmlspecialchars($_POST['content']);
            $video_picture = htmlspecialchars($_POST['picture']);

			$DB->exec("INSERT INTO videos(date_add, title, video_type, duration, video_language, content, photo)VALUES('$video_date', '$video_name', '$video_type', '$video_duration', '$video_language', '$video_content', '$video_picture')");
        
            /*$target_dir = "assets/pictures/movie_thumbnails";
            $target_file = $target_dire . basename($_FILES['fileToUpload']['name']);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
            if ($check !== false) 
            {
                echo 'file is an image - ' . $check['mime'] . '.';
                $uploadOk = 1;
            } else 
            {
                echo 'File is not an image.';
                $uploadOk = 0; 
            }
        }

        if (file_exists($target_file))
        {
            echo 'Sorry, file already exists.';
            $uploadOk = 0;
        }

        if ($_FILES['fileToUpload']['size'] > 500 000)
        {
            echo 'Sorry, your file is too large.';
            $uploadOk = 0;
        }

        if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg' && $imageFileType != 'gif')
        {
            echo 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';
            $uploadOk = 0;
        }

        if ($uploadOk == 0)
        {
            echo 'Sorry, your file was not uploaded.';
        } else 
        {
            if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file))
            {
                echo 'The file ' . basename($_FILES['fileToUpload']['name']) . ' has been uploaded.';
            } else 
            {
                echo 'Sorry, there was an error uploading your file.';
            }
        }*/
		/*$req->execute(array(
			'date_add' => $video_date,
			'title' => $video_name,
			'video_type' => $video_type,
			'duration' => $video_duration,
			'video_language' => $video_language,
			'content' => $video_content,
			'picture' => $video_picture
        ))*/
        }

    ?>

    <?php
	  /* ------------------------SHOW VIDEO LIST----------------------- */
      $req = $DB->query('SELECT * FROM videos ORDER BY date_add DESC');
    ?>

    <button type="button" class="collapsible">Show/Hide videos</button>

    <div class="content">
        <?php
    while ($data = $req->fetch()) 
        {
            echo '<p class="comment-date">' .  $data['title'] . ' created on ' . $data['date_add'] . '<br><a href="admin.php?title=' . $data['title'] .'">Delete</a></p>';
        }
        $req->closeCursor();

        if (isset($_GET['title']))
        {
            $delete = $_GET['title'];
            $req = $DB->exec("DELETE FROM videos WHERE title ='$delete'");
            header('location:admin.php');
            $req->closeCursor();
        }
      
    ?>
    </div>
    <?php
      /* ------------------------SHOW VIDEO LIST----------------------- */
      $req = $DB->query('SELECT * FROM users ORDER BY id DESC');
    ?>

    <button type="button" class="collapsible">Show/Hide users</button>

    <div class="content">
        <?php
    while ($data = $req->fetch()) 
        {
            echo '<p class="comment-date">' .  $data['user'] . ' has the status of ' . $data['user_status'] . '<br><a href="admin.php?user=' . $data['user'] .'">Delete</a></p>';
        }

        if (isset($_GET['user']))
        {
            $delete_user = $_GET['user'];
            $req = $DB->exec("DELETE FROM users WHERE user ='$delete_user'");
            header('location:admin.php');
            $req->closeCursor();
          
        }
      
    ?>
    </div>


    <?php
      /* ------------------------SHOW VIDEO LIST----------------------- */
      $req = $DB->query('SELECT * FROM comments ORDER BY date_creation DESC');
    ?>

    <button type="button" class="collapsible">Show/Hide comments</button>

    <div class="content">
        <?php
    while ($data = $req->fetch()) 
        {
            echo '<p class="comment-date">' .  $data['content'] . ' <strong>from: ' . $data['author'] . '</strong><br><a href="admin.php?comment_id=' . $data['id'] .'">Delete</a></p>';
        }

        if (isset($_GET['comment_id']))
        {
            $delete_comment = $_GET['comment_id'];
            $req = $DB->exec("DELETE FROM comments WHERE id ='$delete_comment'");
            header('location:admin.php');
            $req->closeCursor();
          
        }
      
    ?>
    </div>
    
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
