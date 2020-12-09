<?php require_once('getData.php');
      require_once('pdo.php')
?>


<html>
<link rel="stylesheet" type="text/css" href="stylesheet.css"/>
<header>
<div class="header-left">
    <img src="https://letsengineer.jp/storage/cms-files/1599315827_logo.png"/>

</div>

<div class = "header-right">
    <div class="header-right-top">
    <?php 
      $user_data= new getData;
      echo 'ようこそ'.$user_data->getUserData($users_data).'さん';
    ?>
    </div>

    <div class="header-right-bottom">
        <?php echo '最終ログイン日:'.date("Y-m-d H:i:s",time());?>
    </div>
</div>

<main>
   <div class="main">
       <?php $postData = new getData;
       echo $postData->getPostData();?>

   </duv>
</main>

<footer>
    <div>Y&I group.inc</div>
</footer>

<html>



