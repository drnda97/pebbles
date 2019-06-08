<?php

class AdminController
{
  public function startpage()
  {
    View::adminlogin('admin', 'login');
  }
}
