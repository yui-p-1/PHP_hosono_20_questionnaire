<?php
// XSS対策用関数作成
function h ($value) {
    return htmlspecialchars($value,ENT_QUOTES);
}
?>

<table>
<?php
// ファイルを変数に格納
$fp = fopen("data/data.txt","r");

while(!feof($fp)){
    $line = fgets($fp);
    if (trim($line) != null){
        list($date_1, $date_2, $name, $mail) = explode(" ", $line);
?>

<tr>
<td><?php print $date_1 ?></td>
<td><?php print $date_2 ?></td>
<td><?php print $name ?></td>
<td><?php print $mail ?></td>
</tr>
<?php
    }
}
fclose($fp);
?>
</table>




/*
// XSS対策用関数作成
function h ($value) {
    return htmlspecialchars($value,ENT_QUOTES);
}

// ファイルを変数に格納
$filename = 'data/data.txt';

// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');
 
// whileで行末までループ処理
while (!feof($fp)) {
 
    // fgetsでファイルを読み込み、変数に格納
    $txt = fgets($fp);
   
    // ファイルを読み込んだ変数を出力
    echo h($txt).'<br>';
   
}
 
// fcloseでファイルを閉じる
fclose($fp);

*/
