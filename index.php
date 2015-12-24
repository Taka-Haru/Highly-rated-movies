
<?php
//APIのURL
$API_URL = 'https://app.rakuten.co.jp/services/api/BooksTotal/Search/20130522?';
//取得したいキーワード
$keyword='トムとジェリー　DVD';
//reviewAverage:レビューの評価(平均)が高い
$sort='reviewAverage';
//1ページあたりの取得件数
$hits= '6';


//アプリID
$applicationId='1008945889381802438';//自分のアプリIDを入れる
//リクエストURL
$kobo_url=$API_URL.'format=xml&keyword='.$keyword.'&applicationId='.$applicationId.'&sort='.$sort.'&hits='.$hits;
//XMLを取得
$xml=simplexml_load_string(file_get_contents($kobo_url));

  foreach((object) $xml->Items->Item as $item){

      //タイトル
      $title=$item->title;

      //著者名
      $author=$item->author;
      $author=str_replace('^_#^',', ',$author);//複数の場合

      //楽天ブックスURL
      $url=$item->itemUrl;

      //画像のURL
      $img=$item->largeImageUrl;

      print '<a href="'.$url.'" target="window"><img src="'.$img.'" /></a><br>';
      print 'タイトル：'.$title.'<br>';
      print '画像のURL：'.$img.'<br>'.'<br>';
  }

?>
