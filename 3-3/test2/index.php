<?php
require_once('dbconnect.php');

// セッション開始
session_start();

// ログインボタンが押された場合
if (isset($_POST["signUp"])) {
    // 1. ユーザIDの入力チェック
    if (empty($_POST)) {  // 値が空のとき
        echo 'ユーザーIDが未入力です。';
    } else if (empty($_POST["password"])) {
        echo 'パスワードが未入力です。';
    } else if (empty($_POST["password2"])) {
        echo 'パスワードが未入力です。';
    }

    if (!empty($_POST["name"]) && !empty($_POST["password"]) && !empty($_POST["password2"]) && $_POST["password"] === $_POST["password2"]) {
        // 入力したユーザIDとパスワードを格納
        $name = $_POST["name"];
        $password = $_POST["password"];
        $pdo = db_connect();

        // 3. エラー処理
        try {
           $sql = "INSERT INTO users(name,password)VALUES(:name,:password)";
           $stmt=$pdo->prepare($sql);
           $stmt->bindParam(':name',$name);
           $stmt->bindParam(':password',$password);
           $stmt->execute();
           echo '登録が完了しました';
        }catch (PDOException $e){
            echo 'データベースエラー';
        }

    } 
    
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>新規登録</title>
    </head>
    <body>
        <h1>新規登録画面</h1>
        <form id="loginForm" name="loginForm" action="" method="POST">
            <fieldset>
                <legend>新規登録フォーム</legend>
                <div><font color="#ff0000"><?php echo htmlspecialchars($errorMessage, ENT_QUOTES); ?></font></div>
                <div><font color="#0000ff"><?php echo htmlspecialchars($signUpMessage, ENT_QUOTES); ?></font></div>
                <label for="username">ユーザー名</label><input type="text" id="name" name="name" placeholder="ユーザー名を入力" value="<?php if (!empty($_POST["username"])) {
    echo htmlspecialchars($_POST["username"], ENT_QUOTES);
} ?>">
                <br>
                <label for="password">パスワード</label><input type="password" id="password" name="password" value="" placeholder="パスワードを入力">
                <br>
                <label for="password2">パスワード(確認用)</label><input type="password" id="password2" name="password2" value="" placeholder="再度パスワードを入力">
                <br>
                <input type="submit" id="signUp" name="signUp" value="登録">
            </fieldset>
        </form>
    </body>
</html>
