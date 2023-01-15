<?php
header("Content-Type: text/html; charset=UTF-8");

// Composerでインストールしたパッケージを読み込む。
require_once(realpath(__DIR__) . "../../vendor/autoload.php");

use PhpOffice\PhpSpreadsheet\Reader\Xlsx as XlsxReader;
$reader = new XlsxReader();

$spreadsheet = $reader->load('data/data.xlsx'); // ファイル名を指定
$sheet = $spreadsheet->getSheetByName('Sheet1'); // 読み込むシートを指定
$data = $sheet->rangeToArray('A1:D1'); // 配列で取得したい範囲を指定
var_dump($data);

// $name_x = $sheet[0];
// $mail_x = $sheet[1];
// $age_x = $sheet[2];
// $place_x = $Sheet[3];

// 申込時間取得
// $date_x_1 = date("Y/m/d");
// $date_x_2 = date("w");
// $date_x_3 = date("H:i:s");

// ファイルを読み込む
$file = fopen("./data/data_x.txt","a");
// ファイルに書き込む
fwrite($file, $data[0][0]." ".$data[0][1]." ".$data[0][2]." ".$data[0][3]."\n");
// ファイルを閉じる
fclose($file);

?>


<?php
// index.phpのPOSTからデータ取得
$name = $_POST["name"];
$mail = $_POST["mail"];
$age = $_POST["age"];
$place = $_POST["place"];

// 申込時間取得
$date_1 = date("Y/m/d");
$date_2 = date("w");
$date_3 = date("H:i:s");

// ファイルを読み込む
$file = fopen("./data/data.txt","a");
// ファイルに書き込む
fwrite($file, $date_1." ".$date_2." ".$date_3." ".$name." ".$mail." ".$age." ".$place."\n");
// ファイルを閉じる
fclose($file);

// read.phpにリダイレクト
header("Location: read.php");
exit();

?>
