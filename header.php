<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/reset.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <title>american village</title>
    <?php wp_head(); ?>

</head>
<body>
<header>
    <div class="menu">
        <ul class="nuv">
            <?php wp_nav_menu(
                 array (
                //カスタムメニュー名
                'theme_location' => 'header-navi',
                //コンテナを表示しない
                'container' => false,
                //カスタムメニューを設定しない際に固定ページでメニューを作成しない
                'fallback_cb' => false,
                //出力されるulに対してidやclassを表示しない
                'items_wrap' => '<ul class="header-right">%3$s</ul>',
                )
            ); ?>
        </ul>
    </div>
</header>