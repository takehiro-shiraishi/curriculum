<?php 

require_once('db_connect.php');

if (isset($_POST["name"])){
    $name = $_POST['name'];
}
  if (isset($_POST["password"])){
      $password = $_POST['password'];
}


if (isset($_POST["signUp"])) {
$pdo = db_connect();
try {
    $sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':password',$password_hash);
    $stmt->execute();
    echo "登録完了しました";
    }catch (PDOException $e) {
    echo "登録に失敗しました".$e->getmessage();
    die();
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h1>新規登録</h1>
    <form method="POST" action="">
        user:<br>
        <input type="text" name="name" id="name">
        <br>
        password:<br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="submit" id="signUp" name="signUp">
    </form>
</body>
</html>