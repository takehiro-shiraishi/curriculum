<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
echo count($members)."<br>";
sort($members);
var_dump($members);
echo "<br>";
var_dump(in_array("tanaka", $members));

$numbers = [26, 35, 17, 67, 45];
sort($numbers);
var_dump($numbers);
echo "<br>";

?>

<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
if (in_array("tanaka", $members)) {
    echo "田中さんがいるよ！";
} else {
    echo "田中さんはいないよ！";
}
echo "<br>";
?>

<?php

$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);
echo "<br>";

$re_members = explode("@", $atstr);
var_dump($re_members);
echo "<br>";

$str = "1,2,3,4,5";
$array = explode(",",$str);
var_dump($array);
echo "<br>";

?>

<?php
echo "<br>";
echo "＜要件定義（要求仕様書）＞"."<br>";
echo "システムやソフトウェアの開発において、実装すべき機能や満たすべき性能などを明確にしていく作業のことです。"."<br>";
echo "＜単体テストと結合テスト＞"."<br>";
echo "単体テストはプログラムを構成する比較的小さな単位がここの機能を正しく果たしているかを検証するテストで結合テストは手続きや関数といった個々の機能を結合させて、上手く連携、動作しているかを確認するテストのことです"."<br>";
echo "＜テスト仕様書＞"."<br>";
echo "テスト仕様書は、１テストを実施した環境２実施するテストの内容３テストを実施するためのシステムの操作手順４テストの実行結果５個々のテスト項目をするための番号や記号６テストを実施した年月日７テストを実行した担当者８傷害報告票番号、などの事項があります。"."<br>";

?>