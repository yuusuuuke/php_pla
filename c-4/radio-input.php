<?php require "../header.php"?>
<p>お食事を選択してください。</p>
<form action="radio-output.php" method="post">
  <p><input type="radio" name="meal" value="和食">和食</p>
  <p><input type="radio" name="meal" value="洋食">洋食</p>
  <p><input type="radio" name="meal" value="中華">中華</p>
  <input type="submit" value="確定">
</form>
<?php require "../footer.php"?>