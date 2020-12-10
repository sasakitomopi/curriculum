<?php

session_start();

$_SESSION=array();

session_destroy();

?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html charset=UTF-8">
    <title>ログアウト</title>
</head>
    <body>
     <h1>ログアウト画面</h1>
    <div>ログアウトしました</div>
    <a href="login.php">ログイン画面に戻る</a>
    </body>
</html>