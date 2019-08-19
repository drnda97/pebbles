<?php $images = $_SESSION['images']; ?>
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
        <td><a href="http://localhost/pebbles/admin/deleteImage?id=<?php echo $image['id']; ?>">delete</a></td>
        <td><a href="http://localhost/pebbles/admin/updateImage?id=<?php echo $image['id']; ?>">update</a></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
