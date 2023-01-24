<?php require '../header.php'?>
<?php
  $file = 'board.text';
  if (file_exists($file)) {
    $board = json_decode(file_get_contents($file));
  }
  $board[] = htmlspecialchars($_REQUEST['messege']);
  file_put_contents($file, json_encode($board));
  foreach ($board as $messege) {
    echo '<p>', $messege, '</p><hr>';
  }
?>
<?php require '../footer.php'?>