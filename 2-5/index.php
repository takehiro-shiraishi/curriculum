<?php
$name = 'taro';
$password = 'pass';

if ($name === 'taro' && $password === 'pass') {
    echo "ログイン成功です";
}  elseif ($name === 'taro' && $password !== 'pass') {
    echo "パスワードが間違っています";
}  elseif ($name !== 'taro' && $password === 'pass') {
    echo "名前が間違っています";
}  else  {
    echo "入力情報が間違っています";
}

echo "＜IDE（総合開発環境）＞";
echo "<br>";
echo "ソフトウェア開発に必要なソフトウェアを一つに組み合わせ、同じ操作画面から統一的な操作方法で利用できる様にしたソフトウェアパッケージ";
echo "<br>";
echo "＜JOIN（データベースにおいて）＞";
echo "<br>";
echo "テーブル結合のことで、データベースの中の複数のテーブルのデータを合体させて一つにすることを意味します。テーブルは実際にデータを入れておく箱そのもののことです";
echo "<br>";
echo "＜コンフリクト＞";
echo "<br>";
echo "コンフリクトとは競合、衝突などの意味を持ち二つの分岐で不整合が起きてしまい、履歴としてその状態から進ませることができなくなること";

?>