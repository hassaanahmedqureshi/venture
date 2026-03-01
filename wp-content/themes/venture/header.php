<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="container">
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <button class="menu-toggle" onclick="document.querySelector('nav').classList.toggle('active')">☰</button>
        <nav>
            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </nav>
    </div>
</header>
<script>
if(window.innerWidth > 768) document.querySelector('nav').classList.add('active');
</script>
