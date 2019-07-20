<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>youbi.php</title>
</head>
<body>
<?php
$y=$_GET["y"];
?>
<form method="PSOT" action="youbi.php">
	曜日を選択<br>
	<select name="y">
		<option value="Sun">Sun</option>
		<option value="Mon">Mon</option>
		<option value="Tue">Tue</option>
		<option value="Wed">Wed</option>
		<option value="Thu">Thu</option>
		<option value="Fri">Fri</option>
		<option value="Sat">Sat</option>
	</select>
	<input type="submit" value="送信">
</form>
<hr>
<?php
$youbi=array("Sun"=>"日曜日", "Mon"=>"月曜日", "Tue"=>"火曜日", "Wed"=>"水曜日", "Thu"=>"木曜日", "Fri"=>"金曜日", "Sat"=>"土曜日", );
echo($y."といえば".$youbi[$y]);
?>
</body>
</html>