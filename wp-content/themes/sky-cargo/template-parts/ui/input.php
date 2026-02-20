<?php
$type        = $args['type'] ?? 'text';
$name        = $args['name'] ?? '';
$placeholder = $args['placeholder'] ?? '';
$value       = $args['value'] ?? '';
$pattern     = $args['pattern'] ?? ''; // Новый параметр
$required    = !empty($args['required']) ? 'required' : '';
$extra_cl    = $args['class'] ?? '';
$id          = $args['id'] ?? 'input-' . $name . '-' . rand(100, 999);
?>

<div class="field-wrapper <?php echo esc_attr($extra_cl); ?>">
    <input 
        type="<?php echo esc_attr($type); ?>" 
        name="<?php echo esc_attr($name); ?>" 
        id="<?php echo esc_attr($id); ?>" 
        value="<?php echo esc_attr($value); ?>"
        placeholder="<?php echo esc_attr($placeholder); ?>"
        class="form-input"
        <?php echo $pattern ? 'pattern="' . esc_attr($pattern) . '"' : ''; ?> 
        <?php echo $required; ?>
    >
</div>