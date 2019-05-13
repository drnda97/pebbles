<?php

class Router
{
  public $controller = 'UserController';
  public $method = 'startpage';
  public $params = array();
  public $get_url;
  public function __construct()
  {
    $request = new Request;
    $this->get_url = $request->getUrl();
    $this->availableRoutes();
  }
  private function availableRoutes()
  {
    $controller_name = ucfirst($this->get_url[0]) . 'Controller';
    if (file_exists('./controller/'.$controller_name.'.php')) {
      $this->controller = $controller_name;
      unset($this->get_url[0]);
    }
    require_once('./controller/' . $this->controller .'.php');
    $this->controller = new $this->controller;
    if (isset($this->get_url[1])) {
      if (method_exists($this->controller, $this->get_url[1])) {
        $this->method = $this->get_url[1];
        unset($this->get_url[1]);
      }
    }
      $this->params = $this->get_url ? array_values($this->get_url) : [];
      call_user_func_array([$this->controller, $this->method], $this->params);
  }
}
