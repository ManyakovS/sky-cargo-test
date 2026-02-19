<?php
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
?>