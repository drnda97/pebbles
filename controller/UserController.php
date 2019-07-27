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
      var_dump($product->getProducts());
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
