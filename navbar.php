<div class="navbar_container">
  <div class="hidden_navbar">
    <form action="search.php" method="get">
      <input class="mySearchInput" type="text" name="search_input" placeholder="Search...">
      <input style="visibility: hidden" type="submit">
    </form>
  </div>
  <div class="navbar">
      <div class="home_div">
        <a href="home.php" class="nav__link">
        <i class="material-icons home_icon"> home </i></a>
      </div>

        <div class="search_div">
          <a href="#Search" id="mySearchButton" class="nav__link nav__link--active">
          <i class="material-icons search_icon">search</i></a>
        </div>

      <div class="logout_div">
        <?php echo '<p class="user_welcome" >Hello, ' . $_SESSION['user'] . '!</p>'; ?>
        <img class="avatar_img" src="assets/pictures/guest_avatar_1.png" alt="avatar">

        <a href="logout.php" class="nav__link">
        <i class="material-icons logout_icon">exit_to_app</i></a>
      </div>
        

        <div class="menu-wrap">
        <input type="checkbox" class="toggler">
        <div class="hamburger"><div></div></div>
        <div class="menu">
          <div>
            <div>
              <ul>
                <li>Hello <?php echo $_SESSION['user'] ?></li>
                <li>Where are you going?</li>
                <li></li>
                <li><a href="home.php">Home</a></li>
                <li><a href="category.php?type=Sci-Fi">Sci-Fi</a></li>
                <li><a href="category.php?type=Horror">Horror</a></li>
                <li><a href="category.php?type=Comedy">Comedy</a></li>
                <li><a href="category.php?type=Music">Music</a></li>
                <li><a href="category.php?type=Kids">Kids</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

  </div>
</div>