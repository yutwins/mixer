<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ①基本的metaタグ -->
    <!-- 文字コードの指定 -->
    <meta charset="utf-8">
    <!-- IEで常に標準モードで表示させる -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- viewport(レスポンシブ対応) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 電話番号の自動リンク化を無効 -->
    <meta name="format-detection" content="telephone=no">

    <!-- ②SEO対策の補助的措置 -->
    <!-- サイトのタイトル -->
    <title>mixer</title>
    <!-- キーワード -->
    <meta name="keywords" content="">
    <!-- サイトの説明 -->
    <meta name="description" content="">
    <!-- 重複するURLを一本化 -->
    <link rel="canonical" href="">

    <!-- ③SNS対策 -->
    <meta property="og:site_name" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="urlが入ります">
    <meta property="fb:app_id" content="AppID">
    <meta property="og:image" content="">
    <meta name="twitter:card" content="Summary Card">
    <meta name="twitter:site" content="">

    <!-- ④その他の指定 -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <!-- faviconの指定 -->
    <link rel="shortcut icon" href="./favicon.ico">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="header-inner">
            <a href="<?php echo esc_url(home_url( '/' )); ?>" class="header-logoArea"><img width="124" height="33" src="<?php echo get_template_directory_uri() ?>/images/Logo-white.png"
                    alt="会社ロゴ" class="header-logoArea__icon"></a>
            <ul class="header-ul">
                <li class="header-list">
                    <a href="#" class="header-list__item">導入事例</a>
                </li>
                <li class="header-list">
                    <a href="#" class="btn whiteBtn header-list__btn"><span
                            class="whiteBtn-text header-list__btn--text">実績を見る</span></a>
                </li>
            </ul>
        </div>
    </header>
    <!-- /.header -->