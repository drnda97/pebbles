<?php

foreach (glob('./classes/*') as $class_name) {
	require_once($class_name);
}

$router = new Router;

// var_dump($_GET);
