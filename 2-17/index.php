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

$time = intval(date('H'));

echo $time.'時台です';
echo '<br>';
if(4<=$time && $time <= 12){
    echo 'おはようございます。';
}else if(12<=$time && $time <=18){
    echo 'こんにちは。';
}else{
    echo 'こんばんは。';
}
?>