<?php
require_once('db_connect.php');

if(!empty($_POST)){
    if(empty($_POST['name'])){
        echo '名前が未入力です';
    }
    if(empty($_POST['password'])){
        echo 'パスワードが未入力です';
    }
    if(!empty($_POST['name'])&&!empty($_POST['password'])){
        $name = $_POST['name'];
        $pass = $_POST['password'];
        $pass_hash=password_hash($pass,PASSWORD_DEFAULT);
        $pdo = db_connect();
        try{
            $sql = "INSERT INTO users (name,password) VALUES(:name,:password)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name',$name);
            $stmt->bindValue(':password',$pass_hash);
            $stmt->execute();
            echo '登録が完了しました';
        }catch (PDOException $e){
            echo 'Error:'.getMessage();
            die();
        }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h1>新規登録</h1>
    <form method="POST" action="">
        user:<br>
        <input type="text" name="name" id="name">
        <br>
        password:<br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="submit" id="signUp" name="signUp">
    </form>
</body>
</html>


