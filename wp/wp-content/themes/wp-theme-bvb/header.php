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

<h1 id="logo">
    <a href="<?php echo home_url(); ?>">
        <img class="img fit small" src="<?php echo get_template_directory_uri() . '/assets/images/logo_piccolo.png' ?>"/>
    </a>
</h1>
    <h1 id="title">
        <a href="<?php echo home_url(); ?>"><span class="optional"> BVB</span></a>
    </h1>
    <nav id="nav">
            <ul>
            <li><a href="<?php echo home_url(); ?>/anunturi">Anunțuri</a></li>
                <li><a href="<?php echo home_url(); ?>/blog">Articole</a></li>
                <li><a href="<?php echo home_url(); ?>/consiliere">Consiliere</a></li>
                <li>
                    <a href="<?php echo home_url(); ?>/viziune">Biserica locală <span class="icon fa-caret-down"></span></a>
                    <ul>
                        <li><a href="<?php echo home_url(); ?>/istoric">Istoric</a></li>
                        <li><a href="<?php echo home_url(); ?>/viziune">Viziune</a></li>
                        <li><a href="<?php echo home_url(); ?>/conducere">Conducere</a></li>
                        <li>
                            <a href="<?php echo home_url(); ?>/departamente">Departamente <span class="icon fa-caret-down"></span></a>
                            <ul>
                                <li><a href="<?php echo home_url(); ?>/departamente">Prezentare generală</a></li>
                                <li><a href="<?php echo home_url(); ?>/inchinare">Închinare</a></li>
                                <li><a href="<?php echo home_url(); ?>/misiune">Misiune & evanghelizare</a></li>
                                <li><a href="<?php echo home_url(); ?>/social">Acțiuni sociale</a></li>
                                <li><a href="<?php echo home_url(); ?>/tineret">Copii, adolescenți, tineret</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="<?php echo home_url(); ?>/contact">Contact</a></li>
                <li><a href="https://www.youtube.com/channel/UCEP7EO7Fso88QlA1A0YfuJg" target="_blank" class="button alt">Transmisie live</a>
                <ul>
                        <li><a href="https://www.youtube.com/channel/UCEP7EO7Fso88QlA1A0YfuJg/videos"><span class="icon fa-archive"></span> Arhivă video</a></li>
                    </ul>
                </li>
                <li><a href="" id="friendlyRead" class="icon fa-toggle-off normalSized"></a>
                    <ul>
                        <li>Comută modul citire facilă</li>
                    </ul>
                </li>
            </ul>
        </nav>
</div>