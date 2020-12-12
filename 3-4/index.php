<?php require_once('getData.php');
      require_once('pdo.php');
      $post_data = new getData();
      $user_data= new getData();

      function getName(){
        $user_data= new getData();
        echo  $user_data->getUserData()['last_name'];
        echo  $user_data->getUserData()['first_name'];
      }

    
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html charset=UTF-8">
<link rel="stylesheet" type="text/css" href="style1.css"/>
</head>

<body>

<header>
 <div class="header-left">
        <img src="https://letsengineer.jp/storage/cms-files/1599315827_logo.png"/>
 </div>

    <div class = "header-right">
        <div class="header-right-top">
            <?php 
                echo 'ようこそ';
                echo getName().'さん';?>
        </div>

    <div class="header-right-bottom">
        <?php echo '最終ログイン日:'.$user_data->getUserData()['last_login'];?>
    </div>
</div>

<main>
    <table>
        <tr class="contents">
            <td>記事ID</td>
            <td>タイトル</td>
            <td>カテゴリ</td>
            <td>本文</td>
            <td>投稿日</td>
        </tr>
        
        <?php $stmt=$post_data->getPostData(); ?>
        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){?>
        <tr class="contents1">
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['title'];?></td>
            <td><?php echo $row['created'];?></td>
            <td><?php 
                if($row['category_no']==1){
                 echo '食事';
                }else if($row['category_no']==2){
                 echo '旅行';
                }else{
                echo 'その他';}?></td>
            <td><?php echo $row['comment'];?></td>
        </tr>
        <?php } ?>
    </table>

</main>

<footer>
    <div>Y&I group.inc</div>
</footer>

</body>
</html>