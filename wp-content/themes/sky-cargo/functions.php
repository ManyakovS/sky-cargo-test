<?php
function sky_cargo_theme_assets()
{
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();

    wp_enqueue_style('sky-cargo-base', get_stylesheet_uri());

    $css_path = '/dist/assets/style.css';
    if (file_exists($theme_dir . $css_path)) {
        wp_enqueue_style(
            'sky-cargo-main',
            $theme_uri . $css_path,
            array(),
            filemtime($theme_dir . $css_path)
        );
    }

    $js_path = '/dist/assets/main.js';
    if (file_exists($theme_dir . $js_path)) {
        wp_enqueue_script(
            'sky-cargo-js',
            $theme_uri . $js_path,
            array(),
            filemtime($theme_dir . $js_path),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'sky_cargo_theme_assets');


function sky_cargo_customize_register($wp_customize)
{
    $wp_customize->add_section('sky_cargo_contacts', [
        'title'    => 'Контакты',
        'priority' => 30,
    ]);

    $wp_customize->add_setting('header_phone', [
        'default'   => '+7 (495) 023-12-12',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('header_phone_control', [
        'label'    => 'Номер телефона',
        'section'  => 'sky_cargo_contacts',
        'settings' => 'header_phone',
        'type'     => 'text',
    ]);
}
add_action('customize_register', 'sky_cargo_customize_register');

add_action('after_setup_theme', function () {
    register_nav_menus([
        'header_menu' => 'Главное меню (Шапка)',
    ]);
});

