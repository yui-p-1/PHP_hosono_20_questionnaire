<?php
$tempfile = $_FILES['fname']['tmp_name'];
$filename = './data/' . $_FILES['fname']['name'];
 
if (is_uploaded_file($tempfile)) {
    if ( move_uploaded_file($tempfile , $filename )) {
	echo $filename . "をアップロードしました。";
    } else {
        echo "ファイルをアップロードできません。";
    }
} else {
    echo "ファイルが選択されていません。";
} 
?>

<!-- 出典：PHPでファイルアップロードを実装する方法 -->
<!-- https://uxmilk.jp/14317 -->

<?php
header("Content-Type: text/html; charset=UTF-8");

// Composerでインストールしたパッケージを読み込む。
require_once(realpath(__DIR__) . "../../vendor/autoload.php");

use PhpOffice\PhpSpreadsheet\Reader\Xlsx as XlsxReader;
$reader = new XlsxReader();

$spreadsheet = $reader->load('data/data.xlsx'); // ファイル名を指定
$sheet = $spreadsheet->getSheetByName('Sheet1'); // 読み込むシートを指定
$data = $sheet->rangeToArray('A1:D1000'); // 配列で取得したい範囲を指定
// var_dump($data);//デバック用

// 申込時間取得
$date_x_1 = date("Y/m/d");
$date_x_2 = date("w");
$date_x_3 = date("H:i:s");

// 書き込むファイルを読み込む
$output_file = fopen("./data/data_x.txt","a");
fwrite($output_file, $date_x_1." ".$date_x_2." ".$date_x_3." ".$data[1][0]." ".$data[1][1]." ".$data[1][2]." ".$data[1][3]."\n");

// ファイルを閉じる
fclose($output_file);

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
