<?php if (!isset($_GET['url'])): ?>
  <div class="start-images clearfix">
    <div class="clearfix">
      <img class="lazyload" src="./pebbles/2.jpg" alt="start-page">
    </div>
    <div class="clearfix">
      <img class="lazyload" src="./pebbles/3.jpg" alt="start-page">
    </div>
    <div class="clearfix">
      <img class="lazyload" src="./pebbles/4.jpg" alt="start-page">
    </div>
    <div class="clearfix">
      <img class="lazyload" src="./pebbles/5.jpg" alt="start-page">
    </div>
    <div class="clearfix">
      <img class="lazyload" src="./pebbles/6.jpg" alt="start-page">
    </div>
    <div class="clearfix">
      <img class="lazyload" src="./pebbles/7.jpg" alt="start-page">
    </div>
  </div>
<?php else : ?>
<div class="start-images clearfix">
  <div class="clearfix">
    <img class="lazyload" data-src="../pebbles/2.jpg" src="../pebbles/2.jpg" alt="">
  </div>
  <div class="clearfix">
    <img class="lazyload" data-src="../pebbles/3.jpg" src="../pebbles/3.jpg" alt="">
  </div>
  <div class="clearfix">
    <img class="lazyload" data-src="../pebbles/4.jpg" src="../pebbles/4.jpg" alt="">
  </div>
  <div class="clearfix">
    <img class="lazyload" data-src="../pebbles/5.jpg" src="../pebbles/5.jpg" alt="">
  </div>
  <div class="clearfix">
    <img class="lazyload" data-src="../pebbles/6.jpg" src="../pebbles/6.jpg" alt="">
  </div>
  <div class="clearfix">
    <img class="lazyload" data-src="../pebbles/7.jpg" src="../pebbles/7.jpg" alt="">
  </div>
  <h2>Come and pay us a visit we expecting you</h2>
</div>
<?php endif; ?>
<div class="parallax">
  <img src="../pebbles/black-fade-png.png" alt="">
  <h1>Menu</h1>
  <a href="http://localhost/igorjanosevic/pebbles/user/menu" class="menu-btn">Menu</a>
</div>
