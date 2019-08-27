<?php

class UserController
{
    protected $email = '';
    public function startpage()
    {
      $images = new Image();
      $text = new Text();
      $_SESSION['textStartpage'] = $text->getText('startpage');
      $_SESSION['startImages'] = $images->getImageStartPage();
      View::load('user', 'startpage');
    }
    public function menu()
    {
      $product = new Product();
      $images = new Image();
      $_SESSION['products'] = $product->getProducts();
      $_SESSION['items'] = $product->getMenu();
      $_SESSION['menuImages'] = $images->getImageMenu();
      View::load('user', 'menu');
    }
    public function location()
    {
      $images = new Image();
      $text = new Text();
      $_SESSION['textLocation'] = $text->getText('location');
      $_SESSION['images'] = $images->getImageLocation();
      View::load('user', 'location');
    }
    public function contact()
    {
      $text = new Text();
      $_SESSION['textContact'] = $text->getText('contact');
      View::load('user', 'contact');
    }
    public function newsFeed()
    {
      $user = new Event();
      $images = new Image();
      $_SESSION['events'] = $user->getEvent();
      $_SESSION['feedImage'] = $images->getFeedImage();
      View::load('user', 'news_feed');
    }
    public function noJsScript()
    {
      View::adminlogin('user', 'noJsScript');
    }
    public function mailMe()
    {
      if (!isset($_POST['email'])) {
        var_dump('ne moze ovde');
        header('Location: ' . $_SERVER['HTTP_REFERER']);
      }

      $name = $_POST['name'];
      $email = $_POST['email'];
      $telephone = $_POST['telephone'];
      $msg = wordwrap($_POST['msg'], 500, "\n");
      $subject = "I have a question";
      $headers = 'From:'. $name . "\n";
      $headers .= ' Respond to : ' . $email;

      mail($this->mail, $subject, $msg, $headers);
    }
}
