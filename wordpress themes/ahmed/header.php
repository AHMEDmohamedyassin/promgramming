<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!-- ملفات عن اللفة و اتجاه الصفحة -->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title>
            <?php wp_title('=>' , 'true' , 'right'); ?>
            <?php bloginfo('name'); ?>
        </title>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php wp_head(); ?> <!-- لازم تتحط في الاخر -->
    </head>
    <body>

<nav class="navbar navbar-expand-lg navbar bg">
    <a class="navbar-brand" href="#">ahmed</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
    </button>

    <div class="navbar collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php get_ahmedmenu(); ?>
        </ul>
    </div>
</nav>