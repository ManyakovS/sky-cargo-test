<nav class="footer-nav">
    <?php
    wp_nav_menu([
        'theme_location' => 'footer_menu',
        'container'      => false,
        'menu_class'     => 'footer-menu',
        'fallback_cb'    => '__return_false',
        'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
        'depth'          => 2,
    ]);
    ?>
</nav>