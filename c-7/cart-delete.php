<?php session_start(); ?>
<?php require '../header.php'; ?>
<?php require '../chapter7/menu.php'; ?>
<?php
  unset($_SESSION['product'][$_REQUEST['id']]);
  echo 'カートから商品を削除しまました。';
  echo '<hr>';
  require 'cart.php';
?>
<?php require '../footer.php'; ?>