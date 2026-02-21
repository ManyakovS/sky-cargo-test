<?php
$extra_class = $args['class'] ?? '';

$classes = [
    'divider',
    $extra_class
];
?>

<hr class="<?php echo esc_attr(implode(' ', array_filter($classes))); ?>">