<!-- 邦画のデータをDBに -->

<?php require_once '../common/dbaccesUtil.php'; ?>

<?php
  //APIのURL
  $API_URL = 'https://app.rakuten.co.jp/services/api/BooksTotal/Search/20130522?';
  //取得したいキーワード
  $keyword='';

  // レビューの件数が多い
  $sort='reviewCount';
  $sort=urlencode(mb_convert_encoding($sort,'UTF-8','auto'));
  //楽天ジャンルリスト(映画)
  $booksGenreId='003202';
  //アプリID
  $applicationId='1008945889381802438';//自分のアプリIDを入れる



  //リクエストURL(1ページ目)
  $books_url=$API_URL.'format=xml&applicationId='.$applicationId.'&booksGenreId='.$booksGenreId.'&sort='.$sort.'&page='.'1';
  //XMLを取得
  $xml=simplexml_load_string(file_get_contents($books_url));

  foreach((object) $xml->Items->Item as $item){

    //洋画タイプ
    $movie_type = 2;

    //タイトル
    $title=$item->title;
    //楽天ブックスURL
    $url=$item->itemUrl;
    //画像のURL
    $img=$item->largeImageUrl;

    //レビュー件数
    $reviewCount=$item->reviewCount;
    //レビュー平均
    $reviewAverage=$item->reviewAverage;
    // 商品説明文
    $itemCaption=$item->itemCaption;


    if($reviewCount>30 &&  $reviewAverage>3.5){
    echo '<a href="'.$url.'" target="window"><img src="'.$img.'" /></a>';

    //データのDB挿入処理。エラーの場合のみエラー文がセットされる。成功すればnull
    $result = insert_movies($title, $url, $img, $movie_type, $itemCaption);

    }
  }

  //リクエストURL(1ページ目)
  $books_url=$API_URL.'format=xml&applicationId='.$applicationId.'&booksGenreId='.$booksGenreId.'&sort='.$sort.'&page='.'2';
  //XMLを取得
  $xml=simplexml_load_string(file_get_contents($books_url));

  foreach((object) $xml->Items->Item as $item){

    //洋画タイプ
    $movie_type = 2;

    //タイトル
    $title=$item->title;
    //楽天ブックスURL
    $url=$item->itemUrl;
    //画像のURL
    $img=$item->largeImageUrl;

    //レビュー件数
    $reviewCount=$item->reviewCount;
    //レビュー平均
    $reviewAverage=$item->reviewAverage;
    // 商品説明文
    $itemCaption=$item->itemCaption;


    if($reviewCount>30 &&  $reviewAverage>3.5){
    echo '<a href="'.$url.'" target="window"><img src="'.$img.'" /></a>';

    //データのDB挿入処理。エラーの場合のみエラー文がセットされる。成功すればnull
    $result = insert_movies($title, $url, $img, $movie_type, $itemCaption);

    }
  }

  //リクエストURL(1ページ目)
  $books_url=$API_URL.'format=xml&applicationId='.$applicationId.'&booksGenreId='.$booksGenreId.'&sort='.$sort.'&page='.'3';
  //XMLを取得
  $xml=simplexml_load_string(file_get_contents($books_url));

  foreach((object) $xml->Items->Item as $item){

    //洋画タイプ
    $movie_type = 2;

    //タイトル
    $title=$item->title;
    //楽天ブックスURL
    $url=$item->itemUrl;
    //画像のURL
    $img=$item->largeImageUrl;

    //レビュー件数
    $reviewCount=$item->reviewCount;
    //レビュー平均
    $reviewAverage=$item->reviewAverage;
    // 商品説明文
    $itemCaption=$item->itemCaption;


    if($reviewCount>30 &&  $reviewAverage>3.5){
    echo '<a href="'.$url.'" target="window"><img src="'.$img.'" /></a>';

    //データのDB挿入処理。エラーの場合のみエラー文がセットされる。成功すればnull
    $result = insert_movies($title, $url, $img, $movie_type, $itemCaption);

    }
  }
?>
