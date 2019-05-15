<nav class="clearfix">
  <!-- <div class="background"></div> -->
  <div class="logo">
    <?php if(!isset($_GET['url'])) : ?>
      <a href="http://localhost/igorjanosevic/pebbles/user/startpage"><img src="./assets/logos/logo.png" alt="logo" id="img_pos"></a>
    <?php else : ?>
      <a href="http://localhost/igorjanosevic/pebbles/user/startpage"><img src="../assets/logos/logo.png" alt="logo" id="img_pos"></a>
    <?php endif; ?>
  </div>
  <ul class="nav_ul">
    <li><a href="http://localhost/igorjanosevic/pebbles/user/location">Hours & Location</a></li>
    <li><a href="http://localhost/igorjanosevic/pebbles/user/menu">Menu</a></li>
    <li><a href="http://localhost/igorjanosevic/pebbles/user/contact">Contact</a></li>
  </ul>
</nav>
