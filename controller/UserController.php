<?php

class UserController
{
    public function startpage()
    {
      $images = new Image();
      $_SESSION['images'] = $images->getImageStartPage();
      View::load('user', 'startpage');
    }
    public function menu()
    {
      $product = new Product();
      $images = new Image();
      $_SESSION['products'] = $product->getProducts();
      $_SESSION['items'] = $product->getMenu();
      $_SESSION['images'] = $images->getImageMenu();
      View::load('user', 'menu');
    }
    public function location()
    {
      $images = new Image();
      $_SESSION['images'] = $images->getImageLocation();
      View::load('user', 'location');
    }
    public function contact()
    {
      View::load('user', 'contact');
    }
    public function newsFeed()
    {
      $user = new Event();
      $_SESSION['events'] = $user->getEvent();
      View::load('user', 'news_feed');
    }
}
