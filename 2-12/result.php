<?php 
    $name = $_POST['name'];
    $prise = $_POST['prise'];
    $number = $_POST['number'];

echo 'お名前：'.$name;
echo '<br>';
echo 'ご希望商品：'.$prise;
echo '<br>';
echo '個数：'.$number;
echo '<br>';

//モジュール：交換可能な構成要素を意味する。例：ハードウエアパソコンの部品がモジュール化されている
//バージョン管理システム：ファイルの変更履歴や保存・管理を行うソフトウエアのこと
//サブクエリとは：SQL文の中にSQL文を書くこと
//サブクエリ例：SELECT * FROM users WHERE id =(SELECT * FROM posts)...

?>