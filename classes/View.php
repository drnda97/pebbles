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
}
