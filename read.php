<head>
    <link rel="stylesheet" href="./css/sample.css">
</head>

<?php
// XSS対策用関数作成
function h ($value) {
    return htmlspecialchars($value,ENT_QUOTES);
}
?>

<table>
<tr>
    <th>年/月/日</th>
    <th>曜日</th>
    <th>時間</th>
    <th>名前</th>
    <th>メールアドレス</th>
    <th>年齢</th>
    <th>出身地</th>
</tr>

<?php
// ファイルを変数に格納
$fp = fopen("./data/data.txt","r");

while(!feof($fp)){
    $line = fgets($fp);
    if (trim($line) != null){
        list($date_1, $date_2, $date_3, $name, $mail, $age, $place) = explode(" ", $line);
?>

<tr>
    <td><?php print $date_1 ?></td>
    <td><?php print $date_2 ?></td>
    <td><?php print $date_3 ?></td>
    <td><?php print $name ?></td>
    <td><?php print $mail ?></td>
    <td><?php print $age ?></td>
    <td><?php print $place ?></td>
</tr>

<?php
    }
}
fclose($fp);
?>
</table>