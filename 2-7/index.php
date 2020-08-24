<?php
$color = ["red" => "赤", "blue" => "青", "green" => "緑"];

var_dump($color);

$color["yellow"] = "黄色";
echo "<br>";
var_dump($color);

echo "<br>";
echo "＜プルリクエスト（マージリクエスト）＞";
echo "<br>";
echo "コードの変更をレビュワーに通知し、マージを依頼する機能です。コードのレビューを受けることで１人で作ると気づかないコードの指摘やバグや記述ミスを発見でき、コードの質を高めることができる。";
echo "<br>";
echo "＜Git flow＞";
echo "<br>";
echo "git flowとはgitの機能であるブランチを活用したgitの開発手法であり、ツールの名前でもあります。またそれぞれ役割が振られており、master, release, develop, feature, hot-fixの5つのブランチを使い分けて開発を進めます。";
echo "<br>";
echo "＜CRON＞";
echo "<br>";
echo "cronとは、多くのUNIX系OSで標準的に利用される常駐プログラム（デーモン）の一種で、利用者の設定したスケジュールに従って指定されたプログラムを定期的に起動してくれるもの。";

?>