<?php

session_start();
require_once('function.php');
check_user_logged_in();
require_once('db_connect.php');

$pdo = db_connect();

try{
    $sql = "SELECT * FROM books";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
}catch(PDOException $e){
    echo 'Error:'.$e->getMessage();
    die();
}
?>

<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html charset=UTF-8">
</head>
<body>
    <h1>在庫一覧確認画面</h1>
    <a href="book.php">新規登録</a>
    <a href="logout.php">ログアウト</a>

    <table>
        <tr>
            <td>タイトル</td>
            <td>発売日</td>
            <td>在庫数</td>
            <td></td>
        </tr>

        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)){?>
          <tr>
              <td><?php echo $row['title'];?></td>
              <td><?php echo $row['date'];?></td>
              <td><?php echo $row['stock'];?></td>
              <td><a href="delete.php?id=<?php echo $row['id'];?>">削除</a></td>
          </tr>

        <?php }?>
    </table>
</body>
</html>
    