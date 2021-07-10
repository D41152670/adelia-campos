<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lity.css">

    <title> <?php wp_title() ?> </title>

    <?php wp_head() ?>

</head>

<body>
<header id="menu-site" class="header-site fixed-top">
    <div class="container">
        <div class="header">
            <div class="header-logo">
                <a href="<?= esc_url(home_url('/')) ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo Adélia Campos Advogados" class="img-fluid">
                </a>
            </div>

            <div class="header-menu menu-desk">
                <nav class="navbar-site">
                    <ul class="navbar-site__menu">
                        <li><a href="<?= esc_url(home_url('institucional')) ?>" class="navbar-site__link">Institucional</a></li>
                        <li><a href="<?= esc_url(home_url('equipe')) ?>" class="navbar-site__link">Equipe</a></li>
                        <li><a href="<?= esc_url(home_url('atuacao')) ?>" class="navbar-site__link">Áreas de atuação</a></li>
                        <li><a href="<?= esc_url(home_url('blog')) ?>"  class="navbar-site__link">Blog</a></li>
                        <li><a href="<?= esc_url(home_url('legislacao')) ?>" class="navbar-site__link">Legislação</a></li>
                    </ul>
                </nav>

                <div class="top-contact">
                    <a href="<?= esc_url(home_url('#contact')) ?>" class="btn scroll-contact">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-mail.png" alt="" class="img-fluid">
                        Entre em contato
                    </a>
                </div>
            </div>
        </div>

        <div class="menu-site">
            <div class="menu-topo">
                <div class="logo">
                    <a href="<?= esc_url(home_url('/')) ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo Adélia Campos Advogados" class="img-fluid">
                    </a>
                </div>

                <nav class="menu-principal">
                    <div class="body-menu-responsive">
                        <ul class="lista-menu">
                            <li><a href="<?= esc_url(home_url('institucional')) ?>" class="navbar-site__link">Institucional</a></li>
                            <li><a href="<?= esc_url(home_url('equipe')) ?>" class="navbar-site__link">Equipe</a></li>
                            <li><a href="<?= esc_url(home_url('atuacao')) ?>" class="navbar-site__link">Áreas de atuação</a></li>
                            <li><a href="<?= esc_url(home_url('blog')) ?>"  class="navbar-site__link">Blog</a></li>
                            <li><a href="<?= esc_url(home_url('legislacao')) ?>" class="navbar-site__link">Legislação</a></li>
                        </ul>
                    </div>
                </nav>

                <div class="btn-menu-responsive d-block d-lg-none">
                    <div class="icon-bar"></div>
                </div>
            </div>
        </div>
    </div>
</header>