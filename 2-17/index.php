<?php

$i;
$count;

while($i<=40){
 $saikoro=mt_rand(1,6);
 $i+= $saikoro;
 $count++;
 echo $count.'回目＝'.$saikoro;
 echo '<br>';

}
echo '合計'.$count.'回目でゴールしました。';
echo '<br>';

?>


<?php
date_default_timezone_set('Asaia/Tokyo');

$date = date("h時台です",time());
echo'<br>';
echo $date;
 echo'<br>';


echo '<br>';

if($date(range(6,12))){
    echo 'おはようございます';
}else if($date(range(13,18))){
    echo 'こんにちは';
}else{
    echo 'こんばんわ';
}



?>