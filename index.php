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
    <h1>アンケートフォーム</h1>
    <form method="POST" action="write.php">
        お名前: <input type="text" name="name">
        EMAIL: <input type="text" name="mail">
        <input type="submit" value="送信">
    </form>

    <ul>
	<li><a href="index.php">戻る</a></li>
    </ul>

</body>
</html>