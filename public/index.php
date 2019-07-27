<?php

foreach (glob('../classes/*') as $class_name) {
	require_once($class_name);
}
foreach (glob('../model/*') as $model_name) {
	require_once($model_name);
}

require_once('../db.php');

$router = new Router;
