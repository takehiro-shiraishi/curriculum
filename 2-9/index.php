<?php

for ($y = 0; $y < 100; $y++) {
    if($y % 3 === 0 && $y % 5 === 0) {
        echo "Fizz!Bizz!"."<br>";
    } elseif ($y % 5 === 0) {
        echo "Bizz!"."<br>";
    } elseif ($y % 3 === 0) {
        echo "Fizz!"."<br>";
    } else {
        echo $y."<br>";
    }
}
echo "＜パフォーマンス＞"."<br>";
echo "コンピュータなどの機器やソフトウェア、システムなどの処理性能や実行速度、通信回線・ネットワークなどの伝送速度・要領などのことを指すことが多い。"."<br>";
echo "＜スロークエリ＞"."<br>";
echo "データベースにおいて時間のかかっているSQLのことをいう"."<br>";
echo "＜クエリログ＞"."<br>";
echo "クライアントからのMySQLServerへの接続・接続解除の情報、及クライアントから実行された全てのSQLクエリを出力してくれるログです。"


?>