<?php
add_action('after_setup_theme', function () {
    register_nav_menus([
        'header_menu' => 'Главное меню (Шапка)',
        'footer_menu' => 'Меню в футере',
    ]);
});
?>