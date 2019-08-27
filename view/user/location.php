<?php $images = $_SESSION['images']; ?>
<?php $texts = $_SESSION['textLocation']; ?>
<div class="slider_container">
  <img name="slider" alt="prva slika slajda">
  <button type="button" name="next" class="next">&#10095;</button>
  <button type="button" name="previous" class="previous">&#10094;</button>
  <?php foreach ($images as $image): ?>
    <img data-src="<?php echo $image['img_url']; ?>" class="location_slider">
  <?php endforeach; ?>
</div>
<div class="location">
  <?php foreach ($texts as $text): ?>
    <?php if ($text['tag_name'] === 'headline'): ?>
      <h2><?php echo $text['text']; ?></h2>
      <a href="https://www.google.com/maps/place/Pebbles+Beach+Bar/@35.9345977,14.341824,17z/data=!4m12!1m6!3m5!1s0x130e4d982ba072bd:0xe632f69a35af54f1!2sPebbles+Beach+Bar!8m2!3d35.9345934!4d14.3440127!3m4!1s0x130e4d982ba072bd:0xe632f69a35af54f1!8m2!3d35.9345934!4d14.3440127">Triq In-Nahhalija, Il-Mellieħa, Малта</a>
    <?php endif; ?>
    <?php if ($text['tag_name'] === 'h3'): ?>
      <h3><?php echo $text['text']; ?></h3>
    <?php endif; ?>
    <?php if ($text['tag_name'] === 'p'): ?>
      <p><?php echo $text['text']; ?></p>
    <?php endif; ?>
  <?php endforeach; ?>
  <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=pebbles%20bar%20malta&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
</div>
<script type="text/javascript" src="../js/location.js"></script>
