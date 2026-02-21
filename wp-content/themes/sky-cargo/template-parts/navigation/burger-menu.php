<?php
$phone = get_theme_mod('header_phone');
$phone_link = 'tel:' . preg_replace('/[^0-9+]/', '', $phone);
?>


<div class="burger-menu <?php echo esc_attr($args['class'] ?? ''); ?>">
    <button class="burger-menu__trigger js-burger-trigger" aria-label="Открыть меню">
        <span class="burger-menu__bar"></span>
        <span class="burger-menu__bar"></span>
        <span class="burger-menu__bar"></span>
    </button>

    <div class="burger-menu__backdrop js-burger-backdrop"></div>

    <div class="burger-menu__panel js-burger-panel">
        <?php get_template_part('template-parts/ui/logo', null, ['logo' => 'logo2.svg'] )?>

        <?php get_template_part('template-parts/ui/divider', null,); ?>

        <nav class="burger-menu__nav">
            <?php

            wp_nav_menu([
                'theme_location' => 'header_menu',
                'container'      => false,
                'menu_class'     => 'burger-menu__list',
                'fallback_cb'    => '__return_false',
                'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
                'depth'          => 2,
            ]);
            ?>
        </nav>

        <?php get_template_part('template-parts/ui/divider', null,); ?>


        <?php get_template_part('template-parts/ui/link', null, [
            'text'  => $phone,
            'href'  => $phone_link,
            'class' => 'contacts__phone contacts__link'
        ]); ?>

        <?php get_template_part('template-parts/ui/divider', null,); ?>


        <div class="burger-menu__actions">
        <?php get_template_part('template-parts/ui/button', null, [
            'text'  => 'Отследить груз',
            'href'  => '/tracking',
            'class' => 'btn--secondary btn--small'
        ]); ?>

        <?php get_template_part('template-parts/ui/button', null, [
            'text'  => 'Оставить заявку',
            'href'  => '#lead-form',
            'class' => 'btn--primary btn--small'
        ]); ?>
        </div>

    </div>