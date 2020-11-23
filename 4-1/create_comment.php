<?php 

require_once('db_connect.php');
require_once('function.php');

check_user_logged_in();

if(!empty($_POST)) {
//post送信されたpost_idを変数に格納しておく
$post_id = $_POST["post_id"];
//nameとcontentの入力チェック
if(empty($_POST["name"])) {
    echo "名前が未入力です";
} elseif(empty($_POST["content"])) {
    echo "コメントが未入力です";
}
if (!empty($_POST["name"]) && !empty($_POST["content"])) {
//name,contentを格納
$name = $_POST["name"];
$content = $_POST["content"];
//PDOインスタンスの取得
$pdo = db_connect();

try {
    $sql = "INSERT INTO comments (post_id, name, content) VALUES (:post_id, :name, :content) ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":post_id", $post_id);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":content", $content);
    $stmt->execute();
    header("Location: detail_post.php?id=".$post_id);
    exit;
} catch (PDOException $e) {
    echo "Error: ". $e->getMessage();
    die();
}
}
} else {
    // POSTで渡されたデータがなかった場合
    // GETで渡されたpost_idを受け取る 
    $post_id = $_GET['post_id']; 
    // $post_idが空だった場合は不正な遷移なので、main.phpに戻す
    redirect_main_unless_parameter($post_id);
}
?>
<!DOCTYPE html>
<html>
<head> 
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<h1>コメント</h1> 
<form method="POST" action="">
<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
投稿者名:<br> 
<input type="text" name="name"> <br> 
コメント:<br>
<input type="text" name="content" style="width:200px;height:100px;"><br> 
<input type="submit" value="submit">
</form>
<a href="detail_post.php?id=<?php echo $post_id; ?>">記事詳細に戻る</a>
</body>
</html>