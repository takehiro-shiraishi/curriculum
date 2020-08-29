<?php

$x = 3.4;
echo ceil($x)."<br>";
echo floor($x)."<br>";
echo round($x)."<br>";

echo pi();

function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $cirle_area."<br>";
}
circleArea(2);

echo mt_rand(1,1000)."<br>";

$str = "takehiro";
echo strlen($str)."<br>";
echo strpos($str,"o")."<br>";
echo substr($str, -5, 2)."<br>";
echo str_replace("hi","HI", $str)."<br>";

$name = "白石";
$limit_number = 50;
$limit_hour = 30;
$limit_minute = 4;
printf("%sの残り時間はあと%dです"."<br>",$name,$limit_number);
printf("残り%02d時間%02d分"."<br>", $limit_hour, $limit_minute);
$limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo $limit_time."<br>";

echo "＜PostgreSQL・OracleSQL＞"."<br>";
echo "どちらもデータベースの一種でSQL構文、関数、シーケンスの違いや、データベースサーバの一般的な特製、データ型とJDBCの違いがあります。"."<br>";
echo "＜TortoiseGit・TortoiseSVN＞"."<br>";
echo "主にどちらもwindowsで使われる、バージョン管理システム"."<br>";
echo "＜外部設計・内部設計＞"."<br>";
echo "外部設計は基本設計とも呼ばれ、基本的にユーザーに向けた仕様を設計するのが外部設計"."<br>";
echo "内部設計は、システム内部の動作や機能、物理データなど、ユーザーから見えにくい詳細な部分の設計を行うこと"."<br>";

?>