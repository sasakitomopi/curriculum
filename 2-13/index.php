<?php

$x = 10.8;
echo ceil($x);
echo '<br>';

echo floor($x);
echo '<br>';

echo round($x);
echo '<br>';

echo pi();
echo '<br>';

echo mt_rand(1,10);
echo '<br>';

$name = "sasakitomohiro";
echo strlen($name);
echo '<br>';

echo strpos($name,"a");
echo '<br>';

echo substr($name,-2,2);
echo '<br>';

echo str_replace("s","S",$name);
echo '<br>';

printf("%sです",$name);
echo '<br>';

$sasaki=sprintf("私の名前は%sです",$name);
echo $sasaki;
echo '<br>';

//PostgreSQL（ポストSQL）＝オープンソースのデータベース管理システム

//Oracle SQL（オラクルSQL）＝関連データベース管理システムのこと

//外部設計：スケジュールや費用、セキュリティ等と設計すること（クライアントから見える上流工程）

//内部設計：システム内部の動作や機能などの詳細な設計を行うもの（クライアントから見えない下流工程）

?>

