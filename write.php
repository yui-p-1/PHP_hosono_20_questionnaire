<?php

// POSTデータ取得
$name = $_POST["name"];
$mail = $_POST["mail"];

// 申込時間取得
$date_1 = date("Y/m/d");
$date_2 = date("H:i:s");

// ファイルを読み込む
$file = fopen("./data/data.txt","a");
// ファイルに書き込む
fwrite($file,$date_1." ".$date_2." ".$name." ".$mail."\n");
// ファイルを閉じる
fclose($file);


// read.phpにリダイレクト
header("Location: read.php");
exit();


?>