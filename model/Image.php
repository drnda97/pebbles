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
    $query = 'select * from images where id_option = 2';
    $res = $conn->query($query);
    $images = array();
    while($image = $res->fetch_assoc()){
      $images[] = $image;
    }
      return $images;
  }
  public function getImageLocation()
  {
    global $conn;
    $query = 'select * from images where id_option = 1';
    $res = $conn->query($query);
    $images = array();
    while($image = $res->fetch_assoc()){
      $images[] = $image;
    }
      return $images;
  }
  public function getFeedImage()
  {
    global $conn;
    $query = 'select * from images where id_option = 4';
    $res = $conn->query($query);
    $images = array();
    while($image = $res->fetch_assoc()){
      $images[] = $image;
    }
      return $images;
  }
}
