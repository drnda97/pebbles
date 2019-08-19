<?php

class Event
{
  public function getEvent()
  {
    global $conn;
    $query = 'select * from news_feed';
    $res = $conn->query($query);
    $events = array();
    while($event = $res->fetch_assoc()){
      $events[] = $event;
    }
    return $events;
  }
}
