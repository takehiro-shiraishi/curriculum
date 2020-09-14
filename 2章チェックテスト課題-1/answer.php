<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
    

<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$number = $_POST["number"];
$language = $_POST["language"];
$command = $_POST["command"];

$name = $_POST["name"];
$num = $_POST["num"];
$lang = $_POST["lang"];
$com = $_POST["com"];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function answerNumber($number, $num) {
    if ($number === $num ) {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
}
function answerLanguage($language, $lang) {
    if ($language === $lang ) {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
}

function answerCommand($command, $com) {
    if ($command === $com ) {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
}
?>
<p class="top"><!--POST通信で送られてきた名前を表示--><?php echo $name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<?php 
answerNumber($number, $num);
?>
<!--作成した関数を呼び出して結果を表示-->

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
answerLanguage($language, $lang);
?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
answerCommand($command, $com);
?>
</body>
</html>