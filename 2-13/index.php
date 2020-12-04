<?php
$x = 10.8;
echo cell($x);

echo floor($x);

echo round($x);

echo pi();

echo mt_rand(1,10);

$name = "sasakitomohiro";
echo strlen($name);

echo strpos($name,"a");

echo substr($name,-2,2);

echo str_replace("s","S",$name);

printf("%sです",$name);

$sasaki=sprintf("私の名前は%sです",$name);
echo $sasaki;


?>

PostgreSQL（ポストSQL）＝オープンソースのデータベース管理システム

Oracle SQL（オラクルSQL）＝関連データベース管理システムのこと

外部設計：スケジュールや費用、セキュリティ等と設計すること（クライアントから見える上流工程）

内部設計：システム内部の動作や機能などの詳細な設計を行うもの（クライアントから見えない下流工程）