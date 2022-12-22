<?php require '../header.php'; ?>
<?php
  echo $_REQUEST['price'].'円';
  echo 'x';
  echo $_POST['count'].'個';
  echo '=';
  echo $_POST['price']*$_POST['count'].'円';
?>


<?php require '../footer.php'; ?>