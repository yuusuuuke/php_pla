<?php require "../header.php"?>
<?php
  switch ($_REQUEST['meal']) {
    case '和食' :
      echo '焼き魚、煮物、味噌汁、ご飯、果物';
      break;
    case '洋食' :
      echo 'ジュース、オムレツ、ハッシュポテト、パン、コーヒー';
      break;
    case '中華' :
      echo '春巻き、餃子、卵スープ、炒飯、杏仁豆腐';
      break;
  }
?>

<?php require "../footer.php"?>