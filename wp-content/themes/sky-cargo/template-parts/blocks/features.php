<?php
$front_id = get_option('page_on_front');
$features = carbon_get_post_meta($front_id, 'features_list');

if (!empty($features)) : ?>
    <section class="features container">
        <h2 class="features__title block-title">Сервис для перевозки ценных грузов</h2>

        <div class="features__cards">
            <?php foreach ($features as $feature) :
                get_template_part('template-parts/components/feature-card', null, [
                    'icon'  => $feature['icon'],
                    'title' => $feature['title'],
                    'desc'  => $feature['description'],
                ]);
            endforeach;
            ?>
        </div>

    </section>
<?php endif; ?>