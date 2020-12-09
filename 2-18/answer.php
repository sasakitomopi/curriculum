<link rel="stylesheet" href="style2.css" type="text/css">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name=$_POST['name'];
$answer1=$_POST['answer1'];
$answer2=$_POST['answer2'];
$answer3=$_POST['answer3'];
$commands=$_POST['command'];
$numbers=$_POST['number'];
$languages=$_POST['language'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function getAnswer1($numbers){
    if(in_array($answer1,$numbers)){
        echo '正解！';
    }else{
        echo '残念・・・';
    }

}

function getAnswer2($languages){
    if(in_array($answer2,$languages)){
        echo '正解！';
    }else{
        echo '残念・・・';
    }
}

function getAnswer3($commands){
    if(in_array($answer3,$commands)){
        echo '正解！';
    }else{
        echo '残念・・・';
    }
}


?>
<p><!--POST通信で送られてきた名前を表示--><?php echo $name?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php getAnswer1($numbers); ?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php getAnswer2($languages); ?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php getAnswer3($commands); ?>

