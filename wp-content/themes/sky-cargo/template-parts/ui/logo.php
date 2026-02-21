<?php
$custom_logo_id = get_theme_mod('custom_logo');
$additional_class = $args['class'] ?? '';
$is_home = is_front_page() || is_home();
$logo = $args['logo'] ?? 'logo.svg';
?>

<div class="logo <?php echo esc_attr($additional_class); ?>">
    <?php if ($custom_logo_id) : ?>
        <?php 
        if ($is_home) : ?>
            <div class="logo__inner">
                <?php echo wp_get_attachment_image($custom_logo_id, 'full', false, ['class' => 'custom-logo']); ?>
            </div>
        <?php else : ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo__link">
                <?php echo wp_get_attachment_image($custom_logo_id, 'full', false, ['class' => 'custom-logo']); ?>
            </a>
        <?php endif; ?>

    <?php else : ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo__link">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/<?php echo $logo ?>" 
                 alt="<?php bloginfo('name'); ?>" 
                 class="custom-logo">
        </a>
    <?php endif; ?>
</div>