<?php $images = $_SESSION['images']; ?>
<?php $options = $_SESSION['options']; ?>
<?php $texts = $_SESSION['startpageText']; ?>
<h1>Dobrodosao Admine</h1>
<table border="1" cellpadding="15" cellspacing="0">
  <thead>
    <tr>
      <th>Image</th>
      <th>Page</th>
      <th>Slider Img</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($images as $image): ?>
      <tr>
        <td><img src="<?php echo $image['img_url']; ?>" class="admin_image"></td>
        <td><?php echo $image['option_name']; ?></td>
        <?php if (isset($image['id_nav_img'])): ?>
          <td><?php echo 'Slider image for '. $image['option_name']; ?></td>
        <?php else: ?>
          <td>This is not slider picture</td>
        <?php endif; ?>
        <td><a href="<?php echo WEBROOT; ?>/admin/deleteImage?id=<?php echo $image['id']; ?>">delete</a></td>
        <td><a href="<?php echo WEBROOT; ?>/admin/updateImage?id=<?php echo $image['id']; ?>">update</a></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<h1>Pages</h1>
<table border="1" cellpadding="15" cellspacing="0">
  <thead>
    <tr>
      <th>Option name</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($options as $option): ?>
      <tr>
        <td><?php echo $option['option_name']; ?></td>
        <td><a href="<?php echo WEBROOT; ?>/admin/deleteOption?id=<?php echo $option['id']; ?>">delete from nav</a></td>
        <td><a href="<?php echo WEBROOT; ?>/admin/updateOption?id=<?php echo $option['id']; ?>">change name</a></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<h1>Text on Startpage</h1>
<table border="1" cellpadding="15" cellspacing="0">
  <thead>
    <tr>
      <th>Option name</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($texts as $text): ?>
      <tr>
        <td><?php echo $text['text']; ?></td>
        <td><a href="<?php echo WEBROOT; ?>/admin/deleteText?id=<?php echo $text['id']; ?>">delete from page</a></td>
        <td><a href="<?php echo WEBROOT; ?>/admin/Text?id=<?php echo $text['id']; ?>">change Text</a></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
