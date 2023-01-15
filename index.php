<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>アンケート入力</title>
    <link rel="stylesheet" href="./css/sample.css">
</head>


<body>
    <header>
        <h1>アンケートフォーム</h1>
    </header>
    <form method="POST" action="write.php">
        お名前:<input type="text" name="name"><br>
        EMAIL:<input type="text" name="mail"><br>
        年齢:<input type="number" name="age"><br>
        出身地:<input type="text" name="place"><br>
        <input type="submit" value="送信">
    </form>

    <form method="post" enctype="multipart/form-data" action="write.php" >
    <input type="file" name="fname">
    <input type="submit" value="アップロード">
    </form>

    <ul>
	<a href="index.php">戻る</a>
    </ul>

</body>
</html>