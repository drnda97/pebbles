<?php $products = $_SESSION['products']; ?>
<?php $items = $_SESSION['items']; ?>
<?php $images = $_SESSION['menuImages']; ?>
<div class="slider_container">
  <img name="slider" alt="prva slika slajda">
  <button type="button" name="next" class="next">&#10095;</button>
  <button type="button" name="previous" class="previous">&#10094;</button>
  <?php foreach ($images as $image): ?>
    <?php if (isset($image['id_nav_img'])): ?>
      <img data-src="<?php echo $image['img_url']; ?>" class="menu_slider">
    <?php endif; ?>
  <?php endforeach; ?>
</div>
<h1>Menu</h1>
<div class="menu">
  <ul>
    <?php foreach ($items as $item): ?>
      <li>
        <a class="dropdown" href="#<?php echo $item['item_in_menu']; ?>"><?php echo $item['item_in_menu']; ?></a>
      </li>
      <div id="<?php echo lcfirst($item['item_in_menu']); ?>">
        <?php foreach ($products as $product): ?>
          <?php $amount =  isset($product['amount']) ? ' (' . $product['amount'] . ')' : ''; ?>
          <?php if ($product['item_in_menu'] == $item['item_in_menu']): ?>
              <ul class="sub_sub_list">
                <li><?php echo $product['product'] .  $amount ; ?></li>
                <small><?php echo $product['description']; ?></small>
              </ul>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    <?php endforeach; ?>
  </ul>
  <img src="<?php echo $images[0]['img_url']; ?>" alt="coconut tree" class="first_img">
  <img src="<?php echo $images[1]['img_url']; ?>" alt="wine-glas-img" class="second_img">
  <img src="<?php echo $images[2]['img_url']; ?>" alt="wine-glas-img" class="third_img">
</div>
<script type="text/javascript" src="../js/menu.js"></script>
