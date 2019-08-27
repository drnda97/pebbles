<?php $images = $_SESSION['startImages']; ?>
<?php $texts = $_SESSION['textStartpage']; ?>
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
  <?php foreach ($texts as $text): ?>
    <?php if ($text['tag_name'] === 'h2'): ?>
      <h2><?php echo $text['text'] ?></h2>
    <?php endif; ?>
  <?php endforeach; ?>
</div>
<div class="parallax">
  <img src="<?php echo $png_image; ?>" alt="">
  <?php foreach ($texts as $text): ?>
    <?php if ($text['tag_name'] === 'h1'): ?>
      <h1><?php echo $text['text'] ?></h1>
    <?php endif; ?>
  <?php endforeach; ?>
  <a href="<?php echo WEBROOT; ?>/user/menu" class="menu-btn">Menu</a>
</div>
