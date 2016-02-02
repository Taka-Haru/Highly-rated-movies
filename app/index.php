<?php require_once 'show_foreign.php';?>
<?php require_once 'show_japanese.php';?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>HighlyRatedMovies</title>
    <link rel="stylesheet" href="../common/css/normalize.css">
    <link rel="stylesheet" href="../common/css/style.css">

<script src="../common/js/jquery-1.12.0.min.js"></script>
<script src="../common/js/jquery.bxslider/jquery.bxslider.js"></script>
<link rel="stylesheet" href="../common/js/jquery.bxslider/jquery.bxslider.css">
<!-- bxsliderを適用する -->
<script>
$(document).ready(function(){
  $('.bxslider').bxSlider({
    auto: true,
    speed:1000,
    pause:3000,
  });
});
</script>

</head>

<body>

  <div id="page">
  <header id="pageHead">
    <h1 id="siteTitle">HighlyRatedMovies</h1>
    <p id="catchcopy">〜今日から始める映画鑑賞〜</p>
    <nav class="globalNavi">
      <ul>
        <li class="current"><a href="http://localhost/develop/HighlyRatedMovies/app/index.php">ホーム</a></li>
        <li><a href="http://localhost/develop/HighlyRatedMovies/app/introduction.php">自己紹介</a></li>
        <li><a href="http://localhost/develop/HighlyRatedMovies/app/explanation.php">このサイトについて</a></li>
        <li><a href="http://localhost/develop/HighlyRatedMovies/app/contact.php">お問い合わせ</a></li>
      </ul>
    </nav>
  </header>

  <div id="pageBody">
    <section class="mainVisual">
      <ul class="bxslider">
        <li>
          <div class="mainVisualText">
            <h1>本日のおすすめ</h1>
            <p>〜何を観るか迷っているあなたへ〜<br>
            洋画と邦画をそれぞれ３本ずつ紹介します</p>
          </div>
          <img src="../image/img_01_01.jpg" width="980" height="500" alt="ランダム画像">
        </li>

        <li>
          <div class="mainVisualText">
            <h1>本日のおすすめ</h1>
            <p>〜何を観るか迷っているあなたへ〜<br>
            洋画と邦画をそれぞれ３本ずつ紹介します</p>
          </div>
          <img src="../image/ターミネーター２.jpg" width="980" height="500" alt="ランダム画像">
        </li>

        <li>
          <div class="mainVisualText">
            <h1>今日の映画</h1>
            <p>〜何を観るか迷っているあなたへ〜<br>
            洋画と邦画をそれぞれ３本ずつ紹介します</p>
          </div>
          <img src="../image/ダークナイト.jpg" width="980" height="500" alt="ランダム画像">
        </li>
      </ul>
    </section>

  <div class="genre">
    <h1>〜本日の６作品〜</h1>
    <!-- 洋画表示関数呼び出し -->
    <section class="portfolioIndex_A">
        <?php show_foreign();?>
    </section>

    <!-- 洋画表示関数呼び出し -->
    <section class="portfolioIndex_B">
        <?php show_japanese();?>
    </section>
  </div>

  <!-- pageBodyタグ終了 --></div>

  <!-- ページの先頭に戻る処理-->
  <p class="pagetop"><a href="#page">ページの先頭に戻る</a></p>

  <footer id="pageFoot">
    <a href="https://twitter.com/share" class="twitter-share-button"{count}>Tweet</a>

    <script>
      !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
      if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
      fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
    </script>

    <p id="copyright"><small>Copyright&copy; 2016 @HighlyRatedMovies All Rights Reserved.</small></p>
  </footer>


  <!-- pageタグ終了 --></div>

</body>
</html>
