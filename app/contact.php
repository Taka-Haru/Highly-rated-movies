<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
 //再入力時
session_start();
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
  <form action="<?php echo CONTACT_CONFIRM; ?>" method="POST">
  <div id="page">

  <header id="pageHead">
    <h1 id="siteTitle">HighlyRatedMovies</h1>
    <p id="catchcopy">〜今日から始める映画鑑賞〜</p>
    <nav class="globalNavi">
      <ul>
        <li><a href="http://localhost/develop/HighlyRatedMovies/app/index.php">ホーム</a></li>
        <li><a href="http://localhost/develop/HighlyRatedMovies/app/introduction.php">自己紹介</a></li>
        <li><a href="http://localhost/develop/HighlyRatedMovies/app/explanation.php">このサイトについて</a></li>
        <li class="current"><a href="http://localhost/develop/HighlyRatedMovies/app/contact.php">お問い合わせ</a></li>
      </ul>
    </nav>
  </header>

  <div id="pageBody">
    <div id="pageBodyMain">

      <article　class="articleDetail">
        <header class="articleDetailHead">
          <h1 class="pageTitle">お問い合わせ</h1>
        </header>

      名前：<br>
      <input type="text" name="name" value="<?php echo contact_session('name'); ?>">
      <br><br>
      メールアドレス：<br>
      <input type="text" name="name" value="<?php echo contact_session('mail_address'); ?>">
      <br><br>
      お問い合わせ内容：<br>
      <textarea name="contact_contents" rows=10 cols=50 style="resize:none" wrap="hard"><?php echo contact_session('contact_contents'); ?></textarea>
      <br><br>

      <input type="hidden" name="mode" value="CONFIRM">
      <input type="submit" name="confirm" value="入力内容を確認する";>
    </form>
      </article>

      <!-- pageBodySubタグ終了 --></div>
      <!-- pageBodyタグ終了 --></div>
      <p class="pagetop"><a href="#page">ページの先頭に戻る</a></p>

    <footer id="pageFoot">
      <p id="copyright"><small>Copyright&copy; 2016 @HighlyRatedMovies All Rights Reserved.</small></p>
    </footer>

</body>
</html>
