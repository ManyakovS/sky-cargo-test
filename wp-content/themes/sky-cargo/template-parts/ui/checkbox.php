<?php
$name     = $args['name'] ?? '';
$label    = $args['label'] ?? '';
$value    = $args['value'] ?? 'yes';
$checked  = !empty($args['checked']) ? 'checked' : '';
$required = !empty($args['required']) ? 'required' : '';
$is_small = !empty($args['is_small']);
$extra_cl = $args['class'] ?? '';
$id       = $args['id'] ?? 'cb-' . $name . '-' . rand(100, 999);

$classes = ['checkbox'];
if ($is_small) $classes[] = 'checkbox--small';
if (!empty($args['class'])) $classes[] = $args['class'];
?>

<label class="<?php echo esc_attr(implode(' ', $classes)); ?>" for="<?php echo esc_attr($id); ?>">
    <input 
        type="checkbox" 
        name="<?php echo esc_attr($name); ?>" 
        id="<?php echo esc_attr($id); ?>" 
        value="<?php echo esc_attr($value); ?>"
        class="checkbox__input"
        <?php echo $checked; ?>
        <?php echo $required; ?>
    >
    <?php if ($label) : ?>
        <span class="checkbox__label"><?php echo $label; ?></span>
    <?php endif; ?>
</label>