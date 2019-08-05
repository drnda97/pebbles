<?php

class UserController
{
    public function startpage()
    {
      View::load('user', 'startpage');
    }
    public function menu()
    {
      $product = new Product();
      $_SESSION['products'] = $product->getProducts();
      $_SESSION['items'] = $product->getMenu();
      View::load('user', 'menu');
    }
    public function location()
    {
      View::load('user', 'location');
    }
    public function contact()
    {
      View::load('user', 'contact');
    }
    public function newsFeed()
    {
      View::load('user', 'news_feed');
    }
}
