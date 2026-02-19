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
?>