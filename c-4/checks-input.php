<?php require '../header.php'; ?>

<p>ご興味のある商品ジャンルを選んでください</p>
<form action="checks-output.php" method="post">
  <?php
    $genre = [ 'カメラ', 'パソコン', '時計', '家電', '書籍', '文房具', '食費' ];
    foreach ($genre as $item) {
      echo '<p>'; //配列の表示を縦にするため
      echo '<input type="checkbox" name="genre[]" value="', $item, '">';
      //name属性の[]-> 複数値を取得するため（取得した値はarrに）
      echo $item;
      echo '</p>';
    }
  ?>
  <p><input type='submit' value='確定'></p>
</form>
<?php require "../footer.php"; ?>


