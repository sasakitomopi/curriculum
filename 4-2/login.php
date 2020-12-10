<?php
require_once('db_connect.php');
session_start();

if(!empty($_POST)){
    if(empty($_POST['name'])){
        echo 'ユーザ名が未入力です';
    }
    if(empty($_POST['password'])){
        echo 'パスワード未入力です';
    }
    if(!empty($_POST['name'])&&!empty($_POST['password'])){
        $name = htmlspecialchars($_POST['name'],ENT_QUOTES);
        $password = htmlspecialchars($_POST['password'],ENT_QUOTES);
       
        $pdo = db_connect();
        try{
            $sql = "SELECT * FROM users WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name',$name);
            $stmt->execute();
        }catch (PDOException $e){
            echo 'Error:'.$e->getMessage();
            die();
        }
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            if(password_verify($password,$row['password'])){
                $_SESSION["user_id"] = $row['id'];
                $_SESSION["user_name"] = $row['name'];
                header("Location: main.php");
                exit;
            }else{
                echo 'パスワードに誤りがあります';
            }
        }else{
            echo 'ユーザ名かパスワードに誤りがあります';
        }
    }
}



?>

<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    <h1>ログイン画面</h1>
    <a href="signUp.php">新規ユーザ登録</a>
    <form method="post" action="">
    <input type = "text" name="name" placeholder="ユーザー名"/><br>
    <input type = "password" name="password" placeholder="パスワード"/><br>
    <input type = "submit" value="ログイン"/>
    </form>
</body>


</html>