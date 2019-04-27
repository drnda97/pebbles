<?php

class Request
{
  public function getUrl()
  {
    if (isset($_GET['url'])) {
      return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
    }
  }
}
