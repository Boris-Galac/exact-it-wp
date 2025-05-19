<html lang="en" <?php language_attributes();  ?>>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?><?php wp_title('-', true, 'left'); ?></title>
    <meta name="description"
        content="Company is founded in 2016 and has a lots of successful projects behind. Our partners and our clients have recognized our quality to develop and deliver any kind of software. R&D team constantly work on improvement and testing new technologies." />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="business, technology, it, ExactIt" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <a href="<?php echo site_url() ?>" class="header__logo">
            <img src="/wp-content/themes/exactit/src/assets/images/logo.svg" alt="exactIT logotype" />
        </a>
        <nav class="nav" id="nav" aria-expanded="false">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="<?php echo site_url() ?>" class="nav__link">Home</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo site_url('services') ?>" class="nav__link">Services</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo site_url('projects') ?>" class="nav__link">Projects</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo site_url('about') ?>" class="nav__link">About us</a>
                </li>
                <li class="nav__item">
                    <a href="#contact" class="nav__link">Contact</a>
                </li>
            </ul>
        </nav>
        <button class="ham-btn" aria-label="ham button" data-active="false" tabindex="0" aria-controls="nav">
            <div class="ham-line"></div>
            <div class="ham-line"></div>
            <div class="ham-line"></div>
        </button>
    </header>