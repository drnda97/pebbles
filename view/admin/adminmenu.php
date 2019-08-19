<?php $products = $_SESSION['products']; ?>
<?php $items = $_SESSION['items']; ?>
<h1>Menu list</h1>
<table border="1" cellpadding="15" cellspacing="0">
  <thead>
    <tr>
      <th>item_in_menu</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($items as $item): ?>
      <tr>
        <td><?php echo $item['item_in_menu']; ?></td>
        <td><a href="http://localhost/pebbles/admin/deleteItemInMenu?id=<?php echo $item['id']; ?>">delete</a></td>
        <td><a href="http://localhost/pebbles/admin/updateItem?id=<?php echo $item['id']; ?>" class="updateItem">update</a></td>
      </tr>
    <?php endforeach; ?>
    <tr>
      <td colspan="3"><a href="#" class="item_in_menu_btn">Add new +</a></td>
    </tr>
    <tr class="item secret">
      <form name="newItemForm" action="http://localhost/pebbles/admin/insertNewItem" method="post">
        <td><legend>Enter Item Name</legend></td>
        <td><input type="text" name="item_in_menu"></td>
        <td><input type="button" name="itemBtn" value="Submit"></td>
      </form>
    </tr>
  </tbody>
</table>
<h1>Products in menu</h1>
<table border="1" cellpadding="15" cellspacing="0">
  <thead>
    <tr>
      <th>product</th>
      <th>description</th>
      <th>price</th>
      <th>amount</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($products as $product): ?>
        <tr>
          <td><?php echo $product['product']; ?></td>
          <td><?php echo $product['description']; ?></td>
          <td><?php echo $product['price']; ?></td>
          <td><?php echo $product['amount']; ?></td>
          <td><a href="http://localhost/pebbles/admin/deleteProductInMenu?id=<?php echo $product['id']; ?>">delete</a></td>
          <td><a href="http://localhost/pebbles/admin/updateproduct?id=<?php echo $product['id']; ?>">update</a></td>
        </tr>
      <?php endforeach; ?>
      <tr>
        <td colspan="6"><a href="#" class="addNewBtn">Add new +</a></td>
      </tr>
      <tr class="product secret">
        <form name="addNewForm" action="http://localhost/pebbles/admin/insertNewProduct" method="post">
          <td><input type="text" name="product" placeholder="Enter product name"></td>
          <td><input type="number" name="price" placeholder="Enter price"></td>
          <td><input type="text" name="description" placeholder="Enter description"></td>
          <td><input type="number" name="amount" placeholder="Enter amount"></td>
          <td>
            <select class="" name="item_select">
            <?php foreach ($items as $item): ?>
              <option value="<?php echo $item['id'];  ?>"><?php echo $item['item_in_menu'];  ?></option>
            <?php endforeach; ?>
          </select>
          </td>
          <td><input type="button" name="btn" value="Submit"></td>
        </form>
      </tr>
  </tbody>
</table>
<script src="../js/admin/menu.js"></script>
