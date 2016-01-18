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
        <li class="current"><a href="http://localhost/develop/HighlyRatedMovies/app/explanation.php">このサイトについて</a></li>
        <li><a href="http://localhost/develop/HighlyRatedMovies/app/contact.php">お問い合わせ</a></li>
      </ul>
    </nav>
  </header>

  <div id="pageBody">

    <div id="pageBodyMain">
      <section>
        <article　class="articleDetail">
          <header class="articleDetailHead">
            <h1 class="pageTitle">このサイトについて</h1>
          </header>

          <section class="articleDetailBody">
            <ul>
              <li>　今まで映画ってほとんどまともに観たことない。映画の話題になっても話についていけるようになりたい。けど、レビューサイトは情報量が多くて何を観ようか悩む・・・</li>
              <li>　本サイトは、良作の映画(DVD)だけを、毎回ランダムで表示する形で、ユーザーの皆様に、 "敢えて限定された中から選んでもらう" サービスです。</li>
              <li>※なお、良作の基準はショッピングサイト楽天より、「レビュー数」と「レビュー点数」を元に、判定させています。<li>
            </ul>
          </section>

          <h1>個人的におすすめな作品</h1>
          <p>〜ここから始めるのもあり！？〜</p>

          <article class="articleList">
            <a href="http://books.rakuten.co.jp/rb/12199326/"target="window">
              <div class="movieListText">
                <h2>レオン</h2>
                <p>「私が欲しいのは、愛か死よ」<br>「俺に必要なのは……ミルクだ」<p>
              </div>
              <div class="movieListImage">
              <img src="../image/LEON.jpg" alt="レオン" width="300" height="163">
              </div>
            </a>
          </article>

          <article class="articleList">
            <a href="http://books.rakuten.co.jp/rb/12062429/"target="window">
              <div class="movieListText">
                <h2>ファイト・クラブ</h2>
                <p>・ルールその１<br>ファイトクラブについて話すな。<br>・ルールその２<br>　ファイトクラブについて話すな。</p>
              </div>
              <div class="movieListImage">
              <img src="../image/FightClub.jpg" alt="ファイト・クラブ" width="300" height="163">
              </div>
            </a>
          </article>

          <article class="articleList">
            <a href="http://books.rakuten.co.jp/rb/3944412/"target="window">
              <div class="movieListText">
                <h2>バタフライ・エフェクト</h2>
                <p>過去を変え、<br>必ず君を救ってみせる。<br>それがたとえ・・・</p>
              </div>
              <div class="movieListImage">
              <img src="../image/ButterflyEffect.jpg" alt="バタフライ・エフェクト" width="300" height="163">
              </div>
            </a>
          </article>

          <footer class="articleDetailFoot">
            <aside class="creditUnit">
              <div class="creditUnitText">
                <p>〜サイト作成協力〜</p>
                <h2 class="heading-typeC">グルーヴ・ギア株式会社</h2>
                <p>地下鉄九段下駅より徒歩１分</p>
                <ul>
                  <li><a href="http://www.groove-gear.jp/" target="_blank">http://www.groove-gear.jp/</a></li>
                  <li><a href="https://camp.geekjob.jp/?_ga=1.84169246.649395329.1446601110" target="_blank">GeekJobCamp ページ</a></li>
                </ul>
                <P>是非あなたもプログラミングキャンプに参加しませんか？</p>
               </div>
               <div class="creditUnitMap">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.2958888511483!2d139.75080191803605!3d35.696488225468016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c6adec6dcb1%3A0x69c762a509d34f1c!2z44CSMTAyLTAwNzMg5p2x5Lqs6YO95Y2D5Luj55Sw5Yy65Lmd5q615YyX77yR5LiB55uu77yU4oiS77yRIOODluODq-ODg-OCr-OCueODk-ODq-ODguODs-OCsA!5e0!3m2!1sja!2sjp!4v1453117404880" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </aside>
          </footer>
        </article>
      </section>
<!-- pageBodyMainタグ終了 --></div>

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
