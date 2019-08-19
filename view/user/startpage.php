<?php $images = $_SESSION['images']; ?>
<?php $png_image = null; ?>
<div class="start-images clearfix">
  <?php foreach ($images as $image): ?>
    <?php if (!strpos($image['img_url'], '.png')): ?>
      <div class="clearfix">
        <img src="<?php echo $image['img_url']; ?>">
      </div>
    <?php else: ?>
      <?php $png_image = $image['img_url']; ?>
    <?php endif; ?>
  <?php endforeach; ?>
  <h2>Come and pay us a visit we are expecting you!!!</h2>
</div>
<div class="parallax">
  <img src="<?php echo $png_image; ?>" alt="">
  <h1>Menu</h1>
  <a href="<?php echo WEBROOT; ?>/user/menu" class="menu-btn">Menu</a>
</div>
