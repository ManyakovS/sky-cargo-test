<?php
$phone = get_theme_mod('header_phone');
$phone_link = 'tel:' . preg_replace('/[^0-9+]/', '', $phone);
?>

<div class="header__contacts">
    <?php get_template_part('template-parts/ui/link', null, [
        'text'  => $phone,
        'href'  => $phone_link,
        'class' => 'contacts__phone contacts__link'
    ]); ?>

    <div class="contacts__actions">
        <?php get_template_part('template-parts/ui/button', null, [
            'text'  => 'Отследить груз',
            'href'  => '/tracking',
            'class' => 'btn--secondary btn--small'
        ]); ?>

        <?php get_template_part('template-parts/ui/button', null, [
            'text'  => 'Оставить заявку',
            'href'  => '#callback',
            'class' => 'btn--white btn--small'
        ]); ?>

    </div>
</div>