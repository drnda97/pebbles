<?php $product = $_SESSION['oneProduct'] ?>
<h1>Insert new values for Product</h1>
<form name ="updateproduct" action="http://localhost/pebbles/admin/updateProductInMenu?id=1" method="post">
    <div class="form-controll">
      <label> product </label>
      <input type="text" name="product" value="<?php echo $product['product']; ?>">
      <small>*</small>
    </div>
    <div class="form-controll">
      <label> description </label>
      <input type="text" name="product" value="<?php echo $product['description']; ?>">
      <small>*</small>
    </div>
    <div class="form-controll">
      <label> price </label>
      <input type="text" name="product" value="<?php echo $product['price']; ?>">
      <small>*</small>
    </div>
    <div class="form-controll">
      <label> amount </label>
      <input type="text" name="product" value="<?php echo $product['amount']; ?>">
    </div>
    <input type="button" name="button" value="Submit">
</form>
<script src="../js/admin/updateProduct.js"></script>
