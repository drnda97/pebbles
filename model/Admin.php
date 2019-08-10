<?php

class Admin
{

  public function deleteProductFromDatabase($id)
  {
    global $conn;
    $query1 = 'delete from menu_list where id_product = '.$id.'';
    $query2 = 'delete from products where id = '.$id.'';
    $res1 = $conn->query($query1);
    $res2 = $conn->query($query2);
    return $res2;
  }
  public function getOneProductById($id)
  {
    global $conn;
    $query = 'select * from products where id = ' .$id.'';
    $res = $conn->query($query);
    return $res->fetch_assoc();
  }
  public function getOneProductByName($product)
  {
    global $conn;
    $query = 'select * from products where product = "' .$product.'"';
    $res = $conn->query($query);
    return $res->fetch_assoc();
  }
  public function insertNewProductInBase($product, $description, $price, $amount)
  {
    global $conn;

    $product = mysqli_real_escape_string($conn, $product);
    $description = mysqli_real_escape_string($conn, $description);
    $price = mysqli_real_escape_string($conn, $price);
    $amount = mysqli_real_escape_string($conn, $amount);
    if ($amount != '') {
      $query = 'insert into products values (null, "'.$product.'", "'.$description.'", '.$price.', '.$amount.')';
    }else{
      $query = 'insert into products values (null, "'.$product.'", "'.$description.'", '.$price.', null)';
    }
    $res = $conn->query($query);
    return $res;
  }
  public function insertInMenu($id_product, $item_in_menu_id)
  {
    global $conn;

    $id_product = mysqli_real_escape_string($conn, $id_product);
    $item_in_menu_id = mysqli_real_escape_string($conn, $item_in_menu_id);

    $query = 'insert into menu_list values (null, '.$id_product.', '.$item_in_menu_id.')';
    $res = $conn->query($query);
    return $res;
  }
}
