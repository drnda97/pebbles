<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pebbles</title>
    <?php if ($_GET['url'] === 'user/menu'): ?>
      <script type="text/javascript" src="../js/menu.js"></script>
    <?php elseif($_GET['url'] === 'user/location') : ?>
      <script type="text/javascript" src="../js/location.js"></script>
    <?php endif; ?>
    <script type="text/javascript" src="../js/main.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/bug.css">
  </head>
  <body>
    <?php require_once('navbar.php'); ?>
