<?php

$conn = new mysqli('127.0.0.1', 'root', '', 'pebbles');

$conn->query("SET NAMES utf8");
$conn->query("SET CHARACTER SET utf8");
$conn->query("SET COLLATION_CONNECTION='utf8_general_ci'");

define("WEBROOT", "http://www.pebbles.com");
