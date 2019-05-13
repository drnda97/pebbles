<?php

class UserController
{
    public function startpage()
    {
      View::load('user', 'startpage');
    }
    public function menu()
    {
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
}
