<?php
$text   = $args['text'] ?? '';
$href   = $args['href'] ?? '#';
$class  = $args['class'] ?? '';
$attr   = $args['attr'] ?? '';
$target = $args['target'] ?? '_self';
$rel    = $args['rel'] ?? '';
$download = $args['download'] ?? false;

if ($target === '_blank' && empty($rel)) {
    $rel = 'noopener noreferrer';
}

$full_class = 'link ' . $class;
?>

<a href="<?php echo esc_url($href); ?>" 
   class="<?php echo esc_attr(trim($full_class)); ?>" 
   target="<?php echo esc_attr($target); ?>"
   <?php echo $rel ? 'rel="' . esc_attr($rel) . '"' : ''; ?>
   <?php echo $download ? 'download' : ''; ?>
   <?php echo $attr; ?>>
    <?php echo esc_html($text); ?>
</a>