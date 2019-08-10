<?php

class AdminController
{
  public function startpage()
  {
    View::adminlogin('admin', 'login');
  }
  public function checkadminlogin()
  {
    var_dump($_POST);
    header('Location: http://localhost/pebbles/admin/adminprimarypage');
  }
  public function adminprimarypage()
  {
    View::adminload('admin','adminstartpage');
  }
  public function adminhoursandlocation()
  {
    View::adminload('admin','adminlocation');
  }
  public function adminmenu()
  {
    $product = new Product();
    $images = new Image();
    $_SESSION['products'] = $product->getProducts();
    $_SESSION['items'] = $product->getMenu();
    $_SESSION['images'] = $images->getImageMenu();
    View::adminload('admin','adminmenu');
  }
  public function deleteProductInMenu()
  {
    $id = $_GET['id'];
    $admin = new Admin();
    $admin->deleteProductFromDatabase($id);
    header('Location:'. $_SERVER['HTTP_REFERER']);
  }
  public function admincontact()
  {
    View::adminload('admin','admincontact');
  }
  public function updateproduct()
  {
    $id = $_GET['id'];
    $admin = new Admin();
    $_SESSION['oneProduct'] = $admin->getOneProductById($id);
    View::adminload('admin','updateProduct');
  }
  public function updateProductInMenu()
  {
    //FINISH UPDATE AND THEN GO ON IMAGES AND PAGES(OPTIONS);
    var_dump($_GET);
    var_dump($_POST);
  }
  public function insertNewProduct()
  {
    if (!isset($_POST)){
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    $item_in_menu_id = $_POST['item_select'];
    $product = $_POST['product'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $amount = ($_POST['amount'] != '') ? $_POST['amount'] : '';
    $admin = new Admin();
    if($admin->insertNewProductInBase($product, $description, $price, $amount)){
      $newProduct = $admin->getOneProductByName($product);
      $admin->insertInMenu($newProduct['id'], $item_in_menu_id);
    }
     header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
}
