<?php
//index.php

$testFile ="test.txt";
$contents = "こんにちは！";

if(is_writable($testFile)){
    
    $fp = fopen($testFile,"w");
    fwrite($fp,$contents);
    fclose($fp);
    echo "finish writing!!";
}

else{
    echo "not writable!";
    exit;
}






    $test_file = "test2.txt";

    if(is_readable($test_file)){
        $fp = fopen($test_file,"r");

        while($line = fgets($fp)){
            echo $line.'<br>';
        }
        fclose($fp);
        
    }else{
        echo "not readable!";
        exit;
    }


?>

CakePHPの2系・3系の違い
CakePHP2系：古いバージョンのフレームワーク
CakePHP3系：CakePHP2系の後にリリースされたフレームワーク 
2系と3系ではデバックのレベルを指定できなくなったことやrequestオブジェクトを介してアクセスするようになった等
の細かいところが変わっている

LAMP：WEBアプリケーションを開発するのに適した
     Linux,Apache（ソフトウエア）,MySQL,PHPの頭文字を繋いだもの

AWS:Amazon Web Servicesの訳
    データ分析やアプリケーション、セキュリティ、IoT,人工知能などのサービスを持つ
    