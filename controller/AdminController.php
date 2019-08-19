<?php

class AdminController
{
  public $err = 'Something went wrong, please try again';
  // display login for admin page
  public function startpage()
  {
    View::adminlogin('admin', 'login');
  }
  // check admin data in base for security
  public function checkadminlogin()
  {
    var_dump($_POST);
    header('Location: '. WEBROOT .'/admin/adminprimarypage');
  }
  // display start page
  public function adminprimarypage()
  {
    $images = new Admin();
    $_SESSION['images'] = $images->getImages();
    View::adminload('admin','adminstartpage');
  }
  // display hours and location page
  public function adminhoursandlocation()
  {
    View::adminload('admin','adminlocation');
  }
  // display menu page
  // session product is with products from base
  // session item is with item from base
  public function adminmenu()
  {
    $product = new Product();
    $images = new Image();
    $_SESSION['products'] = $product->getProducts();
    $_SESSION['items'] = $product->getMenu();
    View::adminload('admin','adminmenu');
  }
  public function deleteProductInMenu()
  {
    $id = $_GET['id'];
    $admin = new Admin();
    if ($admin->deleteProductFromDatabase($id)) {
      header('Location:'. $_SERVER['HTTP_REFERER']);
    }else{
      header('Location:'. $_SERVER['HTTP_REFERER'] . $this->err);
    }
  }
  // display contact page
  public function admincontact()
  {
    View::adminload('admin','admincontact');
  }
  // display news feed page
  public function adminnewsfeed()
  {
    View::adminload('admin','adminnewsfeed');
  }
  // display update product page
  // getOneProductById function return the product from base
  public function updateproduct()
  {
    $id = $_GET['id'];
    $admin = new Admin();
    $_SESSION['oneProduct'] = $admin->getOneProductById($id);
    View::adminload('admin','updateProduct');
  }
  //update product in base
  public function updateProductInMenu()
  {
    if (!isset($_POST)) {
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    $id = $_GET['id'];
    var_dump($id);
    $product = trim($_POST['product'] != '') ? $_POST['product'] : header('Location: ' . $_SERVER['HTTP_REFERER']);
    $price = trim($_POST['price'] != '') ? $_POST['price'] : header('Location: ' . $_SERVER['HTTP_REFERER']);
    $description = trim($_POST['description'] != '') ? $_POST['description'] : '';
    $amount = ($_POST['amount'] != '') ? $_POST['amount'] : '';

    $admin = new Admin();
    if ($admin->updateProductInBase($product, $price, $description, $amount, $id)) {
      header('Location: '. WEBROOT .'/admin/adminmenu');
    }else{
      header('Location: ' . $_SERVER['HTTP_REFERER'] . $this->err);
    }
  }
  // insert new product in base
  public function insertNewProduct()
  {
    if (!isset($_POST)){
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    $itemInMenuId = $_POST['item_select'];
    $product = trim($_POST['product'] != '') ? $_POST['product'] : header('Location: ' . $_SERVER['HTTP_REFERER']);
    $price = trim($_POST['price'] != '') ? $_POST['price'] : header('Location: ' . $_SERVER['HTTP_REFERER']);
    $description = trim($_POST['description'] != '') ? $_POST['description'] : '';
    $amount = ($_POST['amount'] != '') ? $_POST['amount'] : '';

    $admin = new Admin();
    //Check if product is written in base
    if($admin->insertNewProductInBase($product, $description, $price, $amount)){
      //If it's written the get it from base, we need id so we can write it in another table
      $newProduct = $admin->getOneProductByName($product);
      //write in menu_list table so it is displayed in menu
      $admin->insertInMenu($newProduct['id'], $itemInMenuId);
    }else{
      header('Location: ' . $_SERVER['HTTP_REFERER'] . $this->err);
    }
      header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
  // insert new item in item_in_menu table
  public function insertNewItem()
  {
    if (!isset($_POST['item_in_menu'])) {
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    $newItemInMenu = $_POST['item_in_menu'];
    $admin = new Admin();
    //Check if item is written in the item_in_menu table
    if ($admin->insertNewItemInBase($newItemInMenu)) {
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    }else{
      header('Location: ' . $_SERVER['HTTP_REFERER'] . $this->err);
    }
  }
  // delete item from base
  public function deleteItemInMenu()
  {
    $id = $_GET['id'];
    $admin = new Admin();
    //Check if item is deleted from the item_in_menu table
    if ($admin->deleteItemFromBase($id)) {
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    }else{
      header('Location: ' . $_SERVER['HTTP_REFERER'] . $this->err);
    }
  }
  public function updateItem()
  {
    $id = $_GET['id'];
    $admin = new Admin();
    $_SESSION['oneItem'] = $admin->getOneItemById($id);
    View::adminload('admin','updateItem');
  }
  public function updateItemInMenu()
  {
    if (!isset($_POST['updateBtn'])) {
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    $id = $_GET['id'];
    $updateItem = $_POST['update_item'];
    $admin = new Admin();
    if ($admin->updateItemInBase($updateItem, $id)) {
      header('Location: '. WEBROOT .'/admin/adminmenu');
    }else{
      header('Location: ' . $_SERVER['HTTP_REFERER'] . $this->err);
    }
  }
  public function deleteImage()
  {
    if (!isset($_GET['id'])) {
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    $id = $_GET['id'];
    $admin = new Admin();
    if ($admin->deleteImageFromBase($id)) {
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    }else{
      header('Location: ' . $_SERVER['HTTP_REFERER'] . $this->err);
    }
  }
  public function updateImage()
  {
    $id = $_GET['id'];
    $admin = new Admin();
    $_SESSION['oneImg'] = $admin->getImage($id);
    View::adminload('admin','updateImage');
  }
  public function updatingImage()
  {
    if (!isset($_GET['id'])) {
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    $id = $_GET['id'];
    if ($_FILES['update_image']['error'] === 4) {
      header('Location: ' . $_SERVER['HTTP_REFERER'] . $this->err);
    }
    //finish uploading new image and updating the old one;
    $uploadsDir = '../pebbles';
    $fileSize = $_FILES['update_image']['size'];
    $fileTmpName = $_FILES['update_image']['tmp_name'];
    $fileExt = explode('.', $_FILES['update_image']['name']);
    $imgExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png', 'webp');

    if (!in_array($imgExt, $allowed)) {
      header('Location: ' . $_SERVER['HTTP_REFERER'] . '?err=This extension is not allowed');
    }
    if ($fileSize > 1000000) {
      header('Location: ' . $_SERVER['HTTP_REFERER'] . '?err=The image is too big, please enter the smaller one');
    }

    $imgNewName = time() . '.' . $imgExt;
    $imgNewDestination = $uploadsDir . '/' . $imgNewName;
    if (!$result = move_uploaded_file($fileTmpName,  $imgNewDestination)) {
      header('Location: ' . $_SERVER['HTTP_REFERER'] . $this->err);
    }
    $admin = new Admin();
    if (!$admin->updateImageInBase($id, $imgNewDestination)) {
      header('Location: ' . $_SERVER['HTTP_REFERER'] . $this->err);
    }else{
      header('Location: '. WEBROOT .'/admin/adminprimarypage');
    }
  }
  public function createEvent()
  {
    if (!isset($_POST['eventSubmit'])) {
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    if ($_FILES['eventImg']['error'] > 0) {
      header('Location: ' . $_SERVER['HTTP_REFERER'] . $this->err);
    }

    $titleEvent = trim($_POST['titleEvent']);
    $uploadsDir = '../pebbles/NewsFeed/';
    $eventImgTmpName = $_FILES['eventImg']['tmp_name'];
    $fileExt = explode('.', $_FILES['eventImg']['name']);
    $evetImgExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png', 'webp');

    if (!in_array($evetImgExt, $allowed)) {
      header('Location: ' . $_SERVER['HTTP_REFERER'] . '?err=This extension is not allowed');
    }

    $eventImgNewName = time() . '.' . $evetImgExt;
    $eventImageNewDestination = $uploadsDir . $eventImgNewName;
    if (!move_uploaded_file($eventImgTmpName, $eventImageNewDestination)) {
      header('Location: '. WEBROOT .'/admin/adminnewsfeed' .  $this->err);
    }
    $admin = new Admin();
    if (!$admin->uploadEvent($eventImageNewDestination, $titleEvent)) {
      header('Location: ' . $_SERVER['HTTP_REFERER'] . $this->err);
    }else{
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
  }
}
