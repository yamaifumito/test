<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>calc.php</title>
</head>
<body>
<?php
$x=(int)$_POST["x"];
$y=(int)$_POST["y"];
?>
<form method="post" action="calc.php">
	整数を入力<br>
	x = <input type="text" name="x" value="<?php echo($x); ?>"><br>
	y = <input type="text" name="y" value="<?php echo($y); ?>"><br>
	<input type="submit" value="送信">
</form>
<hr>
計算結果
<table border=1>
<tr><td>加</td><td><?php echo($x+$y); ?></td></tr>
<tr><td>減</td><td><?php echo($x-$y); ?></td></tr>
<tr><td>乗</td><td><?php echo($x*$y); ?></td></tr>
<tr><td>除</td><td><?php echo($x/$y); ?></td></tr>
</table>
</body>
</html>