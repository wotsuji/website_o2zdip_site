<!doctype html>
<html lang="jp">

<head>
  <meta charset="utf-8">
  <meta http-equiv="content-language" content="ja">
  <meta name="robots" content="noindex">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache"> 
  <title>{{$page_title}}</title>
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
  <link rel="icon" href="{{$public_path}}/favicon.ico">

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P3P4KB94');
  </script>
  <!-- End Google Tag Manager -->

  <!-- CSS設定 -->
  <link href="{{$public_path}}/css/bootstrap-reboot.min.css" rel="stylesheet"><!-- Bootstrap-reboot-->
  <link href="{{$public_path}}/css/bootstrap.min.css" rel="stylesheet"><!-- Bootstrap-min -->
  <link href="{{$public_path}}/css/style.css" rel="stylesheet">
  <style>
  </style>

</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P3P4KB94" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{$public_path}}/index.html">o2zdip</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{$public_path}}/index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
        <button type="button" class="btn w-100 pb-0" id="side_menu_button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
          <div class="side_menu_text" style="text-align: left; color: #FFFFFF;">&lt;&lt;</div>
        </button>
      </p>
      <div class="collapse collapse-horizontal show" id="collapseWidthExample">
        <ul class="nav flex-column mb-5 pb-2">
          <li class="nav-item"><a href="{{$public_path}}/page/html/base.html" class="nav-link link-light">HTML</a></li>
          <li class="nav-item"><a href="{{$public_path}}/page/javascript/base.html" class="nav-link link-light">JavaScript</a></li>
          <li class="nav-item"><a href="{{$public_path}}/page/css/base.html" class="nav-link link-light">CSS</a></li>
          <li class="nav-item"><a href="{{$public_path}}/page/php/base.html" class="nav-link link-light">PHP</a></li>
          <li class="nav-item"><a href="{{$public_path}}/page/python/base.html" class="nav-link link-light">Python</a></li>
          <li class="nav-item"><a href="{{$public_path}}/page/git/base.html" class="nav-link link-light">Git</a></li>
          <li class="nav-item"><a href="{{$public_path}}/page/system/base.html" class="nav-link link-light">設計</a></li>
          <li class="nav-item"><a href="{{$public_path}}/page/server/base.html" class="nav-link link-light">インフラ</a></li>
          <li class="nav-item"><a href="{{$public_path}}/page/blog/base.html" class="nav-link link-light">ブログ関連</a></li>
          <div style="color: #ffffff; text-align: center;">------------</div>
          <li class="nav-item"><a href="{{$public_path}}/page/app/base.html" class="nav-link link-light">アプリ</a></li>
          <li class="nav-item"><a href="{{$public_path}}/page/link/base.html" class="nav-link link-light">リンク集</a></li>
          <div style="color: #ffffff; text-align: center;">------------</div>
          <li class="nav-item"><a href="https://twitter.com/w_o2z" class="nav-link link-light" target="_blank">X(Twitter)</a></li>
          <li class="nav-item"><a href="https://note.com/w_o2z" class="nav-link link-light" target="_blank">note</a></li>
          <li class="nav-item"><a href="https://zenn.dev/o2z" class="nav-link link-light" target="_blank">Zenn</a></li>
          <li class="nav-item"><a href="https://github.com/wotsuji" class="nav-link link-light" target="_blank">github</a></li>
        </ul>
      </div>
    </nav>
    <main role="main" class="container-fluid pt-1">
      @yield('contents')
    </main>
  </div>
  <footer>
    <p class="small text-center">Copyright &copy; otsuji.wataru</p>
  </footer>

  <!-- JavaScript  -->
  <script src="{{$public_path}}/js/bootstrap.bundle.min.js"></script> <!-- Bootstrap-min -->
  <script src="{{$public_path}}/js/base.js"></script>
  <script>
  </script>

</body>

</html>