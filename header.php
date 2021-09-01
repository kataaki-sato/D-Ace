<?php
$site_name = '';
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php echo $page_title.'|'.$site_name; ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="stylesheet" href="css/style-sm.min.css" media="screen and (min-width:576px)">
  <link rel="stylesheet" href="css/style-md.min.css" media="screen and (min-width:768px)">
  <link rel="stylesheet" href="css/style-lg.min.css" media="screen and (min-width:992px)">
  <link rel="stylesheet" href="css/style-xl.min.css" media="screen and (min-width:1200px)">
  <link rel="stylesheet" href="css/style-2xl.min.css" media="screen and (min-width:1500px)">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Favicon設定 -->
  <!-- 右記サイトでFaviconを作成して設定してください。https://ao-system.net/favicongenerator/ -->
  <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" type="image/png" href="img/favicon/android-touch-icon.png" sizes="192x192">
  <!-- META設定 -->
  <meta name="description" content="<?php echo $page_description; ?>">
  <!-- OGP設定 -->
  <meta property="og:title" content="<?php echo $page_title; ?>" />
  <meta property="og:type" content="<?php echo $page_type; ?>" />
  <meta property="og:url" content="<?php echo $page_url; ?>" />
  <meta property="og:image" content="<?php echo $image_url; ?>" />
  <meta property="og:site_name" content="<?php echo $site_name; ?>" />
  <meta property="og:description" content="<?php echo $page_description; ?>" />
  <!-- Facebook用設定 -->
  <meta property="fb:app_id" content="App-ID（15文字の半角数字）" />
  <!-- もしくは -->
  <!-- <meta property="fb:admins" content="adminID（15文字の半角数字）" /> -->
  <!-- Twitter共通設定 -->
  <meta name="twitter:card" content="Twitterカードの種類" />
</head>
<body>
<header class="site-header">
        <a class="site-logo" href="/"><img src="img/pc/logo.png" alt="D・Ace"></a>
        <img class="menu-icon" src="img/pc/menu_icon.png">
    </header>
