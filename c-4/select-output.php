<?php require "../header.php"?>
<?php
  switch ($_REQUEST['seat']) {
    case '指定席' :
      echo '追加料金は、1200円です';
      break;
    case 'グリーン席' :
      echo '追加料金は,2500円です';
      break;
    default:
      echo '追加料金はありません';
      break;
  }
?>
<?php require "../footer.php"?>