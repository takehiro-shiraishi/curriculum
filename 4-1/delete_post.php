<?php

require_once('db_connect.php');
require_once('function.php');
//ログインして居なければ、login.phpにリダイレクト
check_user_logged_in();
//URLの？以降で渡されるIDをキャッチ
$id = $_GET['id'];
//もし、$idが空であったmain.phpにリダイレクト
//不正なアクセス対策
if(empty($id)) {
  header("location: main.php");
  exit;
}

//PDOのインスタンスを取得
$pdo = db_connect();

try {
    //SQLの準備
    $sql = "DELETE FROM posts WHERE id = :id";
    //プリアドステートメント
    $stmt = $pdo->prepare($sql);
    //idのバインド
    $stmt->bindParam(":id", $id);
    //実行
    $stmt->execute();
    // main.phpにリダイレクト
    header("location: main.php");
    exit;
} catch (PDOException $e) {
    //エラーメッセージの出力
    echo "Error: ". $e->getmessage();
    //終了
    die();
}