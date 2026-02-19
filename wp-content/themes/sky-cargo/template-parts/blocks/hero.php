<section class="hero">
    <div class="container hero__container">
        <h1 class="hero__title block-title">Курьерская доставка</h1>

        <div class="hero__actions">
            <?php get_template_part('template-parts/ui/button', null, [
                'text'  => 'Оставить заявку',
                'class' => 'btn--primary btn--medium',
                'href'  => '#callback"'
            ]); ?>
        </div>

        <img class="hero__box" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/hero-box.png" alt="Курьерская доставка">
    </div>
</section>