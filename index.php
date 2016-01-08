<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>HighlyRatedMovies</title>
    <style>
    </style>
</head>
<body>
<h2>Highly Rated Movies</h2>
<h3>〜今日の映画〜</h3>
<hr>
</body>
</html>



  <?php

  //try-catchで接続エラーを取得＆表示
  try{
    $pdo_object=
    new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8',
    'sakamoto',2591);
  }catch(PDOException $E){
    die('接続に失敗しました:'.$E->getMessage());
  }

  //SQL文を格納した文字列を定義(今回はレコード指定のSQL文)
  $sql = "select * from movies where movie_type=1";


  //実行とその結果を受け取れる変数を用意
  $query = $pdo_object -> prepare($sql);

  //SQLを実行
  $query -> execute();



  $youga_query = $query->fetchAll(PDO::FETCH_ASSOC);
  //var_dump($youga_query);

  function shuffle_assoc($list) {
      if (!is_array($list)) return $list;
      $keys = array_keys($list);
      shuffle($keys);
      $random = array();
      foreach ($keys as $key) {
          $random[$key] = $list[$key];
      }
      return $random;
  }

  $result = shuffle_assoc($youga_query);

      foreach ($result as $key){
        for($i=1; $i<=7; $i++){
          if($key["FilmID"] == $i){
          ?>
      <a href="<?php echo $key["FilmUrl"];?>" target="window"> <img src="<?php echo $key["ImageUrl"];?>"></a>
  <?php
          }
        }
      }


  //接続を切断
  $pdo_object = null;

  ?>
