<?php
$members=["sasaki","tanaka","sakamoto"];
echo count($members);

echo sort($members);

var_dump(in_array("sasaki",$members));

$atstr=implode("@",$members);
var_dump($atstr);

$re_members = explode("@",$atstr);
var_dump($re_members);


?>
要件定義：クライアントからヒアリングした情報を元に作る定義書

単体テスト：一つのシステムで動くかどうかをテストする

結合テスト：複数のシステムを動かしてみて動くかどうかをテストすること

テスト仕様書：システムやソフトウェアがクライアントのヒアリングを元に作りあげた要件定義所通りに機能するか、テストするポイントをまとめたもの
項目：テストを実施した環境
     テストの内容
     システムの操作手順
     テストの実行結果
     テストを実施した日付
     テストを実行した担当者等

