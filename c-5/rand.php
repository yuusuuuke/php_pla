<?php require '../header.php'?>
<?php
  echo rand(),'<br>';
  echo getrandmax(),'<br>';
  echo rand(1, 6),'<br>';//rand(1, 6) -> 1~6の数字をランダムに表示
?>

<!-- 画像をランダムに表示 -->
<?php
  echo '<img alt="image" src="item', rand(0, 2), '.png">';
?>
<?php require '../footer.php'?>