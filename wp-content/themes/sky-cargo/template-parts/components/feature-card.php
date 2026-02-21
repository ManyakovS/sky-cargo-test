<?php
$icon_id = $args['icon'] ?? '';
$title   = $args['title'] ?? '';
$desc    = $args['desc'] ?? '';
?>

<div class="feature-card">
    <div class="feature-card__icon">
        <?php
        if ($icon_id) {
            $icon_path = get_attached_file($icon_id);
            if ($icon_path && pathinfo($icon_path, PATHINFO_EXTENSION) === 'svg') {
                echo file_get_contents($icon_path);
            } else {
                echo wp_get_attachment_image($icon_id, 'full');
            }
        }
        ?>
    </div>

    <h3 class="feature-card__title"><?php echo esc_html($title); ?></h3>

    <?php if ($desc) : ?>
        <p class="feature-card__description">
            <?php echo esc_html($desc); ?>
        </p>
    <?php endif; ?>
</div>