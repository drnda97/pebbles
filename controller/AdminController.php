<?php

class AdminController
{
  public function startpage()
  {
    View::load('admin', 'login');
  }
}
