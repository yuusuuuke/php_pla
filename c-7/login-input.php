<?php require '../header.php'; ?>
<?php require '../chapter7/menu.php'; ?>
<form action="login-output.php" method="post">
  ログイン名<input type="text" name="login"><br>
  パスワード<input type="text" name="password"><br>
  <input type="submit" value="ログイン">
</form>
<?php require '../footer.php'; ?>