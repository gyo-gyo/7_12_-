<?php
function h($s)
{
    return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
}

session_start();
if (isset($_SESSION['EMAIL'])) {
    echo 'ようこそ' .  h($_SESSION['EMAIL']) . "さん<br>";

    echo "<a href='./logout.php'>ログアウトはこちら。</a>";
    // header("Location:ECsite.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Traveras shop</title>
</head>

<body>
    <header style="padding: 100px;">Traveras shop</header>
    <p>快適な旅をお届け✈日本から繋げる世界</p>

    <nav style="display:flex;">
        <p>サンプル</p>
        <p>サンプル</p>
        <p>サンプル</p>
        <p>サンプル</p>
        <p>サンプル</p>
        <p>サンプル</p>
    </nav>


    <h1>







    </h1>

</body>

</html>