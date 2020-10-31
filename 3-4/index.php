<?php
require_once 'getData.php';

$data = new getData();

$users_data = $data->getUserData();
$posts_data = $data->getPostData();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>3章チェックテスト</title>
</head>
<body>
    <header>
    <div class="clearfix::after wrap">
      <img src="yi_logo.png">
      <div class="name">
       <p class="hed">ようこそ <?php echo $users_data["last_name"].$users_data["first_name"]; ?> さん</p>
      </div>
      <div class="time">
      <p class="hed">最終ログイン日： <?php echo $users_data["last_login"]; ?></p>
      </div>
    </div>
    </header>
    <table>
      <tr>
        <th>記事ID</th>
        <th>タイトル</th>
        <th>カテゴリ</th>
        <th>本文</th>
        <th>投稿日</th>
      </tr>
      <?php foreach ($posts_data as $post): ?>
      <tr>
        <td><?php echo $post["id"]; ?></td>
        <td><?php echo $post["title"]; ?></td>
        <td><?php if ($post["category_no"] == 1){
            echo "食事";
        } elseif ($post["category_no"] == 2){
            echo "旅行";
        } else {
            echo "その他";
        }; ?></td>
        <td><?php echo $post["comment"]; ?></td>
        <td><?php echo $post["created"]; ?></td>
      </tr>
      <?php endforeach; ?>
    </table>
    <footer>
      <p>Y&I group.inc</p>
    </footer>
</body>
</html>
