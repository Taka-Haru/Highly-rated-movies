<?php require_once '../common/scriptUtil.php';?>
<?php require_once '../common/defineUtil.php';?>

<?php

function show_foreign(){
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

  //配列データをシャッフルさせる
  $result = shuffle_assoc($youga_query);

    $i = 0;
    $view = 3;
    foreach ($result as $value){
      if($i>=$view){
        break;
      }else{
  ?>
  <article>
  <a href="<?php echo $value["FilmUrl"];?>" target="window"> <img src="<?php echo $value["ImageUrl"];?>" width="300" height="363"></a>
  <a href="<?php echo $value["FilmUrl"];?>" target="window"><h2><?php echo $value["FilmTitle"];?></h2></a>


  <!--id情報をmovie_detailに受け渡せるように-->
  <form action="<?php echo MOVIE_DETAIL; ?>?id=<?php echo $value['FilmID'];?>" method="POST">
      <input type="hidden" name="FilmTitle" value="<?php echo $value['FilmTitle'];?>";>
      <input type="hidden" name=" itemCaption" value="<?php echo $value['itemCaption'];?>";>
      <input type="submit" name="detail" value="作品詳細";>
  </form>


  </article>
  <?php
      $i++;
      }
    }

  //接続を切断
  $pdo_object = null;
}
?>
