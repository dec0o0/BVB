<!DOCTYPE html>
<html>

<head>
    <title>Biserica Vestea Bună București</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" media="all" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/css/dialog.css'?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/css/dialog-wilma.css'?>" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <meta name="description" content="Site-ul bisericii Biserica Vestea Buna din Bucuresti" />
    <meta name="keywords" content="expanding button, morph, modal, fullscreen, transition, ui" />
    <meta name="author" content="Vestea Buna" />
</head>

<body>

<!-- Header -->
<div id="header">
    <h1 id="logo"><a href="<?php echo home_url(); ?>" class="icon fa-lightbulb-o"> BVB</a></h1>
    <nav id="nav">
            <ul>
            <li><a href="<?php echo home_url(); ?>/anunturi">Anunțuri</a></li>
                <li><a href="<?php echo home_url(); ?>/blog">Articole</a></li>
                <li><a href="<?php echo home_url(); ?>/consiliere">Consiliere</a></li>
                <li>
                    <a href="<?php echo home_url(); ?>/viziune">Biserica locală</a>
                    <ul>
                        <li><a href="<?php echo home_url(); ?>/viziune">Viziune</a></li>
                        <li><a href="<?php echo home_url(); ?>/conducere">Conducere</a></li>
                        <li>
                            <a href="<?php echo home_url(); ?>/departamente">Departamente</a>
                            <ul>
                                <li><a href="<?php echo home_url(); ?>/departamente">Prezentare generală</a></li>
                                <li><a href="#">Închinare</a></li>
                                <li><a href="<?php echo home_url(); ?>/misiune">Misiune & evanghelizare</a></li>
                                <li><a href="#">Acțiuni sociale</a></li>
                                <li><a href="#">Copii, adolescenți, tineret</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="<?php echo home_url(); ?>/contact">Contact</a></li>
                <li><a href="https://www.youtube.com/channel/UCEP7EO7Fso88QlA1A0YfuJg" target="_blank" class="button alt">Transmisie live</a>
                <ul>
                        <li><a href="https://www.youtube.com/channel/UCEP7EO7Fso88QlA1A0YfuJg/videos">& Arhiva video</a></li>
                    </ul>
                </li>
                <li><a href="" id="friendlyRead" class="icon fa-toggle-off normalSized"></a>
                    <ul>
                        <li>Comută modul citire</li>
                    </ul>
                </li>
            </ul>
        </nav>
</div>