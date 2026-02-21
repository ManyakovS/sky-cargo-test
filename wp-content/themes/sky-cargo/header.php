<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="container header__container">
            <?php get_template_part('template-parts/ui/logo', null, ['class' => 'header__logo']); ?>

            <?php get_template_part('template-parts/navigation/main-menu'); ?>

            <?php get_template_part('template-parts/blocks/header-contacts'); ?>

            <?php get_template_part('template-parts/navigation/burger-menu'); ?>

        </div>
    </header>