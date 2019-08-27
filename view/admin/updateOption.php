<?php $item = $_SESSION['oneOption']; ?>
<h1>Enter new Name for Item</h1>
<form name="updateOptionForm" action="<?php echo WEBROOT; ?>/admin/updateOptionName?id=<?php echo $item['id']; ?>" method="post">
  <td><input type="text" name="update_option" value="<?php echo $item['option_name']; ?>"></td>
  <td><input type="submit" name="updateBtn" value="Submit"></td>
</form>
