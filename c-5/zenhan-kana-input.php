<?php require '../header.php'?>
<p>お名前の振り仮名を入力してください。</p>
<form action="zenhan-kana-output.php" method="post">
  <input type="text" name="furigana" >
  <input type="submit" value="確定">
</form>
<?php require '../footer.php'?>