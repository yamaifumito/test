<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>kcgArray.php</title>
</head>
<body>
<?php
  $now=getdate();
  echo($now['year']."年".$now['mon']."月".$now['mday']."日");
?>
現在、KCGには3つの校舎がありますが、私は
<?php
  // $kcg=array('駅前','鴨川','洛北');
  $kcg=array();
  $kcg[0]='駅前';
  $kcg[1]='鴨川';
  $kcg[2]='洛北';
  echo("<h1>".$kcg[rand(0,2)]."</h1>");
?>
校が一番居心地がいいと思います。
</body>
</html>
