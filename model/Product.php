<?php

class Product
{
  public function getProducts()
  {
    global $conn;
    $query = 'select products.product, products.description, products.price, products.amount, item_in_menu.item_in_menu ';
    $query .= 'from products ';
    $query .= 'join menu_list ';
    $query .= 'on products.id = menu_list.id_product ';
    $query .= 'join item_in_menu ';
    $query .= 'on item_in_menu.id = menu_list.id_item_in_menu;';
    $res = $conn->query($query);
    $products = array();
    while($product = $res->fetch_assoc()){
      $products[] = $product;
    }
    return $products;
  }
}
