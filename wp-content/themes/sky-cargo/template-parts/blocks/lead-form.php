<form id="lead-form" action="<?php echo admin_url('admin-ajax.php'); ?>" method="POST" class="lead-form container">
    <?php wp_nonce_field('lead_form_action', 'nonce'); ?>

    <h3 class="lead-form__title block-title">Оставить заявку</h3>

    <div class="lead-form__fields">
        <?php
        get_template_part('template-parts/ui/input', null, [
            'name' => 'company',
            'placeholder' => 'Название компании',
            'required' => true
        ]);

        get_template_part('template-parts/ui/input', null, [
            'name' => 'direction',
            'placeholder' => 'Направление'
        ]);

        get_template_part('template-parts/ui/input', null, [
            'type' => 'tel',
            'name' => 'phone',
            'placeholder' => 'Номер телефона',
            'pattern' => '[\+0-9\-\(\)\s]{10,20}',
            'required' => true
        ]);

        get_template_part('template-parts/ui/input', null, [
            'type' => 'email',
            'name' => 'email',
            'placeholder' => 'E-mail',
            'required' => true
        ]);
        ?>

        <?php get_template_part('template-parts/ui/checkbox', null, [
            'name'  => 'get_tariffs',
            'label' => 'Запросить тарифную сетку',
            'class' => 'lead-form--full-row'
        ]); ?>


        <?php get_template_part('template-parts/ui/button', null, [
            'text'  => 'Отправить',
            'type'  => 'submit',
            'class' => 'btn--secondary btn--large lead-form__submit lead-form--full-row'
        ]); ?>

        <?php get_template_part('template-parts/ui/checkbox', null, [
            'name'     => 'policy',
            'label'    => 'Я согласен на обработку персональных данных в соответствии с политикой конфиденциальности.',
            'is_small' => true,
            'required' => true,
            'checked'  => true,
            'class' => 'lead-form--full-row'
        ]); ?>

        <div class="lead-form__message js-form-message"></div>
    </div>
    <input type="hidden" name="action" value="send_lead">
</form>