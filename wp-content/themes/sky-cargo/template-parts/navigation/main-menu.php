<nav class="main-menu" aria-label="Главное меню">
    <?php
    wp_nav_menu([
        'theme_location' => 'header_menu',
        'container'      => false,
        'menu_class'     => 'main-menu__list',
        'fallback_cb'    => '__return_false',
        'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
        'depth'          => 2,
    ]);
    ?>
</nav>