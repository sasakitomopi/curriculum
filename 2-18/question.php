<link rel="stylesheet" href="style1.css" type="text/css">
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name=$_POST['name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$number=[80,22,20,21];
$language=['PHP','Python','JAVA','HTML'];
$command=['join','select','insert','update'];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$answer1='80';
$answer2="PHP";
$answer3="join";
?>
<form method="post" action="answer.php">
<p>お疲れ様です <?php echo $name?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<!--foreachは配列で送っているものではない 一個一個取り出している-->
<?php foreach($number as $numbers):?>
<input type="radio" name="number" value="<?php echo $numbers; ?>"/><?php echo $numbers;?>
<?php endforeach;?>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($language as $languages):?>
<input type="radio" name="language" value="<?php echo $laguages; ?>"/><?php echo $languages;?>
<?php endforeach;?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($command as $commands):?>
<input type="radio" name="command" value="<?php echo $commands; ?>"/><?php echo $commands;?>
<?php endforeach;?>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->

    <input type="hidden" name="name" value="<?php echo $name; ?>"/>
    <input type="hidden" name="answer1" value="<?php echo  $answer1 ?>"/>
    <input type="hidden" name="answer2" value="<?php echo  $answer2 ?>"/>
    <input type="hidden" name="answer3" value="<?php echo  $answer3 ?>"/><br>
    <input type="submit" value="回答する"/>

</form>