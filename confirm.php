<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ポケモン種族値クイズ</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/stylesheet.css">
</head>
<body>
    <div class="result-container">
        <?php if ($_POST["answer"] == $_POST["invisible-answer"]): ?>
            <p class="result true-text">正解！！</p>
            <p class="correct-answer">こたえ：<span><?php echo $_POST["invisible-answer"] ?></span></p>
            <a class="goback" href="index.php">もう一回</a>
        <?php else: ?>
            <p class="result false-text">はずれ〜</p>
            <p class="correct-answer">こたえ：<span><?php echo $_POST["invisible-answer"] ?></span></p>
            <a class="goback" href="index.php">もう一回</a>
        <?php endif ?>
    </div>
    
</body>
</html>
