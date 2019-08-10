<?php

class Image
{
  public function getImageStartPage()
  {
    global $conn;
    $query = 'select img_url from images where id_option = 5';
    $res = $conn->query($query);
    $images = array();
    while($image = $res->fetch_assoc()){
      $images[] = $image;
    }
      return $images;
    }
  public function getImageMenu()
  {
    global $conn;
    $query = 'select img_url from images where id_option = 2';
    $res = $conn->query($query);
    $images = array();
    while($image = $res->fetch_assoc()){
      $images[] = $image;
    }
      return $images;
    }
}
