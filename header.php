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
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KNZSN98EK5"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    
    gtag('config', 'G-KNZSN98EK5');
    </script>
    <!-- サイトのタイトル -->
    <title>mixer | グローバルデザインを提供する伴走型パートナー</title>
    <!-- キーワード -->
    <meta name="keywords" content="">
    <!-- サイトの説明 -->
    <meta name="description" content="まるでグローバルデザイン部署を社内に設置するように、海外のプロデザイナーとスムーズに協働できるスタートアップ向けのデザインサービスです。">
    <!-- 重複するURLを一本化 -->
    <link rel="canonical" href="">

    <!-- ③SNS対策 -->
    <meta property="og:site_name" content="mixer株式会社">
    <meta property="og:title" content="mixer | グローバルデザインを提供する伴走型パートナー">
    <meta property="og:description" content="まるでグローバルデザイン部署を社内に設置するように、海外のプロデザイナーとスムーズに協働できるスタートアップ向けのデザインサービスです。">
    <meta property="og:type" content="website">
    <meta property="og:url" content="urlが入ります">
    <meta property="og:image" content="https://yutopro.com/mixer_test/dev/wp-content/uploads/2023/03/OGP-FB.png">
    <meta property="og:image" content="https://yutopro.com/mixer_test/dev/wp-content/uploads/2023/03/OGP-FB.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="">

    <!-- ④その他の指定 -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <!-- faviconの指定 -->
    <link rel="shortcut icon" href="./favicon.ico">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<?php if(is_front_page()) : ?>
    <body id="top">
<?php else : ?>
    <body>
<?php endif; ?>
    <header class="header">
        <div class="header-inner">
        <?php if (is_front_page()) : ?>
            <a href="<?php echo esc_url(home_url( '/' )); ?>" class="header-logoArea"><img width="124" height="33" src="<?php echo get_template_directory_uri() ?>/images/Logo-white.png" alt="会社ロゴ" class="header-logoArea__icon"></a>
            <ul class="header-ul">
                <li class="header-list">
                    <a class="header-list__item js-ex__btn">導入事例</a>
                </li>
                <li class="header-list">
                    <a class="btn whiteBtn header-list__btn js-achievement__btn"><span
                            class="whiteBtn-text header-list__btn--text">実績を見る</span></a>
                </li>
            </ul>
        <?php else: ?>
            <a href="<?php echo esc_url(home_url( '/' )); ?>" class="header-logoArea"><img width="124" height="33" src="<?php echo get_template_directory_uri() ?>/images/Logo-white.png" alt="会社ロゴ" class="header-logoArea__icon"></a>
            <ul class="header-ul">
                <li class="header-list">
                    <a href="<?php echo esc_url(home_url( '/#ex' )); ?>" class="header-list__item js-ex__btn">導入事例</a>
                </li>
                <li class="header-list">
                    <a href="<?php echo esc_url(home_url( '/#contact' )); ?>" class="btn whiteBtn header-list__btn js-achievement__btn"><span
                            class="whiteBtn-text header-list__btn--text">実績を見る</span></a>
                </li>
            </ul>
        <?php endif; ?>
        </div>
    </header>
    <!-- /.header -->