<?php
require_once('db_connect.php');

if(!empty($_POST)){

    if(empty($_POST['name'])){
        echo 'ユーザ名が未入力です';
    }
    if(empty($_POST['password'])){
        echo 'パスワードが未入力です';
    }
    if(!empty($_POST['name'])&&!empty($_POST['password'])){
        $name = $_POST['name'];
        $password = $_POST['password'];
        $password_hash = password_hash($password,PASSWORD_DEFAULT);
        $pdo = db_connect();
        try{
            $sql = "INSERT INTO users(name,password) VALUES(:name,:password)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name',$name);
            $stmt->bindValue(':password',$password_hash);
            $stmt->execute();
            echo '登録が完了しました';
            header("Location: main.php");

        }catch(PDOException $e){
            echo 'Error:'.$e->getMessage();
            die();
        }
    }
}

?>


<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html charset=UTF-8">
<link rel="stylesheet" href="style2.css" type="text/css">
</head>
<body>
    <h1>ユーザー登録画面</h1>
    <form action="" method="post">
        <input type = "text" class="name" name="name" placeholder="ユーザ名"/><br>
        <input type = "password" class="password" name = "password" placeholder="パスワード"/><br>
        <input type = "submit" class="login" value="新規登録"/>
    </form>
</body>
</html> 