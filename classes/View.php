<?php

class View
{
  public $data = array();
  public static function  load($folder,$file)
  {
    require_once('./view/includes/header.php');
    require_once('./view/'.$folder.'/'.$file.'.php');
    require_once('./view/includes/footer.php');
  }
  public static function  adminlogin($folder,$file)
  {
    require_once('./view/'.$folder.'/'.$file.'.php');
  }
  public static function  adminload($folder,$file)
  {
    require_once('./view/includes/admin/header.php');
    require_once('./view/'.$folder.'/'.$file.'.php');
  }
}
