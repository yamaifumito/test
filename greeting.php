<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>greeting.php</title>
</head>
<body>
<h1>こんにちは、
<?php
  echo($_POST['username']);
?>
さん！</h1>
</body>
</html>