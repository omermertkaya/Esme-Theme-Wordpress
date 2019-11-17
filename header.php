<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>

    <title><?php if(is_home()) {echo "Anasayfa";} wp_title(''); ?></title>
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/reset.css" />

    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php wp_head(); ?>
    <div class="baslik">
    <div class="ickisim">
        <div class="logom" style="padding-bottom:50px">
        <a href="<?php bloginfo('url'); ?>" class="logo">
                    <img src="<?php bloginfo('template_url'); ?>/images/logo.png">

                </a>
        </div>

        <div class="menu">
            <ul>
                <li>
                    <a href="<?php bloginfo('url'); ?>">

                        <p class="menubaslik">Anasayfa</p>
                    </a>
                </li>
                <li>
                <?php wp_list_pages("title_li=&"); ?>
                </li>



            </ul>
        </div>

    </div>
    <div class="clear"></div>
    <div class="menualtcizgi"></div>
    <div class="clear"></div>


    </div>
    </div>
    <!-- header kısmı --!>


<div class="clear"></div>

</head>
<body>

<!-- header kısmı --!>

    <div class="anakisim baslik">
