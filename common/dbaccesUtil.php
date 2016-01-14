<?php

//DBへの接続を行う。成功ならPDOオブジェクトを、失敗なら中断、メッセージの表示を行う
function connect2MySQL(){
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','sakamoto','2591');
        //SQL実行時のエラーをtry-catchで取得できるように設定
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die('DB接続に失敗しました。次記のエラーにより処理を中断します:'.$e->getMessage());
    }
}


//レコードの挿入を行う。失敗した場合はエラー文を返却する
  function insert_movies($title, $url, $img, $movie_type, $itemCaption){

    //db接続を確立
    $insert_db = connect2MySQL();

    //DBに全項目のある1レコードを登録するSQL
    $insert_sql = "INSERT INTO movies(FilmTitle,FilmUrl,ImageUrl,movie_type,itemCaption)"
            . "VALUES(:FilmTitle,:FilmUrl,:ImageUrl,:movie_type,:itemCaption)";

    // //現在時をdatetime型で取得
    // $datetime =new DateTime();
    // $date = $datetime->format('Y-m-d H:i:s');

    //クエリとして用意
    $insert_query = $insert_db->prepare($insert_sql);

    //SQL文にセッションから受け取った値＆現在時をバインド
    $insert_query->bindValue(':FilmTitle',$title);
    $insert_query->bindValue(':FilmUrl',$url);
    $insert_query->bindValue(':ImageUrl',$img);
    $insert_query->bindValue(':movie_type',$movie_type);
    $insert_query->bindValue(':itemCaption',$itemCaption);

    //SQLを実行
    try{
        $insert_query->execute();
    }catch (PDOException $e) {
      // echo $e->getMessage();
        //接続オブジェクトを初期化することでDB接続を切断
        $insert_db=null;
        echo  $e->getMessage();
        return $e->getMessage();
    }

    $insert_db=null;
    return null;
  }
