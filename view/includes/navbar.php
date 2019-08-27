<?php $nav = $_SESSION['nav']; ?>
<?php $startPage = array_pop($nav); ?>
<nav class="clearfix">
  <div class="logo">
      <a href="/user/startpage"><img src="../public/assets/logos/logo.png" alt="logo" id="img_pos"></a>
  </div>
  <ul class="nav_ul">
    <?php foreach ($nav as $option): ?>
      <li><a href="<?php echo $option['option_value'] ?>"><?php echo $option['option_name']; ?></a></li>
    <?php endforeach; ?>
  </ul>
</nav>
