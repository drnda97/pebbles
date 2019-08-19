<?php $product = $_SESSION['oneProduct'] ?>
<h1>Insert new values for Product</h1>
<form name ="updateproduct" action="http://localhost/pebbles/admin/updateProductInMenu?id=<?php echo $product['id'];; ?>" method="post">
    <div class="form-controll">
      <label for="product">product</label>
      <input type="text" name="product" value="<?php echo $product['product']; ?>">
      <small>*</small>
    </div>
    <div class="form-controll">
      <label for="price">price</label>
      <input type="text" name="price" value="<?php echo $product['price']; ?>">
      <small>*</small>
    </div>
    <div class="form-controll">
      <label for="description">description</label>
      <input type="text" name="description" value="<?php echo $product['description']; ?>">
    </div>
    <div class="form-controll">
      <label for="amount">amount</label>
      <input type="text" name="amount" value="<?php echo $product['amount']; ?>">
    </div>
    <input type="button" name="button" value="Submit">
</form>
<script src="../js/admin/updateProduct.js"></script>
