<?php $item = $_SESSION['oneItem']; ?>
<h1>Enter new Name for Page</h1>
<form name="updateItemForm" action="<?php echo WEBROOT; ?>/admin/updateItemInMenu?id=<?php echo $item['id']; ?>" method="post">
  <td><input type="text" name="update_item" value="<?php echo $item['item_in_menu']; ?>"></td>
  <td><input type="submit" name="updateBtn" value="Submit"></td>
</form>
