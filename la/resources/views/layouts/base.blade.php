<!doctype html>
<html lang="jp">

<head>
  <meta charset="utf-8">
  <meta http-equiv="content-language" content="ja">
  <title>o2zdip</title>
  <meta name="description" itemprop="description" content="個人的なコードのサンプル・メモ集です。">
  <meta name="author" content="otsuji">
  <!-- ビューポート -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- OG設定 -->
  <meta property="og:site_name" content="o2zdip">
  <meta property="og:description" content="個人的なコードのサンプル・メモ集です。">
  <meta property="og:title" content="o2zdip">
  <meta property="og:url" content="http://o2zdip.starfree.jp/">
  <meta property="og:image" content="">
  <meta property="og:type" content="website"><!-- トップページはwebsite，個別ページはarticle -->
  <!-- Twitter共通設定 -->
  <meta name="twitter:card" content="">
  <meta name="twitter:site" content="">

  <!-- ファビコン -->
  <link rel="icon" href="./favicon.ico">

  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P3P4KB94');</script>
  <!-- End Google Tag Manager -->

  <!-- CSS設定 -->
  <link href="/la/public/css/bootstrap-reboot.min.css" rel="stylesheet"><!-- Bootstrap-reboot-->
  <link href="/la/public/css/bootstrap.min.css" rel="stylesheet"><!-- Bootstrap-min -->
  <link href="/la/public/css/style.css" rel="stylesheet">
  <style>
  </style>

</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P3P4KB94" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="./index.html">o2zdip</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search 未実装" aria-label="Search">
            <button class="btn btn-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <div class="d-flex flex-row w-100">
    <nav class="bg-secondary side_menu">
      <p class="mb-0 pb-0">
        <button type="button" class="btn w-100 pb-0" id="side_menu_button" data-bs-toggle="collapse"
          data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
          <div class="side_menu_text" style="text-align: left; color: #FFFFFF;">&lt;&lt;</div>
        </button>
      </p>
      <div class="collapse collapse-horizontal show" id="collapseWidthExample">
        <ul class="nav flex-column mb-5 pb-2">
          <li class="nav-item"><a href="./page/html/base.html" class="nav-link link-light">HTML</a></li>
          <li class="nav-item"><a href="./page/javascript/base.html" class="nav-link link-light">JavaScript</a></li>
          <li class="nav-item"><a href="./page/css/base.html" class="nav-link link-light">CSS</a></li>
          <li class="nav-item"><a href="./page/php/base.html" class="nav-link link-light">PHP</a></li>
          <li class="nav-item"><a href="./page/python/base.html" class="nav-link link-light">Python</a></li>
          <li class="nav-item"><a href="./page/git/base.html" class="nav-link link-light">Git</a></li>
          <li class="nav-item"><a href="./page/system/base.html" class="nav-link link-light">設計</a></li>
          <li class="nav-item"><a href="./page/server/base.html" class="nav-link link-light">インフラ</a></li>
          <li class="nav-item"><a href="./page/blog/base.html" class="nav-link link-light">ブログ記事</a></li>
          <li class="nav-item"><a href="./page/app/base.html" class="nav-link link-light">アプリ</a></li>
          <li class="nav-item"><a href="./page/link/base.html" class="nav-link link-light">リンク集</a></li>
          <li class="nav-item"><a href="https://github.com/wotsuji" class="nav-link link-light"
              target="_blank">github</a></li>
        </ul>
      </div>
    </nav>
    <main role="main" class="container-fluid pt-1">
    @yield('contents')
      <div><a href="#">HOME</a> &gt; トップページ</div>
      <div>
        <h1 class="pt-1">トップページ</h1>
        <p class="lead">
        <h5>■本サイトについて</h5>
        個人的なコードのサンプル・メモ集です。勉強した事などメモを取っていこうと思います。<br>
        発信できるレベルのモノが出来た時に技術サイト（Zenn）の記事としてフィードバックしていこうと思います。<br>
        </p>
        <p>
          ・本サイトのサンプルは自分用をメインとしています。<br>
          ・コードは断りなく自由に利用・改変OKです。但し、正しいかどうかは保証できませんので自己責任にてお願いします。<br>
          ・ブログ記事もコンテンツの一部として存在します。こちらは個人的な意見・感想です。所属する組織・チームとは関係ありません。<br>
        </p>
        <p>
        <h5>■構成</h5>
        Bootstrap：5.3.0<br>
        JQuery：予定<br>
        PHP：8.2（フレームワーク Laravel10.x）<br>
        Mysql：5.7/8.0.34<br>
        Google タグマネージャー<br>
        Google アナリティクス<br>
        </p>
        <p>
        <h5>■自己紹介</h5>
        自己紹介予定
        </p>
      </div>
    </main>
  </div>
  <footer>
    <p class="small text-center">Copyright &copy; 2023 otsuji</p>
  </footer>

  <!-- JavaScript  -->
  <script src="/la/public/js/bootstrap.bundle.min.js"></script> <!-- Bootstrap-min -->
  <script src="/la/public/js/base.js"></script>
  <script>
  </script>

</body>

</html>