
<?php
//APIのURL
$API_URL = 'https://app.rakuten.co.jp/services/api/BooksTotal/Search/20130522?';
//取得したいキーワード
$keyword='';
//reviewAverage:レビューの評価(平均)が高い
//$sort='reviewAverage';
//reviewAverage:レビュー件数
$sort='reviewCount';
$sort=urlencode(mb_convert_encoding($sort,'UTF-8','auto'));
echo $sort;
//1ページあたりの取得件数
$hits= '6';
//楽天ジャンルリスト(映画) 001011002
$booksGenreId='003201';

$page=1;

//アプリID
$applicationId='1008945889381802438';//自分のアプリIDを入れる

//リクエストURL
$kobo_url=$API_URL.'format=xml&applicationId='.$applicationId.'&booksGenreId='.$booksGenreId.'&sort='.$sort.'&page='.$page;
echo $kobo_url;
//XMLを取得
$xml=simplexml_load_string(file_get_contents($kobo_url));

var_dump($xml->count);

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

      //レビュー件数
      $reviewCount=$item->reviewCount;
      //レビュー平均
      $reviewAverage=$item->reviewAverage;

if($reviewCount>10) {

      print '<a href="'.$url.'" target="window"><img src="'.$img.'" /></a><br>';
      print 'タイトル：'.$title.'<br>';
      print '画像のURL：'.$img.'<br>'.'<br>';
  }
}
?>
