<?php $image = $_SESSION['oneImg']; ?>
<h1>Insert new image</h1>
<form name="updateImage" action="<?php echo WEBROOT; ?>/admin/updatingImage?id=<?php echo $image['id']; ?>" method="post" enctype="multipart/form-data">
  <input type="file" name="update_image">
  <input type="submit" name="submit" value="Submit">
</form>
<h2>Current Image</h2>
<img src="<?php echo $image['img_url']; ?>" alt="current_img">
