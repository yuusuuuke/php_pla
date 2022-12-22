<?php require '../header.php'; ?>

<!-- input -->
<form action='price_output.php' method='post'>
  単価<input type='text' name='price'>円
  x
  個数<input type='text' name='count'>個
  <input type='submit' value='計算'>
</form>


<?php require '../footer.php'; ?>