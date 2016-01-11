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
        <li class="current"><a href="http://localhost/develop/HighlyRatedMovies/app/index.php">ホーム</a></li>
        <li><a href="http://localhost/develop/HighlyRatedMovies/app/index.php">自己紹介</a></li>
        <li><a href="http://localhost/develop/HighlyRatedMovies/app/index.php">このサイトについて</a></li>
        <li><a href="http://localhost/develop/HighlyRatedMovies/app/index.php">お問い合わせ</a></li>
      </ul>
    </nav>
  </header>

  <div id="pageBody">

    <div id="pageBodyMain">

      <article　class="articleDetail">
        <header class="articleDetailHead">
          <h1 class="pageTitle">今日のピックアップ映画</h1>
        </header>

      <section>
        <h3 class="heading-typeB">〜本日オススメの作品〜</h3>
        <!-- <figure> -->
          <img src="../image/img_01_01.jpg" alt="ランダムで映画ジャケが表示されます" width="720" height="390">
            <figcaption>※上記映画のタイトル</figcaption>
        <!-- </figure> -->
      </section>

        <section class="articleDetailBody">
          <ul>
            <li>あいうえお</li>
            <li>かきくけこ</li>
            <li>さしすせそ</li>
            <li>たちつてと</li>
          </ul>

          <table border="1">
            <caption>ひらがな</caption>
            <tr>
            <th>あ行</th>
            <td>あいうえお</td>
            </tr>

            <tr>
            <th>か行</th>
            <td>かきくけこ</td>
            </tr>

            <tr>
            <th>さ行</th>
            <td>さしすせそ</td>
            </tr>
          </table>
        </section>

        <footer class="articleDetailFoot">
          <aside>
            <p>〜サイト作成協力〜</p>
            <h2 class="heading-typeC">グルーヴ・ギア株式会社</h2>
            <p>地下鉄九段下駅より徒歩１分</p>
            <ul>
              <li><a href="http://www.groove-gear.jp/" target="_blank">http://www.groove-gear.jp/</a></li>
              <li><a href="https://camp.geekjob.jp/?_ga=1.84169246.649395329.1446601110" target="_blank">GeekJobCamp ページ</a></li>
            </ul>
            <P>是非あなたもプログラミングキャンプに参加しませんか？</p>
          </aside>
        </footer>
      </article>
<!-- pageBodyタグ終了 --></div>

  <div id="pageBodySub">
    <section class="newList">
      <h2>おしらせ</h2>
      <ul>
        <li><time datetime="2016.00.00">2016.00.00</time>
          映画データを更新しました。</li>
        <li><time datetime="2016.00.00">2016.00.00</time>
          サイトデザインを一部変更しました。</li>
      </ul>
    </section>
<!-- pageBodySubタグ終了 --></div>

<!-- pageBodyタグ終了 --></div>

<!-- ページの先頭に戻る処理-->
<p class="pagetop"><a href="#page">ページの先頭に戻る</a></p>

  <footer id="pageFoot">
    <p id="copyright"><small>Copyright&copy; 2016 @HighlyRatedMovies All Rights Reserved.</small></p>
  </footer>


  <!-- pageタグ終了 --></div>

</body>
</html>
