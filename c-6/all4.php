<?php require '../header.php'; ?>
<table>
<tr><th>商品番号</th><th>商品名</th><th>価格</th></tr>
<?php
function h($string) {
  return htmlspecialchars($string);
}

$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 
	'staff', 'password');
foreach ($pdo->query('select * from product') as $row) {
	echo '<tr>';
	echo '<td>', h($row['id']), '</td>';  //h関数使用している
	echo '<td>', htmlspecialchars($row['name']), '</td>';
	echo '<td>', htmlspecialchars($row['price']), '</td>';
	echo '</tr>';
	echo "\n";
  // \n => 文字列で改行をあらわわす。""で囲む。¥n or \n でもおk
}
?>
</table>
<?php require '../footer.php'; ?>