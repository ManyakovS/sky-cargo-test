<?php
add_action('wp_ajax_send_lead', 'handle_lead_form');
add_action('wp_ajax_nopriv_send_lead', 'handle_lead_form');

function handle_lead_form()
{
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'lead_form_action')) {
        wp_send_json_error('Ошибка безопасности. Попробуйте обновить страницу.');
    }

    $company   = sanitize_text_field($_POST['company'] ?? '');
    $direction = sanitize_text_field($_POST['direction'] ?? '');
    $phone     = sanitize_text_field($_POST['phone'] ?? '');
    $email     = sanitize_email($_POST['email'] ?? '');
    $tariffs   = isset($_POST['get_tariffs']) ? 'yes' : 'no';
    $policy    = isset($_POST['policy']);

    if (!$policy) {
        wp_send_json_error('Необходимо согласие на обработку данных.');
    }

    if (empty($phone)) {
        wp_send_json_error('Поле "Телефон" обязательно для заполнения.');
    }

    if (!empty($email) && !is_email($email)) {
        wp_send_json_error('Указан некорректный e-mail.');
    }

    $post_id = wp_insert_post([
        'post_type'   => 'leads',
        'post_title'  => 'Заявка: ' . ($company ?: $phone) . ' (' . wp_date('d.m.Y H:i') . ')',
        'post_status' => 'publish'
    ]);

    if ($post_id) {
        update_post_meta($post_id, '_lead_company', $company);
        update_post_meta($post_id, '_lead_direction', $direction);
        update_post_meta($post_id, '_lead_phone', $phone);
        update_post_meta($post_id, '_lead_email', $email);
        update_post_meta($post_id, '_lead_get_tariffs', $tariffs);

        $admin_email = get_option('admin_email');
        $subject = 'Новая заявка на сайте: ' . ($company ?: 'Без названия');
        $message = "Новая заявка с сайта:\n\n";
        $message .= "Компания: $company\n";
        $message .= "Направление: $direction\n";
        $message .= "Телефон: $phone\n";
        $message .= "Email: $email\n";
        $message .= "Запросил тарифы: " . ($tariffs === 'yes' ? 'Да' : 'Нет') . "\n";

        wp_mail($admin_email, $subject, $message);

        wp_send_json_success('Спасибо! Ваша заявка успешно принята.');
    }

    wp_send_json_error('Произошла ошибка базы данных. Попробуйте позже.');
}
