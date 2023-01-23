<?php require '../header.php' ?>
<?php
  $postcode = $_REQUEST['postcode'];
  if (preg_match('/^[0-9]{7}$/', $postcode)) {
    echo '郵便番号', $postcode, 'を確認しました。';
  } else {
    echo $postcode, 'は適切な番号ではありません。';
  }
//ハイフンあり
  $post_code = $_REQUEST['post-code'];
  if (preg_match('/^[0-9]{3}-[0-9]{4}$/', $post_code)) {
    echo '郵便番号', $post_code, 'を確認しました。';
  } else {
    echo $post_code, 'は適切な番号ではありません。';
  }
?>
<?php require '../footer.php' ?>