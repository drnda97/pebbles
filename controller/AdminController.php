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
    View::adminload('admin','adminmenu');
  }
  public function admincontact()
  {
    View::adminload('admin','admincontact');
  }
}
