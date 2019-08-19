<?php

class Admin
{
  // delete product from menu_list table because of foreign key and from product table
  public function deleteProductFromDatabase($id)
  {
    global $conn;
    $query1 = 'delete from menu_list where id_product = '.$id.'';
    $query2 = 'delete from products where id = '.$id.'';
    $res1 = $conn->query($query1);
    $res2 = $conn->query($query2);
    return $res2;
  }
  // get product by id
  public function getOneProductById($id)
  {
    global $conn;
    $query = 'select * from products where id = ' .$id.'';
    $res = $conn->query($query);
    return $res->fetch_assoc();
  }
  // get product by name
  public function getOneProductByName($product)
  {
    global $conn;
    //escape strings for security
    $product = mysqli_real_escape_string($conn, $product);
    $query = 'select * from products where product = "' .$product.'"';
    $res = $conn->query($query);
    return $res->fetch_assoc();
  }
  // delete product in base
  public function insertNewProductInBase($product, $description, $price, $amount)
  {
    global $conn;
    //escape strings for security
    $product = mysqli_real_escape_string($conn, $product);
    $description = mysqli_real_escape_string($conn, $description);
    $price = mysqli_real_escape_string($conn, $price);
    $amount = mysqli_real_escape_string($conn, $amount);
    // checking if amount isn't empty string so we write the amount, if is empty  we write null
    if ($amount = '') {
      $query = 'insert into products values (null, "'.$product.'", "'.$description.'", '.$price.', null)';
    }else if ($description = '') {
      $query = 'insert into products values (null, "'.$product.'", null, '.$price.', '.$amount.')';
    }else if ($amount = '' && $description = '') {
      $query = 'insert into products values (null, "'.$product.'", null, '.$price.', null)';
    }else{
      $query = 'insert into products values (null, "'.$product.'", "'.$description.'", '.$price.', '.$amount.')';
    }
    $res = $conn->query($query);
    return $res;
  }
  // delete product and item in menu_list table
  public function insertInMenu($id_product, $item_in_menu_id)
  {
    global $conn;
    //escape strings for security
    $id_product = mysqli_real_escape_string($conn, $id_product);
    $item_in_menu_id = mysqli_real_escape_string($conn, $item_in_menu_id);
    $query = 'insert into menu_list values (null, '.$id_product.', '.$item_in_menu_id.')';
    $res = $conn->query($query);
    return $res;
  }
  // insert new item in base
  public function insertNewItemInBase($newItemInMenu)
  {
    global $conn;
    // escape string for security
    $newItemInMenu = mysqli_real_escape_string($conn, $newItemInMenu);
    $query = 'insert into item_in_menu values (null, "'.$newItemInMenu.'")';
    $res = $conn->query($query);
    return $res;
  }
  // delete item from base
  public function deleteItemFromBase($id)
  {
    global $conn;
    $query = 'delete from item_in_menu where id = ' .$id.'';
    $res = $conn->query($query);
    return $res;
  }
  // update item in item_in_menu table
  public function updateItemInBase($updateItem, $id)
  {
    global $conn;
    // escape string for security
    $updateItem = mysqli_real_escape_string($conn, $updateItem);
    $query = 'update item_in_menu set item_in_menu = "'. $updateItem .'" where id = '.$id.'';
    $res = $conn->query($query);
    return $res;
  }
  // get one item from base by id
  public function getOneItemById($id)
  {
    global $conn;
    $query = 'select * from item_in_menu where id = ' .$id.'';
    $res = $conn->query($query);
    return $res->fetch_assoc();
  }
  // method for updating product in base
  public function updateProductInBase($product, $price, $description, $amount, $id)
  {
    global $conn;
    // escape string for security
    $product = mysqli_real_escape_string($conn, $product);
    $price = mysqli_real_escape_string($conn, $price);
    $description = mysqli_real_escape_string($conn, $description);
    $amount = mysqli_real_escape_string($conn, $amount);

    if ($amount == '' && $description != '') {
      $query = 'update products set product = "'.$product.'", price = '.$price.', description = "'.$description.'", amount = null where id = ' .$id. '';
    }else if ($description == '' && $amount != '') {
      $query = 'update products set product = "'.$product.'", price = '.$price.', description = null, amount = '.$amount.' where id = ' .$id. '';
    }else if ($amount == '' && $description == '') {
      $query = 'update products set product = "'.$product.'", price = '.$price.', description = null, amount = null where id = ' .$id. '';
    }else{
      $query = 'update products set product = "'.$product.'", price = '.$price.', description = "'.$description.'", amount = '.$amount.' where id = ' .$id. '';
    }
    $res = $conn->query($query);
    return $res;
  }
  // method to get all images from base with option names so admin can know on what page is img
  public function getImages()
  {
    global $conn;
    $query = 'select images.id, images.img_url, images.id_nav_img, options.option_name ';
    $query .= 'from images ';
    $query .= 'join options ';
    $query .= 'on options.id = images.id_option';
    $res = $conn->query($query);
    $images = array();
    while($image = $res->fetch_assoc()){
      $images[] = $image;
    }
    return $images;
  }
  // get one image from base
  public function getImage($id)
  {
    global $conn;
    $query = 'select * from images where id = '.$id.'';
    $res = $conn->query($query);
    return $res->fetch_assoc();
  }
  // delete image from base
  public function deleteImageFromBase($id)
  {
    global $conn;
    $query = 'delete from images where id = '.$id.'';
    $res = $conn->query($query);
    return $res;
  }
  public function updateImageInBase($id, $imgNewDestination)
  {
    global $conn;
    $imgNewDestination = mysqli_real_escape_string($conn, $imgNewDestination);
    $query = 'update images set img_url = "'.$imgNewDestination.'" where id = '.$id.'';
    $res = $conn->query($query);
    return $res;
  }
  public function uploadEvent($eventImageNewDestination, $title)
  {
    global $conn;
    $title = mysqli_real_escape_string($conn, $title);
    $eventImageNewDestination = mysqli_real_escape_string($conn, $eventImageNewDestination);
    $query = 'insert into news_feed values(null, "'.$eventImageNewDestination.'", "'.$title.'")';
    $res = $conn->query($query);
    return $res;
  }
}
