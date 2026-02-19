<?php
$text  = $args['text'] ?? 'Кнопка';
$href  = $args['href'] ?? '';
$type  = $args['type'] ?? 'button';
$class = $args['class'] ?? 'btn--primary';
$attr  = $args['attr'] ?? '';

$full_class = 'btn ' . $class;
?>

<?php if ($href) : ?>
    <a href="<?php echo esc_url($href); ?>" class="<?php echo esc_attr($full_class); ?>" <?php echo $attr; ?>>
        <?php echo esc_html($text); ?>
    </a>
<?php else : ?>
    <button type="<?php echo esc_attr($type); ?>" class="<?php echo esc_attr($full_class); ?>" <?php echo $attr; ?>>
        <?php echo esc_html($text); ?>
    </button>
<?php endif; ?>