<?php
$size  = $args['size'] ?? 'md';
$color = $args['color'] ?? 'light';
$extra_class = $args['class'] ?? '';

$classes = [
    'divider',
    'divider--size-' . $size,
    'divider--color-' . $color,
    $extra_class
];
?>

<hr class="<?php echo esc_attr(implode(' ', array_filter($classes))); ?>">