<!-- 洋画のデータをDBに -->
<?php require_once './dbaccesUtil.php'; ?>

<?php
//APIのURL
$API_URL = 'https://app.rakuten.co.jp/services/api/BooksTotal/Search/20130522?';
//取得したいキーワード
$keyword='';
//reviewAverage:レビューの評価(平均)が高い
//$sort='reviewAverage';
//reviewAverage:レビュー件数
//$page=3:取得ページ
$sort='reviewCount';
$sort=urlencode(mb_convert_encoding($sort,'UTF-8','auto'));
//1ページあたりの取得件数
$hits= 1;
//楽天ジャンルリスト(映画) 001011002
$booksGenreId='003201';

//アプリID
$applicationId='1008945889381802438';//自分のアプリIDを入れる


//リクエストURL
$kobo_url=$API_URL.'format=xml&applicationId='.$applicationId.'&booksGenreId='.$booksGenreId.'&sort='.$sort.'&page='.'1';
//XMLを取得
$xml=simplexml_load_string(file_get_contents($kobo_url));

  foreach((object) $xml->Items->Item as $item){

    //洋画タイプ
    $movie_type = 1;
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

    if($reviewCount>21 &&  $reviewAverage>3.5){
    echo '<a href="'.$url.'" target="window"><img src="'.$img.'" /></a>';

    //データのDB挿入処理。エラーの場合のみエラー文がセットされる。成功すればnull
    $result = insert_youga($title, $url, $img, $movie_type);

    }
  }

  //リクエストURL
  $kobo_url=$API_URL.'format=xml&applicationId='.$applicationId.'&booksGenreId='.$booksGenreId.'&sort='.$sort.'&page='.'2';
  //XMLを取得
  $xml=simplexml_load_string(file_get_contents($kobo_url));

    foreach((object) $xml->Items->Item as $item){

        //洋画タイプ
        $movie_type = 1;

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

        if($reviewCount>21 &&  $reviewAverage>3.5){
        echo '<a href="'.$url.'" target="window"><img src="'.$img.'" /></a>';

        //データのDB挿入処理。エラーの場合のみエラー文がセットされる。成功すればnull
        $result = insert_youga($title, $url, $img, $movie_type);

        }
    }

    //リクエストURL
    $kobo_url=$API_URL.'format=xml&applicationId='.$applicationId.'&booksGenreId='.$booksGenreId.'&sort='.$sort.'&page='.'3';
    //XMLを取得
    $xml=simplexml_load_string(file_get_contents($kobo_url));

    foreach((object) $xml->Items->Item as $item){

      //洋画タイプ
      $movie_type = 1;

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

      if($reviewCount>21 &&  $reviewAverage>3.5){
      //echo '<a href="'.$url.'" target="window"><img src="'.$img.'" /></a>';

      //データのDB挿入処理。エラーの場合のみエラー文がセットされる。成功すればnull
      $result = insert_youga($title, $url, $img, $movie_type);

      }
    }

  ?>
