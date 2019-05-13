<nav class="clearfix">
  <div class="nav-wrapper">
    <div class="logo">
      <?php if(!isset($_GET['url'])) : ?>
        <a href="http://localhost/igorjanosevic/pebbles/user"><img src="./assets/logos/logo.png" alt="logo"></a>
    	<?php else : ?>
        <a href="http://localhost/igorjanosevic/pebbles/user"><img src="../assets/logos/logo.png" alt="logo"></a>
    	<?php endif; ?>
    </div>
    <ul>
      <li><a href="http://localhost/igorjanosevic/pebbles/user/location">Hours & Location</a></li>
      <li><a href="http://localhost/igorjanosevic/pebbles/user/menu">Menus</a></li>
      <li><a href="http://localhost/igorjanosevic/pebbles/user/contact">Contact</a></li>
    </ul>
</div>
</nav>
