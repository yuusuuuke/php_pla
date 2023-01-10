<?php require "../header.php"?>
<!-- while文でループ -->
<p>while文セレクト</p>
<form action="select-for-output.php" method="post">
  <select name="count">
    <?php 
      $i=0;
      while ($i<10) {
        echo '<option value="',$i,'">',$i,'</option>';
        $i ++ ;
      }
    ?>
  </select>
  <input type="submit" value="確定">
</form>

<!-- for文でループ -->
<p>for文セレクト</p>
<form action="select-for-output.php" method="post">
  <select name="count">
    <?php 
      for ($i=0; $i<10; $i++ ) {
        echo '<option value="',$i,'">',$i,'</option>';
      }
    ?>
  </select>
  <input type="submit" value="確定">
</form>
<?php require "../footer.php"?>