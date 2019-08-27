<?php

class Text
{
  public function getText($option_name)
  {
    global $conn;
    $query = 'select * from text where option_name = "'.$option_name.'"';
    $res = $conn->query($query);
    $texts = array();
    while($text = $res->fetch_assoc()){
      $texts[] = $text;
    }
    return $texts;
  }
}
