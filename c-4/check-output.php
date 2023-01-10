<?php require "../header.php"?>
  <?php
    if (isset($_REQUEST['mail'])) {
      echo 'お買い得情報おのメールをお送りさせていただきます。';
    } else {
      echo 'お買い得メールの情報はお送りいたしません。';
    }
  ?>
<?php require "../footer.php"?>