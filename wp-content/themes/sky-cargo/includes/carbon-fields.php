<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_features_section');
function crb_attach_features_section() {
    /** @var \Carbon_Fields\Field\Complex_Field $features_list */
    $features_list = Field::make('complex', 'features_list', 'Список особенностей');

    Container::make('post_meta', 'Настройки страницы')
        ->where('post_id', '=', get_option('page_on_front'))
        ->add_fields(array(
            $features_list
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('image', 'icon', 'Иконка (SVG)'),
                    Field::make('text', 'title', 'Заголовок'),
                    Field::make('textarea', 'description', 'Описание'),
                )),
        ));
}
add_action('after_setup_theme', function () {
    \Carbon_Fields\Carbon_Fields::boot();
});

add_action('carbon_fields_register_fields', function() {
    Container::make('post_meta', 'Данные заявки')
        ->where('post_type', '=', 'leads')
        ->add_fields([
            Field::make('text', 'lead_company', 'Компания'),
            Field::make('text', 'lead_direction', 'Направление'),
            Field::make('text', 'lead_phone', 'Телефон'),
            Field::make('text', 'lead_email', 'Email'),
            Field::make('checkbox', 'lead_get_tariffs', 'Запросил тарифную сетку'),
        ]);
});

add_action('init', function() {
    register_post_type('leads', [
        'labels' => ['name' => 'Заявки', 'singular_name' => 'Заявка'],
        'public' => false,
        'show_ui' => true,
        'menu_icon' => 'dashicons-email-alt',
        'supports' => ['title'],
    ]);
});
?>