<?php require '../header.php'?>
<?php
  echo '<p>アメリカ</p>';
  date_default_timezone_set('America/Los_Angeles');
  echo '<p>', date('Y/m/d H:i:s'), '</p>';
  echo '<p>', date('Y年m月d日 H時i分s秒'), '</p>';

  echo '<p>日本</p>';
  date_default_timezone_set('Japan');
  echo '<p>', date('Y/m/d H:i:s'), '</p>';
  echo '<p>', date('Y年m月d日 H時i分s秒'), '</p>';
?>
<?php require '../footer.php'?>