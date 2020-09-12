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
        if( $i%4 == 0 && $i != 0) //Every 4 pictures, create a new slideshow
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
?>