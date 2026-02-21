<?php
$icon_id = $args['icon'] ?? '';
$title   = $args['title'] ?? '';
$desc    = $args['desc'] ?? '';
$class   = $args['class'] ?? '';
?>

<div class="expand-card js-expand-card <?php echo esc_attr($class); ?>">
    <div class="expand-card__header js-expand-trigger">
        <div class="expand-card__icon">
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
        
        <h3 class="expand-card__title"><?php echo esc_html($title); ?></h3>

        <div class="expand-card__arrow">
            <span class="icon-arrow"></span>
        </div>
    </div>
    
    <div class="expand-card__body js-expand-body">
        <div class="expand-card__content">
            <?php if ($desc) : ?>
                <p class="expand-card__description">
                    <?php echo esc_html($desc); ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</div>