<?php
require_once '../common/dbaccesUtil.php';
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>HighlyRatedMovies</title>
    <link rel="stylesheet" href="../common/css/normalize.css">
    <link rel="stylesheet" href="../common/css/style.css">
</head>

<body>
  <div id="page">

  <header id="pageHead">
    <h1 id="siteTitle">HighlyRatedMovies</h1>
    <p id="catchcopy">〜今日から始める映画鑑賞〜</p>
    <nav class="globalNavi">
      <ul>
        <li><a href="http://localhost/develop/HighlyRatedMovies/app/index.php">ホーム</a></li>
        <li><a href="http://localhost/develop/HighlyRatedMovies/app/introduction.php">自己紹介</a></li>
        <li><a href="http://localhost/develop/HighlyRatedMovies/app/explanation.php">このサイトについて</a></li>
        <li><a href="http://localhost/develop/HighlyRatedMovies/app/contact.php">お問い合わせ</a></li>
      </ul>
    </nav>
  </header>

  <div id="pageBody">

    <div id="pageBodyMain_detail">

      <article　class="articleDetail">
        <header class="articleDetailHead">

          <h3 class="pageTitle"><?php echo $_POST['FilmTitle']; ?></h3>
        </header>

        <?php

        $baseurl = "https://www.googleapis.com/youtube/v3/search?part=snippet";

          //未入力の場合、nullにする処理を追記
          if(empty($_POST['FilmTitle'])){
              $_POST['FilmTitle'] = null;
          }
          //テキストフォームに入力された値をを変数に格納
          $en_name = $_POST['FilmTitle']."　予告";

          // 検索クエリ　テキストをエンコードする
          $prm_q = urlencode($en_name);

          //My API Key
          $prm_key = "AIzaSyCIvZEcCjw2SpV_OYzuKkx1MqW3K5XUdzA";
          $prm_max = 5;        // 最大件数

          $prm_type = "video";

          $url = "$baseurl&q=$prm_q&key=$prm_key&maxResults=$prm_max&type=$prm_type";
          // リクエストして、jsonを取得

          if(!empty($_POST['FilmTitle'])){
            $json = file_get_contents($url);
            // JSONをPHPオブジェクトに格納
            $youtube = json_decode($json);
            // １件目のyoutubeのIDを取得
            $video_id = $youtube->items[0]->id->videoId;
          }
        ?>

          <div id="player"></div>

          <script>

            var tag = document.createElement('script');
            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


            var player;
            function onYouTubeIframeAPIReady() {
              player = new YT.Player('player', {
                height: '360',
                width: '480',
                videoId: '<?php echo $video_id ; ?>'  ,
                events: {
                  'onReady': onPlayerReady,
                  'onStateChange': onPlayerStateChange
                }
              });
            }

            // 4. The API will call this function when the video player is ready.
            // onReady イベントが起動されると、onPlayerReady 関数が実行されます。
            // この例では、関数は動画プレーヤーの準備ができると再生を開始することを指示しています。
            function onPlayerReady(event) {
              event.target.playVideo();
            }

            // 再生した、停止したなどのプレーヤーのステータスが変わった場合に
            // 呼び出されます。
            function onPlayerStateChange(event) {
              // 再生が終わったら、alertしてみます
              if (event.data == YT.PlayerState.ENDED) {
                alert('finish');
              }
            }
            </script>
          </section>

        </footer>
      </article>
  <!-- pageBodyMainタグ終了 --></div>

  <div id="pageBodySub_detail">
    <section class="newList">
      <h2>解説</h2>
      <p>　<?php echo $_POST['itemCaption']; ?></p>
    </section>
  <!-- pageBodySub_detailタグ終了 --></div>

  <!-- pageBodyタグ終了 --></div>

  <!-- ページの先頭に戻る処理-->
  <p class="pagetop"><a href="#page">ページの先頭に戻る</a></p>

  <footer id="pageFoot">
    <p id="copyright"><small>Copyright&copy; 2016 @HighlyRatedMovies All Rights Reserved.</small></p>
  </footer>

  <!-- pageタグ終了 --></div>

</body>
</html>
