<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <p>
    <?php
    $user_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
    foreach($user_data as $key => $value){
      echo "{$key} : {$value}<br>";
    }
    ?>
  </p>
</body>
</html>