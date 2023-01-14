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