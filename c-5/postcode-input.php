<?php require '../header.php' ?>
<form action="postcode-output.php" method="post">
  <p>7桁の郵便番号をハイフンなしで入力してください。</p>
  <input type="textbox" name="postcode">
  <!-- ハイフンあり -->
  <p>7桁の郵便番号をハイフンありで入力してください。</p>
  <input type="textbox" name="post-code">
  <p><input type="submit" value="確定"></p>
</form>
<?php require '../footer.php' ?>