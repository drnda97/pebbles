<?php $nav = $_SESSION['nav']; ?>
<?php $startPage = array_pop($nav); ?>
<nav class="clearfix" id="nav">
  <div class="logo clearfix">
      <a href="/user/startpage"><img src="../public/assets/logos/logo.png" alt="logo" id="img_pos"></a>
  </div>
  <div class="hamburger secret">
    <img src="../public/assets/icons/1.png" alt="hamburger-icon" id="hamburger_icon">
  </div>
  <ul class="nav_ul">
    <div class="close secret">
      <img src="../public/assets/icons/2.png" alt="x-icon" id="x_icon">
    </div>
    <?php foreach ($nav as $option): ?>
      <li><a href="<?php echo $option['option_value'] ?>"><?php echo $option['option_name']; ?></a></li>
    <?php endforeach; ?>
  </ul>
</nav>
