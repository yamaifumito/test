<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>janken.php</title>
</head>
<body>
<h1>じゃんけん</h1>
<form action="janken.php" method="post">
<select name="userHand">
<option value=''>あなたの手</option>
<option value='0'>グー</option>
<option value='1'>チョキ</option>
<option value='2'>パー</option>
</select>
<input type="submit" value="ぽん！">
</form>

<?php
if(!isset($_POST["userHand"])){
	$_POST["userHand"]="";
	
}else{

if($_POST["userHand"] != ""){

$userHand=$_POST["userHand"];
$phpHand=rand(0,2);

$janken=array(array(0,1,-1),array(-1,0,1),array(1,-1,0));

$hand=array("グー","チョキ","パー");

if(isset($_POST["userHand"])){

// 出した手の確認表示
	echo("あなたの手は".$hand[$userHand]."<br>");
	echo("ＰＨＰの手は".$hand[$phpHand]."<br>");

// 勝敗の判定
	if($janken[$userHand][$phpHand]==1){
		echo("あなたの勝ち！");
	}elseif($janken[$userHand][$phpHand]==-1){
		echo("ＰＨＰの勝ち！");
	}else{ // それ以外は
		echo("あいこ");
	}
}
}
}
?>

</body>
</html>