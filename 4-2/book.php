<?php
require_once('db_connect.php');
require_once('function.php');



if(!empty($_POST)){
    if(empty($_POST['title'])){
        echo 'タイトルが未入力です';
    }
    if(empty($_POST['date'])){
        echo '発売日が未入力です';
    }
    if(empty($_POST['stock'])){
        echo '在庫数が未入力です';
    }
    if(!empty($_POST['title'])&&!empty($_POST['date'])&&!empty($_POST['stock'])){
        $title =$_POST['title'];
        $stock = $_POST['stock'];
        $date = $_POST['date'];
        $pdo = db_connect();
        try{
            $sql = "INSERT INTO books(title,date,stock) VALUES(:title,:date,:stock)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':title',$title);
            $stmt->bindParam(':date',$date);
            $stmt->bindParam(':stock',$stock);
            $stmt->execute();
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
<meta http-equiv="Content-Type" content = "text/html charset=UTF-8">
</head>
<body>
    <h1>本登録画面</h1>
    <form method="POST" action = "">
    <input type="text" name="title" placeholder="タイトル"/><br>
    <input type="text" name="date" placeholder="発売日"/><br>
    <select name = "stock">
        <?php for($i=1;$i<=50;$i++){?>
        <option value="" style="display:none;">選択してください</option>
        <option value ="<?php echo $i;?>">
            <?php echo $i;?>
        </option>
        <?php } ?>
    </select><br>
    <input type = "submit" value="登録"/>